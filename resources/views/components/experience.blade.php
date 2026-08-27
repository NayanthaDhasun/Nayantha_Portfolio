<section id="experience" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="briefcase" class="w-3.5 h-3.5 text-purple-400"></i>
                <span>Career History</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                ERP Implementation <span class="gradient-text-purple">Experience & Trajectory</span>
            </h2>
            <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                Proven track record in consulting clients, managing end-to-end Odoo configurations, data migrations, and financial system integrations.
            </p>
        </div>

        <!-- Experience Timeline -->
        <div class="space-y-8 relative before:absolute before:inset-0 before:left-4 sm:before:left-1/2 before:w-0.5 before:-translate-x-1/2 before:bg-gradient-to-b before:from-purple-600 before:via-purple-800 before:to-transparent">
            @foreach($experience as $index => $exp)
                <div class="relative flex flex-col sm:flex-row items-start {{ $index % 2 === 0 ? 'sm:flex-row-reverse' : '' }} group">
                    
                    <!-- Center Timeline Node -->
                    <div class="absolute left-4 sm:left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full bg-[#120826] border-2 border-purple-400 flex items-center justify-center text-purple-300 z-10 shadow-lg shadow-purple-900/50 group-hover:scale-125 group-hover:border-purple-300 transition-all duration-300">
                        <span class="w-2.5 h-2.5 rounded-full {{ $exp['badge_color'] === 'emerald' ? 'bg-emerald-400' : 'bg-purple-400' }}"></span>
                    </div>

                    <!-- Content Card (Alternating) -->
                    <div class="ml-12 sm:ml-0 sm:w-1/2 {{ $index % 2 === 0 ? 'sm:pl-10' : 'sm:pr-10' }} w-full">
                        <div class="glass-panel p-6 sm:p-8 rounded-2xl glass-panel-hover border border-purple-500/20 bg-[#120726]/90 space-y-4">
                            
                            <!-- Card Header -->
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <div>
                                    <span class="text-xs font-mono font-medium text-purple-400">{{ $exp['period'] }}</span>
                                    <h3 class="text-lg sm:text-xl font-bold text-white mt-0.5">{{ $exp['role'] }}</h3>
                                    <p class="text-sm font-semibold text-purple-300 flex items-center gap-1.5 mt-0.5">
                                        <i data-lucide="building-2" class="w-4 h-4 text-purple-400"></i>
                                        {{ $exp['company'] }}
                                    </p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $exp['badge_color'] === 'emerald' ? 'bg-emerald-500/20 text-emerald-300 border border-emerald-500/30' : 'bg-purple-500/20 text-purple-300 border border-purple-400/20' }}">
                                    {{ $exp['badge'] }}
                                </span>
                            </div>

                            <!-- Role Summary -->
                            <p class="text-xs sm:text-sm text-purple-200/80 leading-relaxed">
                                {{ $exp['summary'] }}
                            </p>

                            <!-- Duties / Deliverables -->
                            <div class="space-y-2 pt-2 border-t border-purple-500/10">
                                <h4 class="text-[11px] uppercase font-bold text-purple-400 tracking-wider">Key Responsibilities</h4>
                                @foreach($exp['responsibilities'] as $resp)
                                    <div class="flex items-start gap-2 text-xs text-purple-100/90 leading-normal">
                                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-purple-400 shrink-0 mt-0.5"></i>
                                        <span>{{ $resp }}</span>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
