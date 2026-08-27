<section id="methodology" class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="git-branch" class="w-3.5 h-3.5 text-purple-400"></i>
                <span>Implementation Framework</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Structured 5-Stage <span class="gradient-text-purple">ERP Delivery Methodology</span>
            </h2>
            <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                A disciplined, Agile-driven implementation roadmap ensuring minimal business disruption, verified data integrity, and high organizational adoption.
            </p>
        </div>

        <!-- 5 Steps Horizontal / Responsive Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6 relative">
            @foreach($lifecycleSteps as $step)
                <div class="glass-panel p-6 rounded-2xl glass-panel-hover border border-purple-500/20 flex flex-col justify-between relative group bg-[#110724]">
                    <!-- Step Header Number -->
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-black gradient-text-vibrant font-mono">{{ $step['number'] }}</span>
                            <div class="w-2 h-2 rounded-full bg-purple-500 group-hover:bg-emerald-400 group-hover:scale-150 transition-all duration-300"></div>
                        </div>

                        <h3 class="text-base font-bold text-white group-hover:text-purple-200 transition-colors">
                            {{ $step['phase'] }}
                        </h3>

                        <p class="text-xs text-purple-200/70 leading-relaxed">
                            {{ $step['summary'] }}
                        </p>
                    </div>

                    <!-- Deliverable Badge -->
                    <div class="pt-4 mt-4 border-t border-purple-500/10">
                        <span class="text-[10px] uppercase font-bold text-purple-400 block tracking-wider mb-1">Key Deliverable</span>
                        <p class="text-[11px] font-semibold text-purple-200 bg-purple-950/70 p-2 rounded-lg border border-purple-500/15">
                            {{ $step['deliverable'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Interactive Consultation CTA Strip -->
        <div class="mt-12 text-center">
            <p class="text-xs text-purple-300/80 inline-flex items-center gap-2">
                <i data-lucide="sparkles" class="w-4 h-4 text-purple-400"></i>
                <span>Need guidance on your enterprise Odoo migration or workflow redesign?</span>
                <a href="#contact" class="text-white font-bold underline hover:text-purple-300 transition-colors">Schedule a Discovery Call &rarr;</a>
            </p>
        </div>

    </div>
</section>
