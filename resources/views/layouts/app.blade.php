<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f1f4f3">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=1">
    <title>Nayantha Dhasun — ERP Consultant & Business Systems Analyst</title>
    <meta name="description" content="Nayantha Dhasun, Associate ERP Functional Consultant in Colombo. Odoo implementations, business systems analysis, AI integrations and financial analytics.">
    <meta property="og:title" content="Nayantha Dhasun — Making business systems work better.">
    <meta property="og:description" content="Odoo ERP, business analysis and intelligent automation. Explore my work and let's build your next solution.">
    <meta property="og:image" content="{{ asset('images/nayantha_avatar.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;450;500;550;600;650;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        (() => {
            let theme;
            try { theme = localStorage.getItem('portfolio_theme'); } catch {}
            const dark = theme !== 'light';
            document.documentElement.dataset.theme = dark ? 'dark' : 'light';
            document.querySelector('meta[name="theme-color"]').content = dark ? '#101c25' : '#f1f4f3';
        })();
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    <div class="scroll-progress" aria-hidden="true"></div>
    @include('components.navbar')
    <main id="main">@yield('content')</main>
    @include('components.footer')
</body>
</html>
