# Recommendations and private feedback

## What changed

`/recommendations` shows a manually approved public list and two submission forms.
No admin panel, approval routes, public submission API, or submission database exists.
The existing `/contact` WhatsApp flow is unchanged.

All new submissions are emailed ONLY to `PORTFOLIO_REVIEW_EMAIL`. They never alter
`config/portfolio.php`. Feedback cannot include public consent; recommendations must
include the exact consent checkbox. Names, roles, organizations and quotes are escaped
by Blade. Visitor email addresses are never included in public recommendations.
No request content is logged or flashed back into HTML after validation or delivery errors.

## Configure private delivery (before enabling)

Set the following in the server's existing `.env` when you choose to release this feature:

```dotenv
PORTFOLIO_REVIEW_EMAIL=your-private-review-inbox@example.com
PORTFOLIO_REVIEW_MAILER=smtp
PORTFOLIO_SUBMISSIONS_ENABLED=false
MAIL_MAILER=smtp
MAIL_HOST=your-provider-smtp-host
MAIL_PORT=587
MAIL_SCHEME=smtp
MAIL_USERNAME=your-smtp-user
MAIL_PASSWORD=your-smtp-password
MAIL_FROM_ADDRESS=portfolio@your-domain.com
MAIL_FROM_NAME="Nayantha Dhasun"
```

Use your provider's actual settings. For implicit TLS on port 465 use `MAIL_SCHEME=smtps`.
Keep `.env` private. Only after a delivery test succeeds, set
`PORTFOLIO_SUBMISSIONS_ENABLED=true` and refresh Laravel config (`php artisan config:cache`).
Use a private inbox you control, with appropriate access protection and retention.
The named review mailer must use a real delivery transport. `log`, `array`, and failover
mailers are rejected so private content cannot silently fall into logs. Delivery failures
show a generic retry message, not a success notice. No queue worker or database migration
is required. The application uses its existing cache backend for rate limiting and its
existing session backend for CSRF and form notices; these must be working on the server.

## Review and approve manually

1. Read the private review email. Confirm who wrote it and that it describes real work.
2. Private feedback stays in your inbox. Never copy it into the public list.
3. For recommendations, verify that the email records public consent. Verify the name,
   role, organization, and wording with the sender if needed. Obtain fresh permission
   for substantive changes. Consent alone is NOT approval.
4. Only after you approve, add an entry to `recommendations` in `config/portfolio.php`:

```php
[
    'approved' => true,
    'public_consent' => true,
    'name' => 'THE APPROVED PUBLIC NAME',
    'role' => 'THE APPROVED PUBLIC ROLE', // optional
    'organization' => 'THE APPROVED PUBLIC ORGANIZATION', // optional
    'recommendation' => 'THE EXACT APPROVED PUBLIC WORDING',
],
```

This is a structural template, not a testimonial. The initial list is empty. Do not add
emails, draft text, private feedback, or whole email messages to this config file.
Both flags must be the boolean `true`; the controller filters entries before rendering
and only passes the four public fields to the view. There are no recommendations hidden
in JavaScript, HTML data attributes, or a client-side dataset.

5. Release that reviewed config change yourself and run `php artisan config:cache`.
   Keep the consent email privately as the approval record. To remove a recommendation,
   delete its entry (or set `approved` to `false`) and refresh the configuration cache.
   Handle a sender's removal request through the private inbox and remove the entry.

## Protections and verification

Forms use Laravel CSRF tokens, server-side validation, a hidden honeypot, and shared
limits of 3 requests per minute / 10 per day per IP. They do not upload files. These
limits include failed attempts and can affect visitors sharing an IP. Set trusted
proxies according to your hosting provider if requests arrive through a proxy; do not
blindly trust arbitrary forwarded IP headers.

Run `php tests/recommendations-smoke.php` for local integration checks. It uses array
sessions/cache and fake mail (no external email is sent), checks private/public boundaries,
consent, validation, rate limiting, delivery failure, CSRF and HTML escaping. The test
fixtures are injected in memory only and are never saved as public recommendations.
Run `npm run build` for assets. No deployment is performed by these commands.
