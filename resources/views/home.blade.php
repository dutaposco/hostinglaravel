<x-app-layout>
    @section('title', 'DutaHosting - Web Hosting Indonesia Terbaik')

    <div class="page" x-data="{ billing: 'yearly' }">
        {{-- Hero Section --}}
        <section class="relative pt-32 lg:pt-40 pb-20 overflow-hidden bg-white">
            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                    
                    {{-- Left Column: Text --}}
                    <div class="text-left animate-fadeInUp">
                        <span class="text-slate-500 font-bold mb-4 block">Web Hosting Indonesia Hemat Hingga 40%</span>
                        <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-black mb-6 tracking-tight text-slate-900 leading-[1.1]">
                            Web hosting Indonesia terbaik untuk website Anda
                        </h1>
                        
                        <ul class="flex flex-col gap-3 mb-10">
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="text-[#10b981] flex-shrink-0 font-bold" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                Gratis migrasi domain dan website
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="text-[#10b981] flex-shrink-0 font-bold" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                Jalankan WordPress atau CMS lainnya
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="text-[#10b981] flex-shrink-0 font-bold" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                Fully Managed Web Hosting
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 font-medium">
                                <svg class="text-[#10b981] flex-shrink-0 font-bold" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                Bantuan Ahli 24/7
                            </li>
                        </ul>
                        
                        <div class="flex flex-col sm:flex-row items-center gap-6">
                            <button 
                                @click="window.scrollTo({top: 600, behavior: 'smooth'})"
                                class="btn btn-primary w-full sm:w-auto px-8 py-4 text-lg shadow-md hover:scale-105 transition-transform"
                            >
                                Ambil promo
                            </button>
                            <div class="flex items-center gap-2 text-sm text-slate-500 font-medium mt-2 sm:mt-0 delay-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> 
                                Jaminan 30 hari uang kembali
                            </div>
                        </div>
                    </div>

                    {{-- Right Column: Illustration --}}
                    <div class="relative animate-fadeInUp animate-delay-2 hidden lg:block px-8 py-10">
                        <div class="absolute inset-0 bg-accent/5 rounded-[40px] transform rotate-3 scale-105 pointer-events-none"></div>
                        
                        {{-- Main Window --}}
                        <div class="relative bg-white border border-slate-100 rounded-2xl shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] overflow-hidden aspect-[4/3] z-10 w-full hover:scale-[1.02] transition-transform duration-500">
                            {{-- Window Header --}}
                            <div class="h-10 bg-slate-100/80 border-b border-slate-200 flex items-center px-4 gap-2">
                                <div class="w-3 h-3 rounded-full bg-slate-300"></div>
                                <div class="w-3 h-3 rounded-full bg-slate-300"></div>
                                <div class="w-3 h-3 rounded-full bg-slate-300"></div>
                                <div class="ml-auto w-1/3 h-4 bg-slate-200/50 rounded-full"></div>
                            </div>
                            {{-- Window Body --}}
                            <div class="p-8 h-full bg-slate-50 relative overflow-hidden flex flex-col justify-center">
                                <div class="w-full relative z-10">
                                    <div class="h-6 bg-accent/20 rounded w-1/4 mb-4"></div>
                                    <div class="h-10 bg-slate-800 rounded w-3/4 mb-6"></div>
                                    <div class="space-y-4">
                                        <div class="h-3 bg-slate-200 rounded w-full"></div>
                                        <div class="h-3 bg-slate-200 rounded w-5/6"></div>
                                        <div class="h-3 bg-slate-200 rounded w-4/6"></div>
                                        <div class="h-3 bg-slate-200 rounded w-full mt-4"></div>
                                    </div>
                                </div>
                                
                                {{-- Image Placeholder Background Graphic --}}
                                <div class="absolute right-0 bottom-0 w-64 h-64 bg-gradient-to-tl from-accent/20 to-transparent rounded-tl-full mix-blend-multiply"></div>
                                <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-400/10 rounded-full blur-2xl"></div>
                            </div>
                        </div>

                        {{-- Floating Badges --}}
                        <div class="absolute -bottom-8 left-16 z-20 bg-white p-4 justify-center rounded-2xl shadow-xl flex flex-col items-center gap-1 border border-slate-100 w-28 hover:-translate-y-2 transition-transform duration-300">
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1">PageSpeed</span>
                            <div class="relative flex items-center justify-center w-16 h-16">
                                <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                                    <path class="text-slate-100" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    <path class="text-[#10b981]" stroke-dasharray="99, 100" stroke-width="4" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                </svg>
                                <span class="absolute font-black text-xl text-[#10b981]">99</span>
                            </div>
                        </div>

                        <div class="absolute top-2 right-4 z-20 bg-white px-4 py-3 rounded-xl shadow-xl flex items-center gap-3 border border-slate-100 hover:scale-105 transition-transform duration-300">
                            <svg class="text-[#10b981]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> 
                            <div class="w-16 h-2 bg-slate-200 rounded"></div>
                            <span class="font-black text-slate-800 text-sm">.CO.ID</span>
                        </div>

                        {{-- Floating Icon badge --}}
                        <div class="absolute top-1/2 -left-6 z-20 bg-slate-900 text-white p-3 rounded-2xl shadow-xl hover:-rotate-12 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                        </div>
                        <div class="absolute -top-4 left-20 z-20 bg-accent text-white p-3 rounded-2xl shadow-xl hover:rotate-12 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Pricing Section --}}
        <section id="pricing" class="py-20 bg-surface-2 relative z-20 border-y border-white/5">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12 animate-fadeInUp">
                    <h2 class="font-heading text-3xl md:text-5xl font-black mb-6 tracking-tight">
                        Pilih Paket Hosting Anda
                    </h2>
                    <div class="inline-flex items-center gap-4 bg-white p-1.5 rounded-full border border-slate-200 shadow-sm">
                        <button 
                            @click="billing = 'monthly'"
                            :class="billing === 'monthly' ? 'bg-slate-100 text-accent shadow-sm border border-slate-200' : 'text-slate-500 hover:text-accent'"
                            class="px-6 py-2.5 rounded-full font-bold text-sm transition-all"
                        >
                            Bulanan
                        </button>
                        <button 
                            @click="billing = 'yearly'"
                            :class="billing === 'yearly' ? 'bg-slate-100 text-accent shadow-sm border border-slate-200' : 'text-slate-500 hover:text-accent'"
                            class="px-6 py-2.5 rounded-full font-bold text-sm transition-all flex items-center gap-2"
                        >
                            Tahunan <span class="bg-green/15 text-green text-[10px] px-2 py-0.5 rounded-full border border-green/20">HEMAT 40%</span>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto relative">
                    {{-- Shared Plan --}}
                    <div class="card card-overflow-visible relative p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white border-slate-200 mt-4 hover:border-slate-300 transition-all duration-300" style="animation-delay: 0s">
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">Cloud Pemula</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">Sempurna untuk situs pribadi dan blog.</p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-500">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight" x-text="billing === 'yearly' ? '9.900' : '15.900'"></span>
                                <span class="text-slate-500 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'" class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @foreach(['1 Website', 'Penyimpanan 10 GB NVMe', 'Sertifikat SSL Gratis', 'Bandwidth Tanpa Batas', 'Dukungan Standar'] as $feature)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/pricing" class="w-full py-4 text-center rounded-full font-heading font-bold text-sm bg-white text-accent border-2 border-accent hover:bg-accent hover:text-white transition-all focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">Pilih Paket Ini</a>
                    </div>

                    {{-- Premium Plan --}}
                    <div class="card card-overflow-visible relative p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white border-accent border-2 shadow-lg scale-[1.02] md:-translate-y-2 transition-all duration-300" style="animation-delay: 0.1s">
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white px-5 py-1.5 rounded-full text-xs font-bold tracking-wider uppercase shadow-md z-20">Paling Populer</div>
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">Cloud Premium</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">Kinerja tinggi untuk bisnis.</p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-500">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight" x-text="billing === 'yearly' ? '24.900' : '39.900'"></span>
                                <span class="text-slate-500 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'" class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @foreach(['Website Tidak Terbatas', 'Penyimpanan 50 GB NVMe', 'Domain Gratis (Thn ke-1)', 'Pencadangan Harian', 'Dukungan Prioritas 24/7'] as $feature)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/pricing" class="btn btn-primary w-full py-4 text-center rounded-full font-heading font-bold text-sm transition-all focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">Pilih Paket Ini</a>
                    </div>

                    {{-- Enterprise Plan --}}
                    <div class="card card-overflow-visible relative p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white border-slate-200 mt-4 hover:border-slate-300 transition-all duration-300" style="animation-delay: 0.2s">
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">Cloud Enterprise</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">Sumber daya khusus untuk lalu lintas besar.</p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-500">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight" x-text="billing === 'yearly' ? '99.000' : '149.000'"></span>
                                <span class="text-slate-500 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'" class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @foreach(['Prosesor Inti Khusus', 'Penyimpanan 200 GB NVMe', 'Perlindungan DDoS Lanjutan', 'Object Caching Pro', 'Manajer Akun Khusus'] as $feature)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/pricing" class="w-full py-4 text-center rounded-full font-heading font-bold text-sm bg-white text-accent border-2 border-accent hover:bg-accent hover:text-white transition-all focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">Pilih Paket Ini</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Features Section --}}
        <section class="py-32 relative bg-white border-y border-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-20 animate-fadeInUp">
                    <span class="section-label">Performa Tak Tertandingi</span>
                    <h2 class="section-title">Infrastruktur Premium, Harga Minimum</h2>
                    <p class="section-subtitle mx-auto">Bukan sekadar janji. Teknologi mutakhir kami dirancang khusus agar website Anda stabil, anti-lelet, dan selalu melesat jauh meninggalkan kompetitor lain.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="card bg-surface-2 p-8 group animate-fadeInUp animate-delay-1 hover:bg-slate-50 transition-colors shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center mb-6 shadow-sm group-hover:border-accent/30 group-hover:scale-110 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-accent/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="15" x2="4" y2="15"/></svg>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-accent transition-all duration-300">Prosesor Generasi Terbaru</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Ditenagai oleh prosesor premium AMD EPYC™ dan Intel® Xeon® yang memberikan kecepatan tiada tara.</p>
                    </div>

                    <div class="card bg-surface-2 p-8 group animate-fadeInUp animate-delay-2 hover:bg-slate-50 transition-colors shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center mb-6 shadow-sm group-hover:border-accent/30 group-hover:scale-110 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-accent/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gold"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-accent transition-all duration-300">Penyimpanan SSD NVMe</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Baca dan tulis data hingga 10x lebih cepat dibandingkan SSD standar. Sempurna untuk aplikasi berat database.</p>
                    </div>

                    <div class="card bg-surface-2 p-8 group animate-fadeInUp animate-delay-3 hover:bg-slate-50 transition-colors shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center mb-6 shadow-sm group-hover:border-accent/30 group-hover:scale-110 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-accent/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-accent transition-all duration-300">Perlindungan DDoS Lanjutan</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Filtrasi lalu lintas tingkat perushaan menjaga situs Anda tetap online selama serangan berbahaya.</p>
                    </div>

                    <div class="card bg-surface-2 p-8 group animate-fadeInUp animate-delay-4 hover:bg-slate-50 transition-colors shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center mb-6 shadow-sm group-hover:border-accent/30 group-hover:scale-110 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-accent/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-purple-400"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-accent transition-all duration-300">CDN Anycast Global</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Kirim konten dari pusat data terdekat ke pengunjung Anda, mengurangi latensi seketika.</p>
                    </div>

                    <div class="card bg-surface-2 p-8 group animate-fadeInUp animate-delay-5 hover:bg-slate-50 transition-colors shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center mb-6 shadow-sm group-hover:border-accent/30 group-hover:scale-110 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-accent/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-400"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-accent transition-all duration-300">Sumber Daya Terpisah</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Nikmati lingkungan terisolasi dengan kontainer cloud-native yang memastikan tidak ada tetangga yang mencuri prosesor.</p>
                    </div>

                    <div class="card bg-surface-2 p-8 group animate-fadeInUp animate-delay-6 hover:bg-slate-50 transition-colors shadow-sm">
                        <div class="w-14 h-14 rounded-2xl bg-white border border-slate-200 flex items-center justify-center mb-6 shadow-sm group-hover:border-accent/30 group-hover:scale-110 transition-all duration-500 relative">
                            <div class="absolute inset-0 bg-accent/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-sky-400"><path d="M17.5 19a3.5 3.5 0 0 0 0-7h-1.5c0-2.28-1.74-4.5-4.47-4.5A4.5 4.5 0 0 0 7 12h-.5a3.5 3.5 0 0 0 0 7z"/></svg>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-slate-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-accent transition-all duration-300">Pencadangan Otomatis</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">Tenang mengetahui data Anda dicadangkan dengan aman di luar situs secara otomatis setiap harinya.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimonial Section --}}
        <section class="py-24 bg-white overflow-hidden relative">
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-16 animate-fadeInUp">
                    <span class="section-label">Ulasan Pelanggan</span>
                    <h2 class="section-title">Dipercaya oleh ribuan <span class="text-accent">pebisnis lokal</span></h2>
                    <p class="section-subtitle mx-auto">Kami mengutamakan kualitas. Inilah yang dikatakan klien tentang layanan hosting kami.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="card bg-white p-8 border border-slate-100 shadow-sm hover:shadow-card hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                        <div class="flex items-center gap-1 mb-4">
                            @for($i=0; $i<5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gold"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            @endfor
                        </div>
                        <p class="text-slate-700 italic leading-relaxed mb-6 flex-grow">Semenjak pindah ke DutaHosting, website e-commerce saya nggak pernah down lagi walau lagi rame-ramenya flash sale. Speed-nya luar biasa dan harga bersahabat!</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div class="w-12 h-12 rounded-full border border-slate-200 bg-slate-100 flex items-center justify-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1.5.5 1.5 1.5L5 15c0 1.5.5 2.5 2 3 1 .5 2 3 2 3s-1.5 0-6 0z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.5c0 1.5-.5 2.5-2 3-1 .5-2 3-2 3s1.5 0 6 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm font-heading">Budi Santoso</h4>
                                <p class="text-xs text-slate-500">Pemilik Toko Online</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="card bg-white p-8 border border-slate-100 shadow-sm hover:shadow-card hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                        <div class="flex items-center gap-1 mb-4">
                            @for($i=0; $i<5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gold"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            @endfor
                        </div>
                        <p class="text-slate-700 italic leading-relaxed mb-6 flex-grow">Saya udah coba berbagai provider, tapi ini yang termurah dengan spek enterprise. Setup-nya super mudah, dan customer service balasnya cepat banget.</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div class="w-12 h-12 rounded-full border border-slate-200 bg-slate-100 flex items-center justify-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1.5.5 1.5 1.5L5 15c0 1.5.5 2.5 2 3 1 .5 2 3 2 3s-1.5 0-6 0z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.5c0 1.5-.5 2.5-2 3-1 .5-2 3-2 3s1.5 0 6 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm font-heading">Siti Rahmawati</h4>
                                <p class="text-xs text-slate-500">Web Developer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="card bg-white p-8 border border-slate-100 shadow-sm hover:shadow-card hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                        <div class="flex items-center gap-1 mb-4">
                            @for($i=0; $i<5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gold"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            @endfor
                        </div>
                        <p class="text-slate-700 italic leading-relaxed mb-6 flex-grow">Pilihan tepat buat content creator! Web jadi loading instan buat pembaca di Indonesia berkat server lokal. Bakal terus perpanjang tahunan pokoknya.</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div class="w-12 h-12 rounded-full border border-slate-200 bg-slate-100 flex items-center justify-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1.5.5 1.5 1.5L5 15c0 1.5.5 2.5 2 3 1 .5 2 3 2 3s-1.5 0-6 0z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.5c0 1.5-.5 2.5-2 3-1 .5-2 3-2 3s1.5 0 6 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm font-heading">Arief Pratama</h4>
                                <p class="text-xs text-slate-500">Blogger & Content Creator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA Section --}}
        <section class="py-32 relative bg-white">
            <div class="container mx-auto px-6 text-center">
                <div class="max-w-3xl mx-auto flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent mb-6 drop-shadow-lg"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    <h2 class="font-heading text-4xl lg:text-5xl font-black mb-6">Wujudkan Website Impianmu Sekarang</h2>
                    <p class="text-lg text-slate-500 mb-10 leading-relaxed max-w-2xl font-sans">
                        Tidak perlu ragu. Pindah ke DutaHosting kapan saja secara cuma-cuma dan rasakan lonjakan performa website secara instan tanpa ribet.
                    </p>
                    <a href="/pricing" class="btn btn-primary btn-lg px-10 shadow-md text-lg hover:scale-105 transition-transform">
                        Mulai Sekarang Juga
                    </a>
                </div>
            </div>
        </section>

        {{-- FAQ Section --}}
        <section class="py-24 bg-white border-t border-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <span class="section-label">Tanya Jawab</span>
                    <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
                    <p class="section-subtitle mx-auto">Ada pertanyaan? Temukan jawabannya di sini, atau hubungi tim kami kapan saja.</p>
                </div>
                <div class="max-w-3xl mx-auto flex flex-col gap-4">
                    @php
                        $faqs = [
                            ['q' => 'Apakah ada garansi uang kembali?', 'a' => 'Ya! Kami memberikan garansi uang kembali 30 hari penuh untuk semua paket hosting. Jika tidak puas, kami kembalikan 100% tanpa pertanyaan ribet.'],
                            ['q' => 'Bisakah saya upgrade paket kapan saja?', 'a' => 'Tentu bisa. Anda bisa upgrade dari Cloud Pemula ke Premium atau Enterprise kapan saja langsung dari dasbor pengguna tanpa downtime sama sekali.'],
                            ['q' => 'Apakah hosting ini cocok untuk WordPress?', 'a' => 'Sangat cocok! Server kami telah dioptimalkan untuk WordPress, WooCommerce, dan berbagai CMS populer lainnya. Setup WordPress bisa dilakukan dalam hitungan menit.'],
                            ['q' => 'Di mana lokasi server DutaHosting?', 'a' => 'Server utama kami berlokasi di Jakarta, Indonesia. Kami juga memiliki node di Singapura, Tokyo, dan Los Angeles untuk performa optimal di seluruh dunia.'],
                            ['q' => 'Apakah SSL gratis termasuk di semua paket?', 'a' => 'Ya, semua paket hosting kami sudah termasuk SSL gratis (Let\'s Encrypt) yang dapat diaktifkan dengan satu klik. HTTPS untuk website Anda tanpa biaya tambahan.'],
                            ['q' => 'Bagaimana cara menghubungi dukungan pelanggan?', 'a' => 'Tim dukungan kami siap 24/7 via live chat, email, dan WhatsApp. Rata-rata waktu respons kami di bawah 10 menit untuk semua jenis pertanyaan teknis.']
                        ];
                    @endphp
                    @foreach($faqs as $faq)
                        <div x-data="{ isOpen: false }" class="bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all duration-300 hover:border-accent group">
                            <button 
                                @click="isOpen = !isOpen"
                                class="w-full px-8 py-5 flex items-center justify-between text-left hover:bg-slate-50 transition-colors"
                            >
                                <span class="font-bold text-slate-900 group-hover:text-accent transition-colors">{{ $faq['q'] }}</span>
                                <svg :class="isOpen ? 'rotate-180 text-accent' : ''" class="text-slate-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                            </button>
                            <div 
                                class="transition-all duration-300 ease-in-out px-8 overflow-hidden"
                                :class="isOpen ? 'max-h-40 pb-5' : 'max-h-0'"
                            >
                                <p class="text-slate-600 text-sm leading-relaxed border-t border-slate-50 pt-5">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
