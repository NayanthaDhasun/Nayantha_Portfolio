<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="{ 'glass-nav py-3.5 shadow-lg shadow-purple-950/20': scrolled, 'bg-transparent py-5': !scrolled }"
        class="fixed top-0 left-0 right-0 z-40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#hero" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-700 via-purple-600 to-indigo-500 flex items-center justify-center font-bold text-white shadow-md shadow-purple-900/40 group-hover:scale-105 transition-transform duration-200 border border-purple-400/30">
                    <span class="text-sm tracking-wider">ND</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base text-white tracking-tight group-hover:text-purple-300 transition-colors">
                        Nayantha Dhasun
                    </span>
                    <span class="text-[11px] text-purple-400 font-mono flex items-center gap-1.5 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        ERP Functional Consultant
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-1 text-sm font-medium text-purple-200/80 bg-[#120826]/80 p-1.5 rounded-full border border-purple-500/20 backdrop-blur-md">
                <a href="#about" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">About</a>
                <a href="#expertise" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">ERP Modules</a>
                <a href="#methodology" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Methodology</a>
                <a href="#projects" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Projects</a>
                <a href="#experience" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Experience</a>
                <a href="#credentials" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Credentials</a>
                <a href="#contact" class="px-3.5 py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Contact</a>
            </nav>

            <!-- CTA Actions -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('portfolio.download-cv') }}" 
                   class="btn-secondary px-4 py-2 rounded-xl text-xs font-semibold flex items-center gap-2 border border-purple-500/30 hover:border-purple-400">
                    <i data-lucide="download" class="w-3.5 h-3.5 text-purple-300"></i>
                    <span>Download CV</span>
                </a>
                <a href="#contact" 
                   class="btn-primary px-4 py-2 rounded-xl text-xs font-semibold flex items-center gap-1.5">
                    <span>Consultation</span>
                    <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" 
                    type="button" 
                    class="lg:hidden p-2 rounded-lg bg-purple-950/60 border border-purple-500/20 text-purple-200 hover:text-white focus:outline-none"
                    aria-label="Toggle navigation">
                <i x-show="!mobileMenuOpen" data-lucide="menu" class="w-5 h-5"></i>
                <i x-show="mobileMenuOpen" x-cloak data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Mobile Drawer Menu -->
        <div x-show="mobileMenuOpen" 
             x-cloak 
             @click.away="mobileMenuOpen = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-3"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-3"
             class="lg:hidden mt-3 rounded-2xl glass-panel p-5 space-y-3 border border-purple-500/30 bg-[#120826]/95 shadow-2xl">
            <div class="flex flex-col space-y-2 text-sm">
                <a @click="mobileMenuOpen = false" href="#about" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">About</a>
                <a @click="mobileMenuOpen = false" href="#expertise" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">ERP Modules & Expertise</a>
                <a @click="mobileMenuOpen = false" href="#methodology" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">ERP Methodology</a>
                <a @click="mobileMenuOpen = false" href="#projects" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">Featured Projects</a>
                <a @click="mobileMenuOpen = false" href="#experience" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">Work Experience</a>
                <a @click="mobileMenuOpen = false" href="#credentials" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">Certifications & Degrees</a>
                <a @click="mobileMenuOpen = false" href="#contact" class="px-3 py-2 rounded-lg hover:bg-purple-900/30 text-purple-200">Contact / Inquire</a>
            </div>
            <div class="pt-3 border-t border-purple-500/20 flex flex-col gap-2">
                <a href="{{ route('portfolio.download-cv') }}" class="btn-secondary w-full py-2.5 rounded-xl text-xs font-semibold text-center flex items-center justify-center gap-2">
                    <i data-lucide="download" class="w-4 h-4"></i> Download CV (PDF)
                </a>
                <a @click="mobileMenuOpen = false" href="#contact" class="btn-primary w-full py-2.5 rounded-xl text-xs font-semibold text-center flex items-center justify-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4"></i> Book ERP Consultation
                </a>
            </div>
        </div>
    </div>
</header>
