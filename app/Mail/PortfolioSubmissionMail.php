<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class PortfolioSubmissionMail extends Mailable
{
    public const CONSENT_TEXT = 'I consent to Nayantha displaying my name, role, organization, and recommendation on this portfolio after his approval. My email address stays private. I can request removal by contacting Nayantha.';

    public function __construct(public array $submission) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->submission['kind'] === 'recommendation'
                ? 'Private review: portfolio recommendation' : 'Private portfolio feedback',
            replyTo: [$this->submission['email']],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.portfolio-submission');
    }
}
