<section id="projects" class="py-20 relative bg-[#0B0517]/50" x-data="{ selectedCategory: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="folder-kanban" class="w-3.5 h-3.5 text-purple-400"></i>
                <span>Enterprise Case Studies</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Featured <span class="gradient-text-purple">Projects & Solutions</span>
            </h2>
            <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                Selected implementations demonstrating real-world business impact, custom ERP extensions, automated financial reporting, and AI conversational workflows.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
            <button @click="selectedCategory = 'all'"
                    :class="selectedCategory === 'all' 
                        ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30 border-purple-400' 
                        : 'glass-panel text-purple-200 hover:text-white border-purple-500/20'"
                    class="px-4 py-2 rounded-xl text-xs font-semibold transition-all border cursor-pointer">
                All Projects ({{ count($projects) }})
            </button>
            <button @click="selectedCategory = 'ERP & AI Integration'"
                    :class="selectedCategory === 'ERP & AI Integration' 
                        ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30 border-purple-400' 
                        : 'glass-panel text-purple-200 hover:text-white border-purple-500/20'"
                    class="px-4 py-2 rounded-xl text-xs font-semibold transition-all border cursor-pointer">
                ERP & AI Integration
            </button>
            <button @click="selectedCategory = 'Financial Analytics & ERP'"
                    :class="selectedCategory === 'Financial Analytics & ERP' 
                        ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30 border-purple-400' 
                        : 'glass-panel text-purple-200 hover:text-white border-purple-500/20'"
                    class="px-4 py-2 rounded-xl text-xs font-semibold transition-all border cursor-pointer">
                Financial Analytics & Power BI
            </button>
            <button @click="selectedCategory = 'Systems Analysis & Agile'"
                    :class="selectedCategory === 'Systems Analysis & Agile' 
                        ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30 border-purple-400' 
                        : 'glass-panel text-purple-200 hover:text-white border-purple-500/20'"
                    class="px-4 py-2 rounded-xl text-xs font-semibold transition-all border cursor-pointer">
                Systems Analysis & Agile Design
            </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach($projects as $proj)
                <div x-show="selectedCategory === 'all' || selectedCategory === '{{ $proj['category'] }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="glass-panel p-7 sm:p-8 rounded-3xl glass-panel-hover border border-purple-500/20 flex flex-col justify-between bg-[#120726]/90 relative group">
                    
                    <div class="space-y-4">
                        <!-- Top Badges -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-xs font-semibold border border-purple-400/20">
                                {{ $proj['tag'] }}
                            </span>
                            @if(isset($proj['client']))
                                <span class="text-[11px] text-purple-300/80 font-mono flex items-center gap-1">
                                    <i data-lucide="building" class="w-3.5 h-3.5 text-purple-400"></i>
                                    {{ $proj['client'] }}
                                </span>
                            @endif
                        </div>

                        <!-- Project Title -->
                        <h3 class="text-xl sm:text-2xl font-bold text-white group-hover:text-purple-200 transition-colors">
                            {{ $proj['title'] }}
                        </h3>

                        <!-- Description -->
                        <p class="text-xs sm:text-sm text-purple-200/80 leading-relaxed">
                            {{ $proj['description'] }}
                        </p>

                        <!-- Highlights List -->
                        <div class="space-y-2 pt-2">
                            <h4 class="text-[11px] uppercase font-bold text-purple-400 tracking-wider">Solution Highlights</h4>
                            @foreach($proj['highlights'] as $highlight)
                                <div class="flex items-start gap-2.5 text-xs text-purple-100">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
                                    <span>{{ $highlight }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Bottom Section: Tech Stack & Measurable Impact -->
                    <div class="pt-6 mt-6 border-t border-purple-500/15 space-y-4">
                        <!-- Tech Tags -->
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($proj['tech'] as $t)
                                <span class="px-2.5 py-1 rounded-lg bg-purple-950/80 border border-purple-500/20 text-[11px] font-mono text-purple-300">
                                    {{ $t }}
                                </span>
                            @endforeach
                        </div>

                        <!-- Impact Callout -->
                        <div class="p-3.5 rounded-xl bg-purple-950/60 border border-purple-500/30 flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                                <i data-lucide="trending-up" class="w-4 h-4"></i>
                            </div>
                            <div class="text-xs">
                                <span class="font-bold text-white block">Business Impact:</span>
                                <span class="text-purple-200/90">{{ $proj['impact'] }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
