<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><title>Private portfolio submission</title></head>
<body style="font-family:Arial,sans-serif;line-height:1.7;color:#172c37">
<h1>Private {{ $submission['kind'] }}</h1>
<p><strong>Not published. Manual review required.</strong></p>
<p>Name: {{ $submission['name'] }}<br>Email (private): {{ $submission['email'] }}<br>Role: {{ $submission['role'] ?? 'Not supplied' }}<br>Organization: {{ $submission['organization'] ?? 'Not supplied' }}<br>Received: {{ $submission['received_at'] }}</p>
<div style="white-space:pre-wrap">{{ $submission['message'] }}</div>
<h2>Display consent</h2><p>{{ $submission['consent_text'] }}</p>
@if($submission['kind'] === 'recommendation')<p>Verify identity and wording before approval. To publish, manually add only the approved public fields to config/portfolio.php. Never copy the email address or this entire email into that file.</p>@else<p>This is private feedback. Do not publish it.</p>@endif
</body></html>
