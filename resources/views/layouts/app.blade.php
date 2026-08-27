<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <title>Nayantha Dhasun | Associate ERP Functional Consultant & Business Systems Analyst</title>
    <meta name="description" content="Portfolio of Nayantha Dhasun, Associate ERP Functional Consultant specializing in Odoo implementations (Sales, Purchase, Inventory, Accounting, HR), business process re-engineering, and AI-powered enterprise systems.">
    <meta name="keywords" content="ERP Consultant, Odoo Functional Consultant, Business Systems Analyst, Nayantha Dhasun, Odoo Sri Lanka, ERP Implementation, Business Process Re-engineering, Power BI ERP">
    <meta name="author" content="Nayantha Dhasun Bandara Ilukpitiya">

    <!-- Open Graph / Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nayantha Dhasun | Associate ERP Functional Consultant">
    <meta property="og:description" content="Transforming complex business workflows into scalable, automated ERP solutions with Odoo, AI integrations, and financial precision.">
    <meta property="og:image" content="{{ asset('images/nayantha_avatar.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#08040F] text-[#F3F0FF] antialiased selection:bg-purple-600 selection:text-white relative overflow-x-hidden min-h-screen">

    <!-- Background Grid & Atmospheric Glows -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0"></div>
    <div class="glow-orb-primary -top-40 -left-40"></div>
    <div class="glow-orb-secondary top-1/3 -right-40"></div>
    <div class="glow-orb-primary bottom-20 left-1/4"></div>

    <!-- Notification Toast if session has status -->
    @if(session('success'))
        <div x-data="{ show: true }" 
             x-show="show" 
             x-init="setTimeout(() => show = false, 7000)"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-4"
             class="fixed bottom-6 right-6 z-50 max-w-md p-4 rounded-xl glass-panel border border-purple-500/40 shadow-2xl bg-[#140A2C]/95 flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 mt-0.5">
                <i data-lucide="check-circle-2" class="w-5 h-5"></i>
            </div>
            <div class="flex-1">
                <h4 class="font-semibold text-white text-sm">Consultation Requested!</h4>
                <p class="text-xs text-purple-200/90 mt-1 leading-relaxed">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="text-purple-400 hover:text-white transition-colors">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
    @endif

    <!-- Main Container -->
    <div class="relative z-10 flex flex-col min-h-screen">
        @include('components.navbar')

        <main class="flex-1">
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    <!-- Initialize Lucide Icons after render -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
        document.addEventListener('alpine:initialized', () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>
