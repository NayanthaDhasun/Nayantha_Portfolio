<header class="site-header">
    <div class="container nav-wrap">
        <a href="{{ route('portfolio.index') }}#hero" class="brand" aria-label="Nayantha Dhasun home"><span class="brand-mark">nd<span>·</span></span><span class="brand-name">Nayantha Dhasun<span>ERP CONSULTING</span></span></a>
        <button class="theme-toggle" type="button" aria-label="Dark mode" aria-pressed="false" title="Switch to dark mode">
            <svg class="theme-moon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20.9 13.1A9 9 0 0 1 10.9 3.1 9 9 0 1 0 20.9 13.1Z"/></svg>
            <svg class="theme-sun" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M2 12h2m16 0h2M4.9 4.9l1.4 1.4m11.4 11.4 1.4 1.4M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
        </button>
        <button class="menu-toggle" aria-label="Open navigation" aria-expanded="false" aria-controls="main-nav"><span></span><span></span></button>
        <nav id="main-nav" aria-label="Main navigation">
            <a href="{{ route('portfolio.index') }}#about">Consultant</a><a href="{{ route('portfolio.index') }}#expertise">Capabilities</a><a href="{{ route('portfolio.index') }}#projects">Engagements</a><a href="{{ route('portfolio.index') }}#experience">Experience</a>
            <a class="recommendations-link" href="{{ route('recommendations.index') }}" @if(request()->routeIs('recommendations.*')) aria-current="page" @endif>Recommendations</a>
            <a class="nav-contact" href="{{ route('portfolio.index') }}#contact">Let’s talk <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
</header>
