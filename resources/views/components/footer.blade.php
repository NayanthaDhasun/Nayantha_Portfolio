<footer class="site-footer border-t border-purple-500/15 bg-[#06030B] relative z-10 py-12 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            
            <!-- Left Brand -->
            <div class="space-y-2 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-purple-700 to-indigo-600 flex items-center justify-center font-bold text-xs text-white shadow-sm">
                        ND
                    </div>
                    <span class="font-bold text-white text-base footer-heading">Nayantha Dhasun</span>
                </div>
                <p class="text-xs text-purple-300/70 max-w-sm footer-desc">
                    Associate ERP Functional Consultant & Business Systems Analyst specializing in enterprise Odoo implementations.
                </p>
            </div>

            <!-- Center Nav Links -->
            <div class="flex flex-wrap items-center justify-center gap-6 text-xs text-purple-300 footer-links">
                <a href="#about" class="hover:text-purple-400 transition-colors">About</a>
                <a href="#expertise" class="hover:text-purple-400 transition-colors">ERP Modules</a>
                <a href="#methodology" class="hover:text-purple-400 transition-colors">Methodology</a>
                <a href="#projects" class="hover:text-purple-400 transition-colors">Projects</a>
                <a href="#experience" class="hover:text-purple-400 transition-colors">Experience</a>
                <a href="#credentials" class="hover:text-purple-400 transition-colors">Credentials</a>
                <a href="#contact" class="hover:text-purple-400 transition-colors">Contact</a>
            </div>

            <!-- Right Back to Top & CV -->
            <div class="flex items-center gap-3">
                <a href="{{ route('portfolio.download-cv') }}" class="btn-secondary px-3.5 py-2 rounded-xl text-xs font-semibold flex items-center gap-1.5">
                    <i data-lucide="download" class="w-3.5 h-3.5"></i>
                    <span>CV (PDF)</span>
                </a>
                <a href="#hero" class="footer-top-btn p-2 rounded-xl bg-purple-950/60 border border-purple-500/20 text-purple-300 hover:text-white hover:bg-purple-900/60 transition-all" title="Back to top">
                    <i data-lucide="arrow-up" class="w-4 h-4"></i>
                </a>
            </div>

        </div>

        <div class="mt-8 pt-6 border-t border-purple-500/10 flex flex-col sm:flex-row items-center justify-between text-[11px] text-purple-400/60 footer-copyright gap-4">
            <p>&copy; {{ date('Y') }} Nayantha Dhasun Bandara Ilukpitiya. All rights reserved.</p>
        </div>
    </div>
</footer>
