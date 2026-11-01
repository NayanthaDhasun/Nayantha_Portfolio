<?php

return [
    'review_email' => env('PORTFOLIO_REVIEW_EMAIL', 'nayanthasr@gmail.com'),
    // Use a real delivery transport; never fall back to logs for private submissions.
    'review_mailer' => env('PORTFOLIO_REVIEW_MAILER', 'smtp'),
    'submissions_enabled' => env('PORTFOLIO_SUBMISSIONS_ENABLED', false),

    // Only manually approved, consented PUBLIC text belongs here. No emails or drafts.
    'recommendations' => [],
];
