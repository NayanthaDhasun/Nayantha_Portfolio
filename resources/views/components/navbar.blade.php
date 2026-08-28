<header x-data="{ mobileMenuOpen: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 10)"
        class="fixed top-0 left-0 right-0 z-40 transition-all duration-300 glass-nav py-2 sm:py-2.5 shadow-md shadow-purple-950/30">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-1.5 sm:gap-3">
            <!-- Brand Logo -->
            <a href="#hero" class="flex items-center gap-2 sm:gap-2.5 group shrink-0">
                <div class="w-8 h-8 sm:w-9 sm:h-9 lg:w-10 lg:h-10 rounded-xl bg-gradient-to-tr from-purple-700 via-purple-600 to-indigo-500 flex items-center justify-center font-bold text-white shadow-md shadow-purple-900/40 group-hover:scale-105 transition-transform duration-200 border border-purple-400/30 shrink-0">
                    <span class="text-xs sm:text-sm tracking-wider">ND</span>
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="font-bold text-xs sm:text-sm lg:text-base text-white tracking-tight group-hover:text-purple-300 transition-colors truncate">
                        Nayantha Dhasun
                    </span>
                    <span class="text-[9px] sm:text-[10px] lg:text-[11px] text-purple-400 font-mono flex items-center gap-1 font-medium truncate">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></span>
                        <span class="truncate">ERP Consultant</span>
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links (Visible on Tablet, Laptop & Desktop >= 768px) -->
            <nav class="nav-desktop-bar hidden md:flex items-center gap-0.5 lg:gap-1 text-[11px] lg:text-xs xl:text-sm font-medium text-purple-200/80 bg-[#120826]/80 p-1 lg:p-1.5 rounded-full border border-purple-500/20 backdrop-blur-md">
                <a href="#about" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">About</a>
                <a href="#expertise" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Modules</a>
                <a href="#methodology" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Methodology</a>
                <a href="#projects" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Projects</a>
                <a href="#experience" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Experience</a>
                <a href="#credentials" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Credentials</a>
                <a href="#contact" class="px-2 lg:px-3 py-1 lg:py-1.5 rounded-full hover:text-white hover:bg-purple-900/40 transition-all duration-150">Contact</a>
            </nav>

            <!-- CTA Actions & Theme Switcher (Visible on Tablet, Laptop & Desktop >= 768px) -->
            <div class="hidden md:flex items-center gap-1.5 lg:gap-2.5 shrink-0">
                <a href="{{ route('portfolio.download-cv') }}" 
                   class="btn-secondary px-2.5 lg:px-3.5 py-1.5 lg:py-2 rounded-xl text-[11px] lg:text-xs font-semibold flex items-center gap-1.5 border border-purple-500/30 hover:border-purple-400 whitespace-nowrap">
                    <i data-lucide="download" class="w-3.5 h-3.5 text-purple-300"></i>
                    <span>Download CV</span>
                </a>
                <a href="#contact" 
                   class="btn-primary px-2.5 lg:px-3.5 py-1.5 lg:py-2 rounded-xl text-[11px] lg:text-xs font-semibold flex items-center gap-1 whitespace-nowrap">
                    <span>Consultation</span>
                    <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                </a>

                <!-- Theme Switcher Button (Upper Right Corner) -->
                <button @click="toggleTheme()" 
                        type="button" 
                        class="p-2 lg:p-2.5 rounded-xl border border-purple-500/30 bg-purple-950/30 hover:bg-purple-900/40 text-purple-200 hover:text-white transition-all duration-200 cursor-pointer flex items-center justify-center shadow-sm shrink-0"
                        :title="isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                        aria-label="Toggle Dark/Light Mode">
                    <!-- Sun icon shown in dark mode -->
                    <template x-if="isDark">
                        <svg class="w-4 h-4 text-amber-300 transform hover:rotate-45 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2"></path>
                            <path d="M12 20v2"></path>
                            <path d="m4.93 4.93 1.41 1.41"></path>
                            <path d="m17.66 17.66 1.41 1.41"></path>
                            <path d="M2 12h2"></path>
                            <path d="M20 12h2"></path>
                            <path d="m6.34 17.66-1.41 1.41"></path>
                            <path d="m19.07 4.93-1.41 1.41"></path>
                        </svg>
                    </template>
                    <!-- Moon icon shown in light mode -->
                    <template x-if="!isDark">
                        <svg class="w-4 h-4 text-purple-700 transform hover:-rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 3a6 6 0 0 0 9 9 9 0 1 1-9-9Z"></path>
                        </svg>
                    </template>
                </button>
            </div>

            <!-- Mobile Actions (Theme Toggle + Hamburger - Only on phones < 768px) -->
            <div class="flex items-center gap-2 md:hidden shrink-0">
                <!-- Mobile Theme Toggle Button -->
                <button @click="toggleTheme()" 
                        type="button" 
                        class="p-2 rounded-xl bg-purple-950/60 border border-purple-500/20 text-purple-200 hover:text-white flex items-center justify-center shrink-0"
                        :title="isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                        aria-label="Toggle Dark/Light Mode">
                    <template x-if="isDark">
                        <svg class="w-4 h-4 text-amber-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2"></path>
                            <path d="M12 20v2"></path>
                            <path d="m4.93 4.93 1.41 1.41"></path>
                            <path d="m17.66 17.66 1.41 1.41"></path>
                            <path d="M2 12h2"></path>
                            <path d="M20 12h2"></path>
                            <path d="m6.34 17.66-1.41 1.41"></path>
                            <path d="m19.07 4.93-1.41 1.41"></path>
                        </svg>
                    </template>
                    <template x-if="!isDark">
                        <svg class="w-4 h-4 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 3a6 6 0 0 0 9 9 9 0 1 1-9-9Z"></path>
                        </svg>
                    </template>
                </button>

                <!-- Mobile Hamburger Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2 rounded-xl bg-purple-950/60 border border-purple-500/20 text-purple-200 hover:text-white focus:outline-none flex items-center justify-center shrink-0"
                        aria-label="Toggle navigation">
                    <i x-show="!mobileMenuOpen" data-lucide="menu" class="w-5 h-5"></i>
                    <i x-show="mobileMenuOpen" x-cloak data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
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
             class="md:hidden mt-3 rounded-2xl glass-panel p-5 space-y-3 border border-purple-500/30 bg-[#120826]/95 shadow-2xl">
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
