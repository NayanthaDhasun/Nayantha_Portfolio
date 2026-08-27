<section id="expertise" class="py-20 relative bg-[#0B0517]/60" x-data="{ activeModule: 'sales-purchase' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="layout-grid" class="w-3.5 h-3.5 text-purple-400"></i>
                <span>ERP Competency Matrix</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Specialized <span class="gradient-text-purple">Odoo Modules & Consulting</span> Stack
            </h2>
            <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                Comprehensive functional mastery across enterprise business processes, system configuration, automated workflows, and data integrations.
            </p>
        </div>

        <!-- Interactive Module Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-10">
            @foreach($erpModules as $mod)
                <button @click="activeModule = '{{ $mod['id'] }}'"
                        :class="activeModule === '{{ $mod['id'] }}' 
                            ? 'bg-purple-600 text-white shadow-lg shadow-purple-600/30 border-purple-400' 
                            : 'glass-panel text-purple-200 hover:text-white hover:bg-purple-900/40 border-purple-500/20'"
                        class="px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-200 border flex items-center gap-2 cursor-pointer">
                    @if($mod['icon'] === 'shopping-cart')
                        <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                    @elseif($mod['icon'] === 'boxes')
                        <i data-lucide="boxes" class="w-4 h-4"></i>
                    @elseif($mod['icon'] === 'receipt')
                        <i data-lucide="receipt" class="w-4 h-4"></i>
                    @elseif($mod['icon'] === 'users')
                        <i data-lucide="users" class="w-4 h-4"></i>
                    @elseif($mod['icon'] === 'cpu')
                        <i data-lucide="cpu" class="w-4 h-4"></i>
                    @endif
                    <span>{{ $mod['title'] }}</span>
                </button>
            @endforeach
        </div>

        <!-- Active Module Details Display -->
        <div class="glass-panel p-8 sm:p-10 rounded-3xl border border-purple-500/25 mb-16 bg-[#130829]/90 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl pointer-events-none"></div>

            @foreach($erpModules as $mod)
                <div x-show="activeModule === '{{ $mod['id'] }}'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-3"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <!-- Left: Description & Scope -->
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-purple-500/20 text-purple-300 text-xs font-mono font-medium">
                            <span>Module Architecture</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white">
                            {{ $mod['title'] }}
                        </h3>
                        <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                            {{ $mod['description'] }}
                        </p>

                        <!-- Key Capabilities List -->
                        <div class="space-y-3 pt-2">
                            <h4 class="text-xs uppercase font-bold text-purple-400 tracking-wider">Functional Capabilities</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                @foreach($mod['capabilities'] as $cap)
                                    <div class="flex items-center gap-2.5 p-2.5 rounded-xl bg-purple-950/40 border border-purple-500/15">
                                        <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                                            <i data-lucide="check" class="w-3 h-3"></i>
                                        </div>
                                        <span class="text-xs font-medium text-purple-100">{{ $cap }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Right: Process Flow Blueprint Card -->
                    <div class="lg:col-span-5">
                        <div class="glass-panel p-6 rounded-2xl border border-purple-500/20 bg-[#0C051B] space-y-4">
                            <div class="flex items-center justify-between pb-3 border-b border-purple-500/15">
                                <span class="text-xs font-bold text-purple-300 font-mono">ERP Implementation Impact</span>
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300">Active Module</span>
                            </div>
                            
                            <div class="space-y-3 text-xs text-purple-200/90">
                                <div class="p-3 rounded-xl bg-purple-950/60 border border-purple-500/10 flex items-start gap-3">
                                    <i data-lucide="settings" class="w-4 h-4 text-purple-400 mt-0.5 shrink-0"></i>
                                    <div>
                                        <p class="font-semibold text-white">Standard & Custom Configuration</p>
                                        <p class="text-[11px] text-purple-300/70">Custom field mapping, access control rules, and approval workflow routing.</p>
                                    </div>
                                </div>
                                <div class="p-3 rounded-xl bg-purple-950/60 border border-purple-500/10 flex items-start gap-3">
                                    <i data-lucide="database" class="w-4 h-4 text-purple-400 mt-0.5 shrink-0"></i>
                                    <div>
                                        <p class="font-semibold text-white">Data Cleansing & ETL Import</p>
                                        <p class="text-[11px] text-purple-300/70">Historical transaction validation, opening balance mapping, and data integrity checks.</p>
                                    </div>
                                </div>
                                <div class="p-3 rounded-xl bg-purple-950/60 border border-purple-500/10 flex items-start gap-3">
                                    <i data-lucide="users" class="w-4 h-4 text-purple-400 mt-0.5 shrink-0"></i>
                                    <div>
                                        <p class="font-semibold text-white">User Acceptance & SOP Manuals</p>
                                        <p class="text-[11px] text-purple-300/70">Scenario-based UAT execution, training videos, and standard operating procedures.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Skills & Proficiency Dual Breakdown -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach($consultingSkills as $cat)
                <div class="glass-panel p-6 sm:p-8 rounded-2xl border border-purple-500/20 space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-purple-600/20 text-purple-300 flex items-center justify-center">
                            @if(str_contains($cat['category'], 'Functional'))
                                <i data-lucide="file-check" class="w-5 h-5"></i>
                            @else
                                <i data-lucide="terminal" class="w-5 h-5"></i>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-white">{{ $cat['category'] }}</h3>
                    </div>

                    <div class="space-y-4">
                        @foreach($cat['skills'] as $skill)
                            <div class="space-y-1.5">
                                <div class="flex items-center justify-between text-xs font-semibold">
                                    <span class="text-purple-200">{{ $skill['name'] }}</span>
                                    <span class="text-purple-400 font-mono">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-purple-950/80 overflow-hidden border border-purple-500/15">
                                    <div class="h-full rounded-full bg-gradient-to-r from-purple-600 via-purple-500 to-indigo-400 transition-all duration-1000"
                                         style="width: {{ $skill['level'] }}%;"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
