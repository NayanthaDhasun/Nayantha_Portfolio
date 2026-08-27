<section id="credentials" class="py-20 relative bg-[#0B0517]/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="award" class="w-3.5 h-3.5 text-purple-400"></i>
                <span>Credentials & Education</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Global Certifications & <span class="gradient-text-purple">Academic Degrees</span>
            </h2>
            <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                A strong blend of internationally recognized Business Analysis and ERP credentials backed by distinguished academic honours in Information Systems.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Professional Certifications (7 cols) -->
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center gap-2.5 pb-2 border-b border-purple-500/20">
                    <div class="w-8 h-8 rounded-lg bg-purple-600/20 text-purple-300 flex items-center justify-center">
                        <i data-lucide="shield-check" class="w-4 h-4"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Professional International Certifications</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($certifications as $cert)
                        <div class="glass-panel p-5 rounded-2xl glass-panel-hover border border-purple-500/15 bg-[#120726]/80 flex flex-col justify-between group">
                            <div class="space-y-2.5">
                                <div class="flex items-center justify-between">
                                    <span class="text-[10px] uppercase font-mono font-bold text-purple-400 tracking-wider">
                                        {{ $cert['category'] }}
                                    </span>
                                    <div class="w-6 h-6 rounded-md bg-purple-500/20 text-purple-300 flex items-center justify-center shrink-0">
                                        <i data-lucide="{{ $cert['icon'] }}" class="w-3.5 h-3.5"></i>
                                    </div>
                                </div>
                                <h4 class="text-sm font-bold text-white group-hover:text-purple-200 transition-colors">
                                    {{ $cert['title'] }}
                                </h4>
                                <p class="text-xs font-semibold text-purple-300">
                                    {{ $cert['issuer'] }}
                                </p>
                                <p class="text-[11px] text-purple-200/70 leading-relaxed">
                                    {{ $cert['desc'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right: Academic Qualifications (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center gap-2.5 pb-2 border-b border-purple-500/20">
                    <div class="w-8 h-8 rounded-lg bg-indigo-600/20 text-indigo-300 flex items-center justify-center">
                        <i data-lucide="graduation-cap" class="w-4 h-4"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white">Academic Qualifications</h3>
                </div>

                <div class="space-y-4">
                    @foreach($education as $edu)
                        <div class="glass-panel p-6 rounded-2xl border border-purple-500/20 bg-[#120726]/90 space-y-3 relative group">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                                    {{ $edu['result'] }}
                                </span>
                                <span class="text-xs font-mono text-purple-400">{{ $edu['year'] }}</span>
                            </div>

                            <h4 class="text-base font-bold text-white group-hover:text-purple-200 transition-colors">
                                {{ $edu['degree'] }}
                            </h4>

                            <p class="text-xs font-semibold text-purple-300">
                                {{ $edu['institution'] }}
                            </p>

                            <p class="text-xs text-purple-200/75 leading-relaxed pt-1 border-t border-purple-500/10">
                                {{ $edu['highlight'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Languages & Volunteering Mini-Card -->
                <div class="glass-panel p-5 rounded-2xl border border-purple-500/20 bg-[#120726]/70 space-y-3">
                    <div class="flex items-center justify-between text-xs">
                        <span class="font-bold text-white flex items-center gap-1.5">
                            <i data-lucide="languages" class="w-3.5 h-3.5 text-purple-400"></i> Languages:
                        </span>
                        <span class="text-purple-200">English (Professional) &bull; Sinhala (Native)</span>
                    </div>
                    <div class="flex items-center justify-between text-xs pt-2 border-t border-purple-500/10">
                        <span class="font-bold text-white flex items-center gap-1.5">
                            <i data-lucide="heart-handshake" class="w-3.5 h-3.5 text-purple-400"></i> Community:
                        </span>
                        <span class="text-purple-200">STEMUp Educational Foundation Volunteer</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
