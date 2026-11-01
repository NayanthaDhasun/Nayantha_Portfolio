@extends('layouts.app')
@section('content')
<section class="section container recommendations-page">
    <div class="section-label"><span>RECOMMENDATIONS & FEEDBACK</span><a href="{{ route('portfolio.index') }}">BACK TO PORTFOLIO ↗</a></div>
    <div class="section-heading"><h1>Professional perspectives.<br><span class="serif-accent">Shared with permission.</span></h1><p>Recommendations from people I’ve worked with, published only with their consent and after my review.</p></div>
    @forelse($recommendations as $recommendation)
    <figure class="approved-recommendation"><blockquote>{{ $recommendation['recommendation'] }}</blockquote><figcaption><strong>{{ $recommendation['name'] }}</strong><span>{{ $recommendation['role'] ?? '' }}@if(!empty($recommendation['role']) && !empty($recommendation['organization'])) · @endif{{ $recommendation['organization'] ?? '' }}</span></figcaption></figure>
    @empty
    <div class="recommendation-empty"><span aria-hidden="true">“</span><div><h2>No recommendations published yet.</h2><p>Only approved recommendations appear here. If we’ve worked together, you’re welcome to share your experience below.</p></div></div>
    @endforelse
    <div class="submission-heading"><h2>Share your perspective.</h2><p>Send private feedback or a professional recommendation. Every submission goes privately to Nayantha. Nothing is published automatically.</p></div>
    @if(session('submission_success'))<div class="submission-notice" role="status">{{ session('submission_success') }}</div>@endif
    @if(session('submission_error'))<div class="form-errors" role="alert">{{ session('submission_error') }}</div>@endif
    @if(!config('portfolio.submissions_enabled'))<p class="submission-notice">The submission forms are being set up. Please check back soon.</p>@endif
    <div class="submission-grid">
    @foreach(['feedback' => 'Private portfolio feedback', 'recommendation' => 'Professional recommendation'] as $kind => $title)
    <form class="contact-form submission-form" action="{{ route('recommendations.store') }}" method="POST">
        @csrf<input type="hidden" name="kind" value="{{ $kind }}">
        <h2>{{ $title }}</h2><p>{{ $kind === 'feedback' ? 'Ideas, issues, or suggestions about this portfolio. Your feedback stays private.' : 'Worked with me? Share your experience. Public display requires your consent and my approval.' }}</p>
        @if($errors->getBag($kind)->any())<div class="form-errors" role="alert"><strong>Please check your submission.</strong><ul>@foreach($errors->getBag($kind)->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
        <div class="form-row"><div><label for="{{ $kind }}-name">Name *</label><input id="{{ $kind }}-name" name="name" autocomplete="name" maxlength="100" required></div><div><label for="{{ $kind }}-email">Email (always private) *</label><input id="{{ $kind }}-email" name="email" type="email" autocomplete="email" maxlength="150" required></div></div>
        @if($kind === 'recommendation')<div class="form-row"><div><label for="recommendation-role">Role (optional, public if approved)</label><input id="recommendation-role" name="role" autocomplete="organization-title" maxlength="120"></div><div><label for="recommendation-organization">Organization (optional, public if approved)</label><input id="recommendation-organization" name="organization" autocomplete="organization" maxlength="150"></div></div>@endif
        <div><label for="{{ $kind }}-message">{{ $kind === 'feedback' ? 'Your feedback' : 'Your recommendation' }} * (20–3,000 characters)</label><textarea id="{{ $kind }}-message" name="message" rows="5" minlength="20" maxlength="3000" required></textarea></div>
        <div class="submission-trap" aria-hidden="true"><label for="{{ $kind }}-website">Leave this field empty</label><input id="{{ $kind }}-website" name="website" tabindex="-1" autocomplete="off"></div>
        @if($kind === 'recommendation')<div><label class="consent-label" for="recommendation-consent"><input id="recommendation-consent" name="public_consent" type="checkbox" value="1" required><span>{{ \App\Mail\PortfolioSubmissionMail::CONSENT_TEXT }}</span></label></div>@endif
        <button class="button button-dark" type="submit" @disabled(!config('portfolio.submissions_enabled'))>Send privately for review <span aria-hidden="true">↗</span></button><small class="form-note">Your email is used only to follow up about this submission. Please avoid confidential client or business information.</small>
    </form>
    @endforeach
    </div>
</section>
@endsection
