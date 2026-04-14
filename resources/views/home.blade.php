<x-app-layout>
    @section('title', 'DutaHosting - Web Hosting Indonesia Terbaik')

    <div class="page" x-data="{ billing: 'yearly' }">
        {{-- Hero Section with Nature Background and Animated Domain Search --}}
        {{-- Hero Section with Raw Nature Background --}}
        <section class="relative min-h-screen flex flex-col items-center justify-center pt-16 pb-20 overflow-hidden">
            <!-- Pure City Background -->
            <div class="absolute inset-0 z-0">
                <img src="https://eu-images.contentstack.com/v3/assets/blte218090c2a6fb1e2/bltd23607b2397f3d22/6824a9c93510b0a6a2844fd3/spanien-barcelona-luftaufnahme-strand-la-barceloneta-g-1468554098.jpg?auto=webp&width=1440&quality=70"
                    alt="City Background" class="w-full h-full object-cover brightness-[0.6]">
            </div>

            <div class="relative z-10 container mx-auto px-6 transform translate-y-6 md:translate-y-10">
                <div class="text-center max-w-5xl mx-auto">
                    <h1
                        class="text-5xl md:text-6xl font-heading font-black text-white mb-6 leading-[1.1] tracking-tight">
                        Solusi Hosting Terbaik<br>untuk Bisnis Online Kamu
                    </h1>
                    <p class="text-lg md:text-xl text-white/90 mb-10 leading-relaxed font-medium max-w-3xl mx-auto">
                        Ada diskon hingga <span class="text-yellow-400 font-extrabold italic">70% + domain & SSL
                            gratis</span>, khusus periode terbatas!
                    </p>
                    <p class="text-lg md:text-xl text-white/90 mb-10 leading-relaxed font-medium max-w-3xl mx-auto">Cek
                        Domain Kamu Sekarang!</p>

                    <!-- Glassmorphism Domain Search Form Container -->
                    <div class="max-w-xl mx-auto" x-data="{ 
                        placeholder: '', 
                        words: ['Ketik Nama Domain', 'perusahaankamu.id', 'namakamu.com', 'bisniskamu.net'], 
                        wordIndex: 0, 
                        charIndex: 0, 
                        isDeleting: false,
                        type() {
                            let currentWord = this.words[this.wordIndex];
                            if (this.isDeleting) {
                                this.placeholder = currentWord.substring(0, this.charIndex - 1);
                                this.charIndex--;
                            } else {
                                this.placeholder = currentWord.substring(0, this.charIndex + 1);
                                this.charIndex++;
                            }

                            let speed = this.isDeleting ? 40 : 80;
                            if (!this.isDeleting && this.charIndex === currentWord.length) {
                                speed = 1500;
                                this.isDeleting = true;
                            } else if (this.isDeleting && this.charIndex === 0) {
                                this.isDeleting = false;
                                this.wordIndex = (this.wordIndex + 1) % this.words.length;
                                speed = 400;
                            }
                            setTimeout(() => this.type(), speed);
                        }
                    }" x-init="type()">
                        <div
                            class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-4 md:p-5 border border-white/20">
                            <!-- Tabs (Glass Style) -->
                            <div class="flex items-center gap-8 mb-4 px-4" x-data="{ tab: 'daftar' }">
                                <button @click="tab = 'daftar'"
                                    :class="tab === 'daftar' ? 'text-white border-b-2 border-white' : 'text-white/60 hover:text-white'"
                                    class="pb-2 text-xs font-black uppercase tracking-widest transition-all">DAFTAR</button>
                                <button @click="tab = 'transfer'"
                                    :class="tab === 'transfer' ? 'text-white border-b-2 border-white' : 'text-white/60 hover:text-white'"
                                    class="pb-2 text-xs font-black uppercase tracking-widest transition-all">TRANSFER</button>
                            </div>

                            <!-- Search Form -->
                            <form action="{{ route('domain.search') }}" method="POST">
                                @csrf
                                <div class="flex flex-col sm:flex-row items-stretch gap-3">
                                    <div class="flex-1">
                                        <input type="text" name="domain" :placeholder="placeholder"
                                            class="w-full px-5 py-3.5 bg-white/90 border-0 rounded-xl focus:bg-white focus:ring-4 focus:ring-white/20 text-slate-800 font-bold transition-all outline-none placeholder-slate-400"
                                            required>
                                    </div>
                                    <button type="submit"
                                        class="px-8 py-3.5 bg-accent text-white font-black uppercase tracking-widest text-xs rounded-xl hover:bg-blue-600 transition-all shadow-lg active:scale-95 flex items-center justify-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                        CEK DOMAIN
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 animate-bounce cursor-pointer flex flex-col items-center gap-1 group z-20"
                onclick="document.getElementById('pricing').scrollIntoView({behavior: 'smooth'})">
                <span
                    class="text-white/80 text-[9px] font-bold tracking-[0.2em] uppercase group-hover:text-white transition-colors">Scroll</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    class="text-white/80 group-hover:text-white transition-colors">
                    <path d="m7 13 5 5 5-5" />
                    <path d="m7 6 5 5 5-5" />
                </svg>
            </div>
        </section>

        {{-- Pricing Section --}}
        <section id="pricing" class="py-20 bg-surface-2 relative z-20 border-y border-white/5">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12 animate-fadeInUp">
                    <h2 class="font-heading text-3xl md:text-5xl font-black mb-6 tracking-tight">
                        Pilih Paket Hosting Anda
                    </h2>
                    <div
                        class="inline-flex items-center gap-4 bg-white p-1.5 rounded-full border border-slate-200 shadow-sm">
                        <button @click="billing = 'monthly'"
                            :class="billing === 'monthly' ? 'bg-slate-100 text-accent shadow-sm border border-slate-200' : 'text-slate-500 hover:text-accent'"
                            class="px-6 py-2.5 rounded-full font-bold text-sm transition-all">
                            Bulanan
                        </button>
                        <button @click="billing = 'yearly'"
                            :class="billing === 'yearly' ? 'bg-slate-100 text-accent shadow-sm border border-slate-200' : 'text-slate-500 hover:text-accent'"
                            class="px-6 py-2.5 rounded-full font-bold text-sm transition-all flex items-center gap-2">
                            Tahunan <span
                                class="bg-green/15 text-green text-[10px] px-2 py-0.5 rounded-full border border-green/20">HEMAT
                                40%</span>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto relative">
                    {{-- Shared Plan --}}
                    <div class="card card-overflow-visible relative p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white border-slate-200 mt-4 hover:border-slate-300 transition-all duration-300"
                        style="animation-delay: 0s">
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">Cloud Pemula</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">Sempurna untuk situs pribadi dan blog.</p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-500">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight"
                                    x-text="billing === 'yearly' ? '9.900' : '15.900'"></span>
                                <span class="text-slate-500 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'"
                                class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">
                                Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @foreach(['1 Website', 'Penyimpanan 10 GB NVMe', 'Sertifikat SSL Gratis', 'Bandwidth Tanpa Batas', 'Dukungan Standar'] as $feature)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/pricing"
                            class="w-full py-4 text-center rounded-full font-heading font-bold text-sm bg-white text-accent border-2 border-accent hover:bg-accent hover:text-white transition-all focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">Pilih
                            Paket Ini</a>
                    </div>

                    {{-- Premium Plan --}}
                    <div class="card card-overflow-visible relative p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white border-accent border-2 shadow-lg scale-[1.02] md:-translate-y-2 transition-all duration-300"
                        style="animation-delay: 0.1s">
                        <div
                            class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white px-5 py-1.5 rounded-full text-xs font-bold tracking-wider uppercase shadow-md z-20">
                            Paling Populer</div>
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">Cloud Premium</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">Kinerja tinggi untuk bisnis.</p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-500">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight"
                                    x-text="billing === 'yearly' ? '24.900' : '39.900'"></span>
                                <span class="text-slate-500 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'"
                                class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">
                                Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @foreach(['Website Tidak Terbatas', 'Penyimpanan 50 GB NVMe', 'Domain Gratis (Thn ke-1)', 'Pencadangan Harian', 'Dukungan Prioritas 24/7'] as $feature)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/pricing"
                            class="btn btn-primary w-full py-4 text-center rounded-full font-heading font-bold text-sm transition-all focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">Pilih
                            Paket Ini</a>
                    </div>

                    {{-- Enterprise Plan --}}
                    <div class="card card-overflow-visible relative p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white border-slate-200 mt-4 hover:border-slate-300 transition-all duration-300"
                        style="animation-delay: 0.2s">
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">Cloud Enterprise</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">Sumber daya khusus untuk lalu lintas besar.
                            </p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-500">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight"
                                    x-text="billing === 'yearly' ? '99.000' : '149.000'"></span>
                                <span class="text-slate-500 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'"
                                class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">
                                Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @foreach(['Prosesor Inti Khusus', 'Penyimpanan 200 GB NVMe', 'Perlindungan DDoS Lanjutan', 'Object Caching Pro', 'Manajer Akun Khusus'] as $feature)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <a href="/pricing"
                            class="w-full py-4 text-center rounded-full font-heading font-bold text-sm bg-white text-accent border-2 border-accent hover:bg-accent hover:text-white transition-all focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2">Pilih
                            Paket Ini</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Domain List Section --}}
        <section class="py-24 bg-white relative">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16 animate-fadeInUp">
                    <h2 class="font-heading text-3xl md:text-4xl font-black mb-4 tracking-tight">
                        Daftar Domain Murah Pilihan Terbaik untuk Website Anda
                    </h2>
                    <p class="text-slate-500 max-w-2xl mx-auto">
                        Pilih nama domain favorit Anda dan beli domain dengan harga murah di DutaHosting
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                    @php
                        $domains = [
                            ['tld' => '.com', 'price' => '139.000', 'orig' => '209.000', 'discount' => '33%', 'desc' => 'Ekstensi domain terpopuler untuk segala kebutuhan Anda'],
                            ['tld' => '.id', 'price' => '99.000', 'orig' => '249.000', 'discount' => '60%', 'desc' => 'Website lebih mudah ditemukan konsumen Indonesia'],
                            ['tld' => '.cloud', 'price' => '39.900', 'orig' => '529.000', 'discount' => '92%', 'desc' => 'Ekstensi domain cerdas untuk bisnis modern di era sekarang'],
                            ['tld' => '.online', 'price' => '25.900', 'orig' => '639.000', 'discount' => '95%', 'desc' => 'Domain yang merepresentasikan gaya hidup serba online'],
                            ['tld' => '.net', 'price' => '219.000', 'orig' => null, 'discount' => null, 'desc' => 'Jaringan tak terbatas untuk bisnis dan ide Anda'],
                            ['tld' => '.site', 'price' => '25.900', 'orig' => '669.000', 'discount' => '96%', 'desc' => 'Solusi domain fleksibel untuk memperkuat kehadiran digital'],
                            ['tld' => '.store', 'price' => '65.000', 'orig' => '949.000', 'discount' => '93%', 'desc' => 'Menguatkan eksistensi sebagai toko modern di internet'],
                            ['tld' => '.web.id', 'price' => '9.900', 'orig' => '50.000', 'discount' => '80%', 'desc' => 'Domain untuk website profesional dengan identitas Indonesia'],
                        ];
                    @endphp

                    @foreach($domains as $domain)
                        <div
                            class="card p-8 flex flex-col items-center text-center relative group hover:shadow-xl transition-all duration-300 border-slate-100 rounded-2xl overflow-hidden">
                            @if($domain['discount'])
                                <div
                                    class="absolute top-0 right-0 bg-gold text-white text-[10px] font-black px-3 py-4 rounded-bl-3xl shadow-sm z-10 flex flex-col leading-none">
                                    <span>{{ $domain['discount'] }}</span>
                                    <span class="mt-1">OFF</span>
                                </div>
                            @endif

                            <h3
                                class="font-heading text-4xl font-black text-slate-900 mb-6 group-hover:text-accent transition-colors">
                                {{ $domain['tld'] }}
                            </h3>

                            <div class="mb-6">
                                @if($domain['orig'])
                                    <p class="text-slate-400 text-sm line-through mb-1">Rp {{ $domain['orig'] }}</p>
                                @endif
                                <div class="flex items-baseline justify-center gap-1 text-accent">
                                    <span class="text-sm font-bold">Rp</span>
                                    <span class="text-3xl font-black font-heading">{{ $domain['price'] }}</span>
                                </div>
                                <p class="text-slate-500 text-xs mt-1">1 Tahun</p>
                            </div>

                            <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">
                                {{ $domain['desc'] }}
                            </p>

                            <a href="/domains"
                                class="w-full py-3 bg-accent text-white font-bold rounded-lg hover:bg-blue-700 transition-colors shadow-sm group-hover:scale-[1.02] transform">
                                Beli
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Kelebihan Cloud Hosting Section --}}
        <section class="py-24 bg-white relative">
            <div class="container mx-auto px-6">
                <div class="text-center mb-20 animate-fadeInUp">
                    <h2 class="font-heading text-3xl md:text-5xl font-black mb-6 tracking-tight text-slate-900">
                        Kelebihan Cloud Hosting Indonesia Dari DutaHosting
                    </h2>
                    <p class="text-slate-500 max-w-3xl mx-auto text-lg leading-relaxed">
                        Layanan Cloud Hosting Indonesia dengan performa dan keamanan terbaik
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16 max-w-6xl mx-auto">
                    @php
                        $features = [
                            [
                                'title' => 'Cloud Storage (SSD NVMe)',
                                'desc' => 'Teknologi penyimpanan Cloud berbasis SSD NVMe dengan replikasi data 3x memberikan Anda 100% data uptime, kinerja terbaik, stabilitas maksimum, dan perlindungan terhadap kerusakan data.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-400 font-black"><path d="M17.5 19a3.5 3.5 0 0 0 0-7h-1.5c0-2.28-1.74-4.5-4.47-4.5A4.5 4.5 0 0 0 7 12h-.5a3.5 3.5 0 0 0 0 7z"/></svg>'
                            ],
                            [
                                'title' => 'Remote Backup',
                                'desc' => 'Cegah kehilangan atau kerusakan data akibat hal tidak terduga dengan cadangan yang disimpan di Data Center di lokasi berbeda. Terdapat dua titik pemulihan, yaitu mingguan dan bulanan.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-sky-400"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="3" y2="15"/></svg>'
                            ],
                            [
                                'title' => 'cPanel dengan CloudLinux',
                                'desc' => 'cPanel adalah panel kontrol terbaik karena mudah digunakan, fitur lengkap, dan hemat waktu. Isolasi sumber daya yang disediakan oleh CloudLinux membuat server sangat stabil.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500 font-bold"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>'
                            ],
                            [
                                'title' => 'Web Accelerator',
                                'desc' => 'Terdapat berbagai fitur yang mampu mempercepat website Anda seperti WordPress Accelerator, PageSpeed Plugin, NGINX Cache, LiteSpeed Cache, GFonts Accelerator, Redis, dan Memcached.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-sky-500"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>'
                            ],
                            [
                                'title' => 'HTTP/3 dan Brotli',
                                'desc' => 'Adanya teknologi HTTP/3 terbaru dan QUIC di layanan DutaHosting dan ditambah dengan kombinasi kompresi optimal Brotli, website Anda akan menjadi lebih cepat diakses.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-400"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>'
                            ],
                            [
                                'title' => 'Anti-malware Imunify360',
                                'desc' => 'Sekarang Anda bisa memprediksi serangan malware dan lindungi situs web Anda dari kerusakan dengan satu klik menggunakan fitur Imunify360 dari Cloud Hosting DutaHosting.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-accent shadow-sm"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'
                            ],
                            [
                                'title' => 'Provider Hosting Indonesia Terpercaya',
                                'desc' => 'DutaHosting hadir untuk memberikan layanan terbaik, telah dipercaya oleh ratusan ribu pelanggan baik di Indonesia maupun mancanegara.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>'
                            ],
                            [
                                'title' => 'Biaya Transparan',
                                'desc' => 'Perhitungan biaya yang sederhana dan tidak ada biaya tersembunyi. Cukup bayar sesuai dengan tagihan. DutaHosting memberikan jaminan garansi uang kembali 30 hari pertama berlaku untuk Hosting.',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-sky-400"><path d="M12 1v22"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>'
                            ],
                        ];
                    @endphp

                    @foreach($features as $feature)
                        <div class="flex gap-6 group animate-fadeInUp">
                            <div
                                class="w-16 h-16 rounded-2xl bg-slate-50 flex items-center justify-center shrink-0 group-hover:bg-white group-hover:shadow-xl transition-all duration-500 border border-transparent group-hover:border-slate-100 relative overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity">
                                </div>
                                {!! $feature['icon'] !!}
                            </div>
                            <div>
                                <h3
                                    class="font-heading text-xl font-bold text-slate-900 mb-2 group-hover:text-accent transition-colors leading-tight">
                                    {{ $feature['title'] }}
                                </h3>
                                <p class="text-slate-500 text-sm leading-relaxed max-w-md">
                                    {{ $feature['desc'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Teknologi Section --}}
        <section class="py-32 bg-accent relative overflow-hidden mt-10">
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h2 class="font-heading text-4xl md:text-5xl font-black mb-4 text-white">Teknologi</h2>
                <p class="text-white/80 max-w-4xl mx-auto mb-16 text-lg">
                    DutaHosting menyediakan teknologi yang sesuai dengan kebutuhan website Anda
                </p>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 max-w-7xl mx-auto">
                    @php
                        $techs = [
                            ['name' => 'Intel Xeon', 'color' => 'text-blue-600', 'initial' => 'IX'],
                            ['name' => 'cPanel', 'color' => 'text-orange-600', 'initial' => 'cP'],
                            ['name' => 'LiteSpeed', 'color' => 'text-red-500', 'initial' => 'LS'],
                            ['name' => 'Nginx', 'color' => 'text-green', 'initial' => 'N'],
                            ['name' => 'CloudLinux', 'color' => 'text-slate-700', 'initial' => 'CL'],
                            ['name' => 'Imunify 360', 'color' => 'text-emerald-500', 'initial' => 'i3'],
                            ['name' => 'Node.js', 'color' => 'text-green-600', 'initial' => 'JS'],
                            ['name' => 'Python', 'color' => 'text-blue-500', 'initial' => 'Py'],
                            ['name' => 'Ruby', 'color' => 'text-red-600', 'initial' => 'Rb'],
                            ['name' => 'Go Lang', 'color' => 'text-sky-400', 'initial' => 'Go'],
                            ['name' => 'Rust', 'color' => 'text-orange-700', 'initial' => 'Rs'],
                            ['name' => 'PHP', 'color' => 'text-indigo-600', 'initial' => 'php'],
                            ['name' => 'JetBackup', 'color' => 'text-orange-500', 'initial' => 'JB'],
                            ['name' => 'MySQL', 'color' => 'text-blue-400', 'initial' => 'SQL'],
                            ['name' => 'PostgreSQL', 'color' => 'text-blue-700', 'initial' => 'PS'],
                            ['name' => 'MongoDB', 'color' => 'text-green-700', 'initial' => 'MG'],
                            ['name' => 'Memcached', 'color' => 'text-teal-500', 'initial' => 'Mc'],
                            ['name' => 'Redis', 'color' => 'text-red-700', 'initial' => 'Rd'],
                        ];
                    @endphp

                    @foreach($techs as $tech)
                        <div
                            class="bg-white rounded-xl p-6 flex flex-col items-center justify-center gap-3 shadow-sm hover:shadow-xl transition-all hover:-translate-y-2 group cursor-default">
                            <div
                                class="w-12 h-12 rounded-xl bg-slate-50 flex items-center justify-center font-black text-xl {{ $tech['color'] }} group-hover:scale-110 transition-transform duration-300">
                                {{ $tech['initial'] }}
                            </div>
                            <span class="font-bold text-slate-800 text-xs tracking-tight">{{ $tech['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Solutions / Tabs Section --}}
        <section class="py-24 bg-white relative overflow-hidden" x-data="{ activeTab: 1 }">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16 animate-fadeInUp">
                    <h2 class="font-heading text-3xl md:text-5xl font-black mb-6 tracking-tight text-slate-900">
                        Solusi Apa yang Tepat untuk Saya?
                    </h2>
                </div>

                <div class="flex flex-col lg:flex-row gap-12 items-start max-w-6xl mx-auto">
                    {{-- Tabs Navigation --}}
                    <div class="w-full lg:w-1/3 flex flex-col gap-4">
                        <button @click="activeTab = 1"
                            :class="activeTab === 1 ? 'bg-sky-400 text-white shadow-lg scale-105' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-100'"
                            class="flex items-center gap-4 p-5 rounded-2xl transition-all duration-300 text-left group">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center transition-colors"
                                :class="activeTab === 1 ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-sky-100'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <line x1="3" y1="9" x2="21" y2="9" />
                                    <line x1="9" y1="21" x2="9" y2="9" />
                                </svg>
                            </div>
                            <span class="font-bold">Saya butuh website</span>
                        </button>

                        <button @click="activeTab = 2"
                            :class="activeTab === 2 ? 'bg-sky-400 text-white shadow-lg scale-105' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-100'"
                            class="flex items-center gap-4 p-5 rounded-2xl transition-all duration-300 text-left group">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center transition-colors"
                                :class="activeTab === 2 ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-sky-100'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="9" cy="21" r="1" />
                                    <circle cx="20" cy="21" r="1" />
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                                </svg>
                            </div>
                            <span class="font-bold">Mau buat toko online</span>
                        </button>

                        <button @click="activeTab = 3"
                            :class="activeTab === 3 ? 'bg-sky-400 text-white shadow-lg scale-105' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-100'"
                            class="flex items-center gap-4 p-5 rounded-2xl transition-all duration-300 text-left group">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center transition-colors"
                                :class="activeTab === 3 ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-sky-100'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m22 7-10 7L2 7" />
                                    <rect width="20" height="14" x="2" y="5" rx="2" />
                                </svg>
                            </div>
                            <span class="font-bold">Mau buat email bisnis</span>
                        </button>

                        <button @click="activeTab = 4"
                            :class="activeTab === 4 ? 'bg-sky-400 text-white shadow-lg scale-105' : 'bg-white text-slate-600 hover:bg-slate-50 border border-slate-100'"
                            class="flex items-center gap-4 p-5 rounded-2xl transition-all duration-300 text-left group">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center transition-colors"
                                :class="activeTab === 4 ? 'bg-white/20' : 'bg-slate-100 group-hover:bg-sky-100'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="21" x2="3" y1="6" y2="6" />
                                    <line x1="21" x2="3" y1="12" y2="12" />
                                    <line x1="21" x2="3" y1="18" y2="18" />
                                </svg>
                            </div>
                            <span class="font-bold">Butuh hosting skala besar</span>
                        </button>
                    </div>

                    {{-- Tab Content Area --}}
                    <div
                        class="w-full lg:w-2/3 bg-slate-50/50 rounded-4xl p-8 md:p-12 border border-slate-100 min-h-[500px] flex flex-col items-center">
                        {{-- Tab 1 Content --}}
                        <template x-if="activeTab === 1">
                            <div class="animate-fadeIn w-full">
                                <div class="relative w-full aspect-video mb-12 flex items-center justify-center">
                                    <div class="absolute inset-0 bg-sky-200/20 blur-3xl rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 450"
                                        class="w-full max-w-md h-auto drop-shadow-2xl">
                                        <rect x="150" y="50" width="500" height="350" rx="20" fill="white"
                                            stroke="#e2e8f0" stroke-width="2" />
                                        <rect x="150" y="50" width="500" height="40" rx="3" fill="#f8fafc" />
                                        <circle cx="180" cy="70" r="5" fill="#ef4444" />
                                        <circle cx="200" cy="70" r="5" fill="#f59e0b" />
                                        <circle cx="220" cy="70" r="5" fill="#10b981" />
                                        <rect x="200" y="120" width="400" height="150" rx="10" fill="#f1f5f9" />
                                        <path d="M400 200 L440 240 L360 240 Z" fill="#38bdf8" />
                                        <rect x="350" y="270" width="100" height="30" rx="5" fill="#38bdf8" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-3xl font-black text-slate-800 mb-6 text-center">Membuat
                                    Website</h3>
                                <div class="space-y-4 text-slate-600 leading-relaxed text-center max-w-2xl mx-auto">
                                    <p>Anda membutuhkan <span class="font-bold">nama domain</span> dan layanan <span
                                            class="font-bold text-accent">web hosting murah</span> untuk membuat
                                        website. Domain adalah nama dari website Anda, sedangkan hosting dibutuhkan
                                        untuk menyimpan dan mempublikasikan website.</p>
                                    <p>Setelah memiliki domain dan web hosting Indonesia, Anda dapat membuat website
                                        sendiri menggunakan website builder yang disediakan oleh <span
                                            class="font-bold">DutaHosting</span> atau menggunakan WordPress jika Anda
                                        adalah pengguna yang lebih advance.</p>
                                    <p>Namun jika Anda tidak punya waktu, Anda bisa menggunakan jasa pembuatan website
                                        dari kami dimana Anda cukup menyiapkan kontennya saja.</p>
                                </div>
                            </div>
                        </template>

                        {{-- Tab 2 Content --}}
                        <template x-if="activeTab === 2">
                            <div class="animate-fadeIn w-full">
                                <div class="relative w-full aspect-video mb-12 flex items-center justify-center">
                                    <div class="absolute inset-0 bg-emerald-200/20 blur-3xl rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 450"
                                        class="w-full max-w-md h-auto drop-shadow-2xl">
                                        <rect x="150" y="50" width="500" height="350" rx="20" fill="white"
                                            stroke="#e2e8f0" stroke-width="2" />
                                        <circle cx="400" cy="180" r="60" fill="#10b981" opacity="0.2" />
                                        <path d="M370 180 L430 180 M400 150 L400 210" stroke="#10b981" stroke-width="8"
                                            stroke-linecap="round" />
                                        <rect x="250" y="280" width="300" height="20" rx="10" fill="#f1f5f9" />
                                        <rect x="300" y="310" width="200" height="20" rx="10" fill="#f1f5f9" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-3xl font-black text-slate-800 mb-6 text-center">Membuat
                                    Toko Online</h3>
                                <div class="space-y-4 text-slate-600 leading-relaxed text-center max-w-2xl mx-auto">
                                    <p>Bangun toko online impian Anda dengan fitur katalog produk, keranjang belanja,
                                        dan sistem pembayaran otomatis. Kami menyediakan modul e-commerce yang siap
                                        pakai dan dioptimalkan untuk kecepatan akses.</p>
                                    <p>DutaHosting mendukung platform populer seperti <span
                                            class="font-bold">WooCommerce, PrestaShop, dan Magento</span> dengan
                                        instalasi satu klik yang sangat memudahkan pemula.</p>
                                </div>
                            </div>
                        </template>

                        {{-- Tab 3 Content --}}
                        <template x-if="activeTab === 3">
                            <div class="animate-fadeIn w-full">
                                <div class="relative w-full aspect-video mb-12 flex items-center justify-center">
                                    <div class="absolute inset-0 bg-indigo-200/20 blur-3xl rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 450"
                                        class="w-full max-w-md h-auto drop-shadow-2xl">
                                        <rect x="200" y="80" width="400" height="280" rx="15" fill="white"
                                            stroke="#e2e8f0" stroke-width="2" />
                                        <path d="M200 120 L400 240 L600 120" fill="none" stroke="#6366f1"
                                            stroke-width="4" stroke-linejoin="round" />
                                        <rect x="280" y="280" width="240" height="15" rx="7" fill="#f1f5f9" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-3xl font-black text-slate-800 mb-6 text-center">Membuat
                                    Email Bisnis</h3>
                                <div class="space-y-4 text-slate-600 leading-relaxed text-center max-w-2xl mx-auto">
                                    <p>Tingkatkan kredibilitas bisnis Anda dengan alamat email kustom
                                        (nama@perusahaan.com). Layanan email kami dilengkapi fitur <span
                                            class="font-bold text-indigo-500">anti-spam tingkat lanjut</span> dan
                                        enkripsi keamanan data.</p>
                                    <p>Akses email Anda di mana saja, kapan saja, melalui Webmail, Outlook, atau
                                        smartphone dengan dukungan IMAP/POP3 yang stabil.</p>
                                </div>
                            </div>
                        </template>

                        {{-- Tab 4 Content --}}
                        <template x-if="activeTab === 4">
                            <div class="animate-fadeIn w-full">
                                <div class="relative w-full aspect-video mb-12 flex items-center justify-center">
                                    <div class="absolute inset-0 bg-purple-200/20 blur-3xl rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 450"
                                        class="w-full max-w-md h-auto drop-shadow-2xl">
                                        <rect x="250" y="100" width="300" height="60" rx="10" fill="#a855f7"
                                            opacity="0.8" />
                                        <rect x="250" y="180" width="300" height="60" rx="10" fill="#a855f7"
                                            opacity="0.5" />
                                        <rect x="250" y="260" width="300" height="60" rx="10" fill="#a855f7"
                                            opacity="0.3" />
                                        <circle cx="280" cy="130" r="5" fill="white" />
                                        <circle cx="280" cy="210" r="5" fill="white" />
                                        <circle cx="280" cy="290" r="5" fill="white" />
                                    </svg>
                                </div>
                                <h3 class="font-heading text-3xl font-black text-slate-800 mb-6 text-center">Hosting
                                    Skala Besar</h3>
                                <div class="space-y-4 text-slate-600 leading-relaxed text-center max-w-2xl mx-auto">
                                    <p>Untuk trafik website yang sangat tinggi, kami menyediakan layanan <span
                                            class="font-bold">Cloud VPS dan Dedicated Server</span> dengan sumber daya
                                        khusus yang dapat ditingkatkan (scalable) sesuai kebutuhan bisnis Anda.</p>
                                    <p>Dilengkapi dengan <span class="font-bold">Uptime SLA 99.9%</span> dan dukungan
                                        teknis prioritas untuk memastikan operasi bisnis tetap berjalan lancar 24/7.</p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            {{-- FAQ Section --}}
            <section class="py-24 bg-white border-t border-slate-100">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <span class="section-label">Tanya Jawab</span>
                        <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
                        <p class="section-subtitle mx-auto">Ada pertanyaan? Temukan jawabannya di sini, atau hubungi tim
                            kami kapan saja.</p>
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
                            <div x-data="{ isOpen: false }"
                                class="bg-white rounded-2xl border border-slate-100 overflow-hidden transition-all duration-300 hover:border-accent group">
                                <button @click="isOpen = !isOpen"
                                    class="w-full px-8 py-5 flex items-center justify-between text-left hover:bg-slate-50 transition-colors">
                                    <span
                                        class="font-bold text-slate-900 group-hover:text-accent transition-colors">{{ $faq['q'] }}</span>
                                    <svg :class="isOpen ? 'rotate-180 text-accent' : ''"
                                        class="text-slate-400 transition-transform duration-300"
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>
                                <div class="transition-all duration-300 ease-in-out px-8 overflow-hidden"
                                    :class="isOpen ? 'max-h-40 pb-5' : 'max-h-0'">
                                    <p class="text-slate-600 text-sm leading-relaxed border-t border-slate-50 pt-5">
                                        {{ $faq['a'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <x-chat-ai />
    </div>
</x-app-layout>