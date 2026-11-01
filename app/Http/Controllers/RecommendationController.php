<?php

namespace App\Http\Controllers;

use App\Mail\PortfolioSubmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RecommendationController extends Controller
{
    public function index()
    {
        $recommendations = collect(config('portfolio.recommendations', []))
            ->filter(fn ($item) => is_array($item)
                && ($item['approved'] ?? false) === true
                && ($item['public_consent'] ?? false) === true
                && is_string($item['name'] ?? null) && trim($item['name']) !== ''
                && is_string($item['recommendation'] ?? null) && trim($item['recommendation']) !== '')
            ->map(fn ($item) => array_intersect_key($item, array_flip(['name', 'role', 'organization', 'recommendation'])))
            ->values();

        return response()->view('recommendations.index', compact('recommendations'))
            ->header('Cache-Control', 'private, no-store');
    }

    public function store(Request $request)
    {
        $kind = $request->input('kind') === 'recommendation' ? 'recommendation' : 'feedback';
        $validator = Validator::make($request->all(), [
            'kind' => 'required|in:feedback,recommendation',
            'name' => ['required', 'string', 'max:100', 'not_regex:/[\r\n]/'],
            'email' => 'required|email:rfc|max:150',
            'role' => 'nullable|string|max:120',
            'organization' => 'nullable|string|max:150',
            'message' => 'required|string|min:20|max:3000',
            'public_consent' => $kind === 'recommendation' ? 'required|accepted' : 'prohibited',
            'website' => 'nullable|string|max:0',
        ]);

        if ($validator->fails()) {
            return redirect()->route('recommendations.index', [], 303)
                ->withErrors($validator, $kind)->with('submission_kind', $kind);
        }

        $mailer = config('portfolio.review_mailer');
        $transport = config("mail.mailers.{$mailer}.transport");
        if (!config('portfolio.submissions_enabled')
            || !in_array($transport, ['smtp', 'sendmail', 'ses', 'ses-v2', 'postmark', 'resend', 'mailgun'], true)
            || !filter_var(config('portfolio.review_email'), FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('recommendations.index', [], 303)
                ->with('submission_error', 'Submissions are temporarily unavailable. Please try again later.');
        }

        $data = $validator->validated();
        unset($data['website']);
        $data['public_consent'] = $kind === 'recommendation';
        $data['received_at'] = now()->toIso8601String();
        $data['consent_text'] = $kind === 'recommendation'
            ? PortfolioSubmissionMail::CONSENT_TEXT : 'Private feedback only. No public display permission.';

        try {
            Mail::mailer($mailer)->to(config('portfolio.review_email'))->send(new PortfolioSubmissionMail($data));
        } catch (\Throwable $exception) {
            // Do not log the exception, request, or message: transports can include private content.
            return redirect()->route('recommendations.index', [], 303)
                ->with('submission_error', 'Your message could not be delivered. Please try again later.');
        }

        return redirect()->route('recommendations.index', [], 303)
            ->with('submission_success', 'Thank you. Your message was sent privately for review. Nothing has been published.');
    }
}
