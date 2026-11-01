<?php
// Standalone integration checks: usable without installing PHPUnit dependencies.
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$kernel->bootstrap();
$app->instance('env', 'testing');
config(['session.driver' => 'array', 'cache.default' => 'array', 'portfolio.submissions_enabled' => true,
    'portfolio.review_mailer' => 'smtp', 'portfolio.review_email' => 'review@example.test']);
Illuminate\Support\Facades\Mail::fake();
$passed = 0;
function check($condition, $label) { global $passed; if (!$condition) throw new RuntimeException($label); $passed++; echo "PASS: $label\n"; }
function requestPage($method, $url, $data = [], $ip = null) {
    global $kernel;
    static $counter = 0;
    $request = Illuminate\Http\Request::create($url, $method, $data, [], [], ['REMOTE_ADDR' => $ip ?? '192.0.2.'.(++$counter)]);
    $response = $kernel->handle($request);
    $kernel->terminate($request, $response);
    return $response;
}
$data = ['kind' => 'recommendation', 'name' => 'Test sender', 'email' => 'private@example.test',
    'message' => 'PRIVATE SUBMISSION SENTINEL: this must never become a public quote.', 'public_consent' => '1'];
$r = requestPage('GET', '/recommendations');
check($r->getStatusCode() === 200 && str_contains($r->getContent(), 'No recommendations published yet.'), 'Empty approved list renders honestly');
check(str_contains($r->getContent(), 'name="_token"'), 'Forms include CSRF token');
$r = requestPage('POST', '/recommendations', $data);
check($r->getStatusCode() === 303, 'Valid recommendation redirects');
$sent = Illuminate\Support\Facades\Mail::sent(App\Mail\PortfolioSubmissionMail::class);
check($sent->count() === 1 && $sent->first()->hasTo('review@example.test'), 'Only the private reviewer receives mail');
check($sent->first()->submission['public_consent'] === true && isset($sent->first()->submission['received_at']), 'Recommendation mail records consent and timestamp');
$invalid = $data; unset($invalid['public_consent']); requestPage('POST', '/recommendations', $invalid);
check(session('errors')->getBag('recommendation')->has('public_consent'), 'Consent is mandatory');
$invalid = $data; $invalid['website'] = 'spam.example'; requestPage('POST', '/recommendations', $invalid);
check(session('errors')->getBag('recommendation')->has('website'), 'Honeypot blocks spam');
$invalid = $data; $invalid['email'] = 'bad'; $invalid['message'] = 'short'; requestPage('POST', '/recommendations', $invalid);
check(session('errors')->getBag('recommendation')->has('email') && session('errors')->getBag('recommendation')->has('message'), 'Invalid email and short message rejected');
$invalid = $data; $invalid['message'] = str_repeat('x', 3001); requestPage('POST', '/recommendations', $invalid);
check(session('errors')->getBag('recommendation')->has('message'), 'Oversized content rejected');
$feedback = $data; $feedback['kind'] = 'feedback'; unset($feedback['public_consent']); requestPage('POST', '/recommendations', $feedback);
$sent = Illuminate\Support\Facades\Mail::sent(App\Mail\PortfolioSubmissionMail::class);
check($sent->count() === 2 && $sent->last()->submission['public_consent'] === false, 'Feedback stays private without consent');
$feedback['public_consent'] = '1'; requestPage('POST', '/recommendations', $feedback);
check(session('errors')->getBag('feedback')->has('public_consent'), 'Feedback cannot opt into publication');
check(Illuminate\Support\Facades\Mail::sent(App\Mail\PortfolioSubmissionMail::class)->count() === 2, 'Invalid submissions never mail');
$r = requestPage('GET', '/recommendations');
check(!str_contains($r->getContent(), 'PRIVATE SUBMISSION SENTINEL') && !str_contains($r->getContent(), 'private@example.test'), 'Submissions and sender email never enter public HTML');
config(['portfolio.recommendations' => [
    ['approved' => false, 'public_consent' => true, 'name' => 'Hidden', 'recommendation' => 'UNAPPROVED_SENTINEL'],
    ['approved' => true, 'public_consent' => false, 'name' => 'Hidden', 'recommendation' => 'NO_CONSENT_SENTINEL'],
    ['approved' => true, 'public_consent' => true, 'name' => '<script>alert(1)</script>', 'recommendation' => 'TEST APPROVED FIXTURE', 'email' => 'hidden@example.test'],
]]);
$r = requestPage('GET', '/recommendations'); $html = $r->getContent();
check(str_contains($html, 'TEST APPROVED FIXTURE') && !str_contains($html, 'UNAPPROVED_SENTINEL') && !str_contains($html, 'NO_CONSENT_SENTINEL'), 'Only approved and consented entries render');
check(str_contains($html, '&lt;script&gt;') && !str_contains($html, '<script>alert(1)</script>') && !str_contains($html, 'hidden@example.test'), 'Public entries are escaped and private fields discarded');
config(['portfolio.recommendations' => []]);
for ($i = 0; $i < 3; $i++) requestPage('POST', '/recommendations', [], '198.51.100.1');
check(requestPage('POST', '/recommendations', [], '198.51.100.1')->getStatusCode() === 429, 'Repeated requests are throttled');
config(['portfolio.review_mailer' => 'log']); requestPage('POST', '/recommendations', $data);
check(session('submission_error') && Illuminate\Support\Facades\Mail::sent(App\Mail\PortfolioSubmissionMail::class)->count() === 2, 'Log transport cannot accept private content');
config(['portfolio.review_mailer' => 'smtp', 'portfolio.submissions_enabled' => false]); requestPage('POST', '/recommendations', $data);
check(session('submission_error') && Illuminate\Support\Facades\Mail::sent(App\Mail\PortfolioSubmissionMail::class)->count() === 2, 'Disabled submissions never mail');
config(['portfolio.submissions_enabled' => true]);
Illuminate\Support\Facades\Mail::swap(new class {
    public function mailer($name) { return $this; }
    public function to($recipient) { return $this; }
    public function send($mail) { throw new RuntimeException('PRIVATE TRANSPORT ERROR'); }
});
requestPage('POST', '/recommendations', $data);
check(session('submission_error') === 'Your message could not be delivered. Please try again later.', 'Delivery failures return a generic error');
$app->instance('env', 'production');
check(requestPage('POST', '/recommendations', $data)->getStatusCode() === 419, 'Production requests require CSRF');
echo "\n$passed integration checks passed. No email sent; no public content saved.\n";
