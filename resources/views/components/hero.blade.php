<section id="hero" class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Content Column -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Status Pill -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full glass-badge text-xs font-medium backdrop-blur-md shadow-sm">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 status-pulse"></span>
                    <span class="text-purple-200">Associate ERP Functional Consultant & Systems Analyst</span>
                </div>

                <!-- Main Name & Headline -->
                <div class="space-y-3">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                        <span class="text-white">Hi, I'm </span>
                        <span class="gradient-text-purple">{{ $profile['name'] }}</span>
                    </h1>
                    <p class="text-xl sm:text-2xl font-semibold gradient-text-vibrant tracking-tight">
                        Transforming Enterprise Workflows into High-Performing ERP Architectures.
                    </p>
                </div>

                <!-- Sub-copy / Value Proposition -->
                <p class="text-base sm:text-lg text-purple-200/80 max-w-2xl leading-relaxed">
                    Bridging client business requirements with practical, scalable <span class="text-purple-200 font-semibold">Odoo ERP implementations</span>, financial accounting precision, and cutting-edge <span class="text-purple-200 font-semibold">AI-driven business intelligence</span>.
                </p>

                <!-- Key Highlights Badges -->
                <div class="flex flex-wrap gap-2 justify-center lg:justify-start pt-1 text-xs">
                    <span class="px-3 py-1.5 rounded-lg bg-purple-950/70 border border-purple-500/20 text-purple-300 flex items-center gap-1.5">
                        <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i> Odoo Sales, Purchase & Inventory
                    </span>
                    <span class="px-3 py-1.5 rounded-lg bg-purple-950/70 border border-purple-500/20 text-purple-300 flex items-center gap-1.5">
                        <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i> Financial Accounting & Invoicing
                    </span>
                    <span class="px-3 py-1.5 rounded-lg bg-purple-950/70 border border-purple-500/20 text-purple-300 flex items-center gap-1.5">
                        <i data-lucide="check-circle" class="w-3.5 h-3.5 text-purple-400"></i> BPR & UAT Management
                    </span>
                </div>

                <!-- Action CTA Buttons -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-4">
                    <a href="#contact" 
                       class="btn-primary px-7 py-3.5 rounded-xl font-bold text-sm flex items-center gap-2">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        <span>Book ERP Consultation</span>
                    </a>
                    <a href="#projects" 
                       class="btn-secondary px-6 py-3.5 rounded-xl font-semibold text-sm flex items-center gap-2">
                        <i data-lucide="layers" class="w-4 h-4 text-purple-300"></i>
                        <span>View Case Studies</span>
                    </a>
                    <a href="{{ route('portfolio.download-cv') }}" 
                       class="px-5 py-3.5 rounded-xl text-xs font-semibold text-purple-300 hover:text-white hover:bg-purple-900/30 transition-all flex items-center gap-2 border border-purple-500/20">
                        <i data-lucide="file-text" class="w-4 h-4 text-purple-400"></i>
                        <span>CV (PDF)</span>
                    </a>
                </div>

                <!-- Contact Micro-bar -->
                <div class="pt-4 flex flex-wrap items-center justify-center lg:justify-start gap-6 text-xs text-purple-300/70 border-t border-purple-500/10">
                    <a href="mailto:{{ $profile['email'] }}" class="flex items-center gap-1.5 hover:text-purple-200 transition-colors">
                        <i data-lucide="mail" class="w-3.5 h-3.5 text-purple-400"></i>
                        <span>{{ $profile['email'] }}</span>
                    </a>
                    <a href="https://wa.me/94776035192" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 hover:text-emerald-300 transition-colors">
                        <i data-lucide="phone" class="w-3.5 h-3.5 text-emerald-400"></i>
                        <span>{{ $profile['phone'] }}</span>
                    </a>
                    <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1.5 hover:text-[#38bdf8] transition-colors">
                        <svg class="w-3.5 h-3.5 fill-current text-[#0A66C2]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451c.979 0 1.778-.773 1.778-1.729V1.73C24 .774 23.205 0 22.222 0h.003z"/>
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 text-purple-400"></i>
                        <span>{{ $profile['location'] }}</span>
                    </span>
                </div>

            </div>

            <!-- Right Column - Visual Avatar & Floating Metric Badges -->
            <div class="lg:col-span-5 flex justify-center relative">
                <div class="relative w-72 sm:w-80 lg:w-96">
                    
                    <!-- Ambient Backlight Circle -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full opacity-30 blur-2xl animate-pulse"></div>

                    <!-- Photo Card Container -->
                    <div class="relative rounded-full p-2 bg-gradient-to-b from-purple-500/40 via-purple-900/30 to-indigo-500/40 border border-purple-400/30 shadow-2xl backdrop-blur-md">
                        <div class="rounded-full overflow-hidden aspect-square bg-[#120826] border-2 border-purple-400/50 shadow-inner">
                            <img src="{{ asset('images/nayantha_avatar.png') }}" 
                                 alt="Nayantha Dhasun - Associate ERP Functional Consultant" 
                                 class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-500"
                                 loading="eager">
                        </div>
                    </div>

                    <!-- Floating Badge 1: Experience (Top Left) -->
                    <div class="absolute -top-4 -left-4 sm:-left-10 glass-panel px-3.5 py-2.5 rounded-2xl border border-purple-400/30 shadow-xl flex items-center gap-2.5 cursor-pointer transform transition-all duration-300 ease-out hover:scale-105 hover:-translate-y-1 hover:border-purple-300 hover:bg-[#1A0A38]/95 hover:shadow-2xl hover:shadow-purple-500/30 group z-20 whitespace-nowrap">
                        <div class="w-8 h-8 rounded-xl bg-purple-600/30 text-purple-300 flex items-center justify-center font-bold text-xs transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                            <i data-lucide="briefcase" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-semibold text-purple-400 tracking-wider">Experience</p>
                            <p class="text-xs font-bold text-white group-hover:text-purple-200 transition-colors">NeroSoft Solutions</p>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Certified IIBA / PMI (Bottom Left) -->
                    <div class="absolute -bottom-4 -left-4 sm:-left-10 glass-panel px-3.5 py-2.5 rounded-2xl border border-purple-400/30 shadow-xl flex items-center gap-2.5 cursor-pointer transform transition-all duration-300 ease-out hover:scale-105 hover:-translate-y-1 hover:border-emerald-400 hover:bg-[#0E1F24]/95 hover:shadow-2xl hover:shadow-emerald-500/30 group z-20 whitespace-nowrap">
                        <div class="w-8 h-8 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-xs transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                            <i data-lucide="award" class="w-4 h-4 text-emerald-400"></i>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-semibold text-emerald-400 tracking-wider">Certified</p>
                            <p class="text-xs font-bold text-white group-hover:text-emerald-200 transition-colors">IIBA® & PMI Credentials</p>
                        </div>
                    </div>

                    <!-- Floating Badge 3: Education (Right Side) -->
                    <div class="absolute top-1/2 -translate-y-1/2 left-[82%] sm:left-[80%] lg:left-[85%] glass-panel px-3.5 py-2.5 rounded-2xl border border-purple-400/30 shadow-xl flex items-center gap-2.5 cursor-pointer transition-all duration-300 ease-out hover:scale-105 hover:-translate-y-1 hover:border-indigo-300 hover:bg-[#130E38]/95 hover:shadow-2xl hover:shadow-indigo-500/30 group z-20">
                        <div class="w-8 h-8 rounded-xl bg-indigo-500/20 text-indigo-300 flex items-center justify-center font-bold text-xs transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6 shrink-0">
                            <i data-lucide="graduation-cap" class="w-4 h-4 text-indigo-300"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] uppercase font-semibold text-indigo-400 tracking-wider">Education</p>
                            <p class="text-xs font-bold text-white group-hover:text-indigo-200 transition-colors leading-tight whitespace-nowrap">
                                (BSc Hons) in Information<br>Technology
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Metric KPI Cards Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 mt-16 pt-8 border-t border-purple-500/15">
            @foreach($profile['stats'] as $stat)
                <div class="glass-panel p-5 rounded-2xl border border-purple-500/20 hover:border-purple-400/40 transition-all text-center sm:text-left group">
                    <p class="text-2xl sm:text-3xl font-extrabold gradient-text-purple tracking-tight group-hover:scale-105 transition-transform inline-block">
                        {{ $stat['value'] }}
                    </p>
                    <h3 class="text-sm font-bold text-white mt-1">{{ $stat['label'] }}</h3>
                    <p class="text-xs text-purple-300/70 mt-1 leading-snug">{{ $stat['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
