<section id="contact" class="py-24 relative overflow-hidden" x-data="{ copiedEmail: false, copiedPhone: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-badge text-xs font-semibold uppercase tracking-wider">
                <i data-lucide="sparkles" class="w-3.5 h-3.5 text-purple-400"></i>
                <span>Get In Touch</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Let's Discuss Your <span class="gradient-text-purple">ERP Transformation</span>
            </h2>
            <p class="text-purple-200/80 text-sm sm:text-base leading-relaxed">
                Whether you need a new Odoo implementation, process optimization, data migration, or an AI-powered ERP extension, I'm ready to collaborate.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Contact Details & Direct Connect (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="glass-panel p-8 rounded-3xl border border-purple-500/25 bg-[#120726]/90 space-y-6">
                    <h3 class="text-xl font-bold text-white">Direct Channels</h3>
                    <p class="text-xs sm:text-sm text-purple-200/80 leading-relaxed">
                        Feel free to connect directly via email, WhatsApp, or phone for quick discussions or project inquiries.
                    </p>

                    <div class="space-y-4">
                        <!-- Email Card -->
                        <div class="contact-channel-card">
                            <div class="contact-channel-left">
                                <div class="contact-channel-icon email-icon">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                </div>
                                <div class="contact-channel-text">
                                    <span class="contact-channel-label text-purple-300">Email Address</span>
                                    <a href="mailto:{{ $profile['email'] }}" class="contact-channel-value">
                                        {{ $profile['email'] }}
                                    </a>
                                </div>
                            </div>
                            <button @click="navigator.clipboard.writeText('{{ $profile['email'] }}'); copiedEmail = true; setTimeout(() => copiedEmail = false, 2000)"
                                    class="contact-channel-btn"
                                    title="Copy email">
                                <svg x-show="!copiedEmail" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                                <span x-show="copiedEmail" x-cloak class="text-[10px] font-bold text-emerald-400">Copied!</span>
                            </button>
                        </div>

                        <!-- Phone / WhatsApp Card -->
                        <div class="contact-channel-card">
                            <div class="contact-channel-left">
                                <div class="contact-channel-icon whatsapp-icon">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                                <div class="contact-channel-text">
                                    <span class="contact-channel-label text-emerald-300">Phone / WhatsApp</span>
                                    <a href="https://wa.me/94776035192" target="_blank" rel="noopener noreferrer" class="contact-channel-value whatsapp-link">
                                        {{ $profile['phone'] }}
                                    </a>
                                </div>
                            </div>
                            <a href="https://wa.me/94776035192" target="_blank" rel="noopener noreferrer" 
                               class="contact-channel-btn whatsapp-action"
                               title="Open WhatsApp">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- LinkedIn Card -->
                        <div class="contact-channel-card">
                            <div class="contact-channel-left">
                                <div class="contact-channel-icon linkedin-icon">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="4" fill="#0A66C2"/>
                                        <path d="M7.4 9H4.8v8.4h2.6V9zM6.1 5.6c-.8 0-1.5.7-1.5 1.5 0 .8.7 1.5 1.5 1.5.8 0 1.5-.7 1.5-1.5 0-.8-.7-1.5-1.5-1.5zm13.1 7.2c0-2.4-1.3-3.6-3-3.6-1.4 0-2 .8-2.4 1.3V9h-2.6c.03.7 0 8.4 0 8.4h2.6v-4.7c0-.25.02-.5.1-.7.2-.5.7-1 1.5-1 1.1 0 1.5.8 1.5 2v4.4h2.6v-4.8z" fill="#FFFFFF"/>
                                    </svg>
                                </div>
                                <div class="contact-channel-text">
                                    <span class="contact-channel-label text-blue-300">LinkedIn Profile</span>
                                    <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="contact-channel-value linkedin-link">
                                        linkedin.com/in/nayantha-dhasun
                                    </a>
                                </div>
                            </div>
                            <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer" 
                               class="contact-channel-btn linkedin-action"
                               title="Open LinkedIn Profile">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" x2="21" y1="14" y2="3"></line>
                                </svg>
                            </a>
                        </div>

                        <!-- Location Pill -->
                        <div class="location-pill p-3.5 rounded-xl border flex items-center gap-3 text-xs">
                            <i data-lucide="map-pin" class="w-4 h-4 text-purple-400 shrink-0"></i>
                            <span>Based in <strong>Colombo, Sri Lanka</strong> (Available for remote and on-site engagements)</span>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Right: Interactive Consultation Inquiry Form (7 cols) -->
            <div class="lg:col-span-7">
                <div class="glass-panel p-8 sm:p-10 rounded-3xl border border-purple-500/25 bg-[#120726]/90 shadow-2xl relative">
                    
                    <div class="space-y-2 mb-8">
                        <h3 class="text-2xl font-bold text-white">Request Consultation or Proposal</h3>
                        <p class="text-xs sm:text-sm text-purple-200/75">
                            Fill out the details below to receive a scoped response and project outline.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="p-4 mb-6 rounded-xl bg-red-950/70 border border-red-500/40 text-red-200 text-xs space-y-1">
                            <p class="font-bold">Please check the required fields:</p>
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="consultationForm" action="{{ route('portfolio.contact') }}" method="POST" onsubmit="handleWhatsAppConsultation(event)" class="space-y-5">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <!-- Name -->
                            <div class="space-y-1.5">
                                <label for="name" class="text-xs font-bold text-purple-200 block">Your Name <span class="text-purple-400">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                       placeholder="e.g. John Wickramasinghe"
                                       class="w-full px-4 py-3 rounded-xl bg-purple-950/60 border border-purple-500/30 text-white placeholder-purple-400/40 focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 text-xs sm:text-sm transition-all">
                            </div>

                            <!-- Email -->
                            <div class="space-y-1.5">
                                <label for="email" class="text-xs font-bold text-purple-200 block">Work Email <span class="text-purple-400">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                       placeholder="john@company.com"
                                       class="w-full px-4 py-3 rounded-xl bg-purple-950/60 border border-purple-500/30 text-white placeholder-purple-400/40 focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 text-xs sm:text-sm transition-all">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <!-- Organization -->
                            <div class="space-y-1.5">
                                <label for="organization" class="text-xs font-bold text-purple-200 block">Company / Organization</label>
                                <input type="text" id="organization" name="organization" value="{{ old('organization') }}"
                                       placeholder="e.g. Acme Enterprise"
                                       class="w-full px-4 py-3 rounded-xl bg-purple-950/60 border border-purple-500/30 text-white placeholder-purple-400/40 focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 text-xs sm:text-sm transition-all">
                            </div>

                            <!-- Service Type Required -->
                            <div class="space-y-1.5">
                                <label for="service_type" class="text-xs font-bold text-purple-200 block">Required Service / Focus Area <span class="text-purple-400">*</span></label>
                                <select id="service_type" name="service_type" required
                                        class="w-full px-4 py-3 rounded-xl bg-[#150A2E] border border-purple-500/30 text-white focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 text-xs sm:text-sm transition-all">
                                    <option value="Odoo ERP Full Implementation" {{ old('service_type') === 'Odoo ERP Full Implementation' ? 'selected' : '' }}>Odoo ERP Full Implementation</option>
                                    <option value="Module Specific Configuration (Sales/Inventory/Accounts)" {{ old('service_type') === 'Module Specific Configuration (Sales/Inventory/Accounts)' ? 'selected' : '' }}>Module Specific (Sales, Inventory, Accounting)</option>
                                    <option value="Business Process Re-engineering & Gap Analysis" {{ old('service_type') === 'Business Process Re-engineering & Gap Analysis' ? 'selected' : '' }}>Business Process Re-engineering & Gap Analysis</option>
                                    <option value="Data Migration & UAT Assistance" {{ old('service_type') === 'Data Migration & UAT Assistance' ? 'selected' : '' }}>Data Migration & UAT Support</option>
                                    <option value="Power BI Financial Dashboards" {{ old('service_type') === 'Power BI Financial Dashboards' ? 'selected' : '' }}>Power BI Financial Dashboards</option>
                                    <option value="AI / API Integration with Odoo" {{ old('service_type') === 'AI / API Integration with Odoo' ? 'selected' : '' }}>AI / API Integration with Odoo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="space-y-1.5">
                            <label for="message" class="text-xs font-bold text-purple-200 block">Project Scope & Requirements <span class="text-purple-400">*</span></label>
                            <textarea id="message" name="message" rows="4" required
                                      placeholder="Briefly describe your current business system challenges, timeline, and ERP goals..."
                                      class="w-full px-4 py-3 rounded-xl bg-purple-950/60 border border-purple-500/30 text-white placeholder-purple-400/40 focus:outline-none focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 text-xs sm:text-sm transition-all">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button with WhatsApp Branding -->
                        <button type="submit" 
                                style="background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);"
                                class="w-full py-4 rounded-xl font-bold text-sm text-white flex items-center justify-center gap-2.5 shadow-lg shadow-emerald-950/60 hover:brightness-110 transition-all duration-200 cursor-pointer transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 fill-white shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.472 14.382c-.301-.15-1.781-.879-2.057-.98-.276-.1-.476-.15-.677.15-.2.3-.777.98-.952 1.18-.175.2-.351.226-.652.075-.3-.15-1.267-.467-2.414-1.49-.893-.797-1.496-1.782-1.672-2.083-.175-.3-.019-.463.132-.613.135-.135.301-.351.451-.527.15-.175.2-.3.301-.501.1-.2.05-.376-.025-.526-.075-.15-.677-1.633-.928-2.235-.244-.587-.492-.507-.677-.517-.175-.008-.376-.01-.577-.01-.2 0-.526.075-.802.376-.276.3-1.053 1.03-1.053 2.511 0 1.482 1.078 2.912 1.229 3.113.15.2 2.122 3.241 5.141 4.545.718.31 1.279.496 1.716.635.722.23 1.379.197 1.9.12.58-.087 1.781-.728 2.032-1.431.25-.702.25-1.304.175-1.43-.075-.126-.276-.201-.577-.351zM12.04 21.737h-.008c-1.74 0-3.447-.468-4.945-1.353l-.354-.21-3.676.964.981-3.585-.23-.366a9.98 9.98 0 0 1-1.53-5.267c0-5.524 4.495-10.019 10.025-10.019 2.676 0 5.192 1.043 7.084 2.936a9.96 9.96 0 0 1 2.934 7.085c0 5.525-4.495 10.02-10.281 10.02zm8.508-17.106A11.968 11.968 0 0 0 12.032 1.1C5.438 1.1.066 6.471.064 13.067c0 2.107.55 4.164 1.595 5.976L0 24l5.12-1.343a11.944 11.944 0 0 0 5.717 1.455h.005c6.593 0 11.967-5.372 11.97-11.97 0-3.198-1.246-6.205-3.504-8.471z"/>
                            </svg>
                            <span>Send Consultation Request via WhatsApp</span>
                        </button>
                        
                        <p class="text-[11px] text-center text-purple-300/80 pt-1 flex items-center justify-center gap-1.5">
                            <svg class="w-3.5 h-3.5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>Your inquiry will open directly in WhatsApp to chat with Nayantha (<strong class="text-emerald-300">+94 77 603 5192</strong>)</span>
                        </p>
                    </form>

                    <script>
                        function handleWhatsAppConsultation(e) {
                            const name = document.getElementById('name').value.trim();
                            const email = document.getElementById('email').value.trim();
                            const org = document.getElementById('organization').value.trim();
                            const service = document.getElementById('service_type').value.trim();
                            const message = document.getElementById('message').value.trim();

                            if (!name || !email || !service || !message) {
                                return true;
                            }

                            let text = `👋 *New ERP Consultation Request*\n\n` +
                                       `👤 *Client Name:* ${name}\n` +
                                       `📧 *Work Email:* ${email}\n`;
                            if (org) {
                                text += `🏢 *Organization:* ${org}\n`;
                            }
                            text += `🎯 *Service Required:* ${service}\n\n` +
                                    `📝 *Project Scope & Requirements:*\n${message}`;

                            const whatsappUrl = `https://wa.me/94776035192?text=${encodeURIComponent(text)}`;
                            
                            // Open WhatsApp immediately in new tab
                            window.open(whatsappUrl, '_blank');
                            return true;
                        }
                    </script>

                </div>
            </div>

        </div>

    </div>
</section>
