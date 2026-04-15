<x-app-layout>
    @section('title', 'DutaHosting - Cek Domain Murah')

    <div class="page pb-20 pt-32 relative" x-data="{
        query: '{{ request()->query('domain', '') }}',
        isSearching: false,
        results: null,
        tlds: [
            { ext: '.com', price: 'Rp 149.000', popular: true },
            { ext: '.net', price: 'Rp 195.000', popular: false },
            { ext: '.io', price: 'Rp 599.000', popular: true },
            { ext: '.co', price: 'Rp 375.000', popular: false },
            { ext: '.tech', price: 'Rp 75.000', popular: false },
            { ext: '.app', price: 'Rp 225.000', popular: false },
        ],
        init() {
            if (this.query) {
                this.handleSearch({ preventDefault: () => {} });
            }
        },
        handleSearch(e) {
            if (e && e.preventDefault) e.preventDefault();
            if (!this.query) return;

            this.isSearching = true;
            this.results = null;

            setTimeout(() => {
                this.isSearching = false;
                const baseName = this.query.split('.')[0].toLowerCase();
                
                this.results = this.tlds.map(tld => ({
                    domain: baseName + tld.ext,
                    price: tld.price,
                    available: Math.random() > 0.3,
                    popular: tld.popular
                }));
            }, 1500);
        }
    }">
        <div class="container mx-auto px-6 relative z-10">

            {{-- Header Section --}}
            <div class="text-center mb-16 animate-fadeInUp">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-accent mx-auto mb-6 drop-shadow-lg">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                    <path d="M2 12h20" />
                </svg>
                <h1 class="font-heading text-4xl md:text-5xl font-black mb-6 tracking-tight">
                    Temukan alamat web yang sempurna.
                </h1>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-10">
                    Amankan identitas online Anda dengan registrasi domain cepat kami. Semua domain dilengkapi
                    perlindungan privasi WHOIS gratis.
                </p>

                <form @submit="handleSearch" class="max-w-3xl mx-auto relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-accent rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-500">
                    </div>
                    <div class="relative flex bg-surface-2 border border-white/10 rounded-xl p-2 shadow-card">
                        <div class="pl-4 flex items-center justify-center text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input type="text" x-model="query" placeholder="Cari nama domain impian Anda..."
                            class="w-full bg-transparent text-lg text-slate-900 px-4 py-4 focus:outline-none" />
                        <button type="submit"
                            class="bg-accent hover:bg-blue-400 text-white px-8 py-4 rounded-lg font-bold font-heading transition-colors whitespace-nowrap"
                            x-text="isSearching ? 'Mencari...' : 'Cari'">
                            Cari
                        </button>
                    </div>
                </form>

                {{-- Popular TLDs --}}
                <div class="flex flex-wrap justify-center gap-6 mt-8">
                    <template x-for="(tld, idx) in tlds.slice(0, 4)" :key="idx">
                        <div class="flex flex-col items-center">
                            <span class="font-heading font-black text-xl text-slate-900" x-text="tld.ext"></span>
                            <span class="text-sm font-medium text-accent" x-text="tld.price + '/thn'"></span>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Domain Pricing Section --}}
            <div class="max-w-4xl mx-auto mb-16 animate-fadeInUp">
                <h3 class="font-heading font-bold text-2xl text-slate-900 mb-6 text-center">Harga Domain</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <template x-for="(tld, idx) in tlds" :key="idx">
                        <div class="card p-4 border-slate-200 text-center hover:border-accent transition-colors">
                            <h4 class="font-heading font-bold text-lg text-slate-900" x-text="tld.ext"></h4>
                            <p class="text-accent font-black text-xl"><span x-text="tld.price"></span><span
                                    class="text-sm font-medium text-slate-500">/thn</span></p>
                            <p class="text-slate-500 text-xs mt-1">Tahun pertama</p>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Popular Domains Section --}}
            <div class="max-w-4xl mx-auto mb-16 animate-fadeInUp">
                <h3 class="font-heading font-bold text-2xl text-slate-900 mb-6 text-center">Saran Domain Populer</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $popularDomains = [
                            ['name' => 'nama.com', 'price' => 'Rp 149.000'],
                            ['name' => 'bisnisku.net', 'price' => 'Rp 195.000'],
                            ['name' => 'startup.io', 'price' => 'Rp 599.000'],
                            ['name' => 'tech.co', 'price' => 'Rp 375.000'],
                            ['name' => 'app.tech', 'price' => 'Rp 75.000'],
                            ['name' => 'digital.app', 'price' => 'Rp 225.000'],
                        ];
                    @endphp
                    @foreach($popularDomains as $domain)
                        <div class="card p-6 border-slate-200 hover:border-accent transition-colors">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-heading font-bold text-lg text-slate-900">{{ $domain['name'] }}</h4>
                                <span class="text-accent font-bold">{{ $domain['price'] }}/thn</span>
                            </div>
                            <p class="text-slate-500 text-sm mb-4">Tersedia sekarang! Amankan domain Anda hari ini.</p>
                            <button
                                class="w-full btn btn-outline border-slate-200 hover:border-accent hover:bg-accent hover:text-white">
                                Daftar Sekarang
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Results Section --}}
            <div x-show="isSearching" class="max-w-3xl mx-auto text-center py-20">
                <div class="w-12 h-12 border-4 border-surface border-t-accent rounded-full animate-spin mx-auto mb-4">
                </div>
                <p class="text-slate-500 font-medium">Memeriksa ketersediaan...</p>
            </div>

            <div x-show="results !== null && !isSearching" style="display: none;"
                class="max-w-3xl mx-auto animate-fadeInUp mt-8">
                <h3 class="font-heading font-bold text-2xl text-slate-900 mb-6">Hasil Pencarian</h3>
                <div class="bg-surface-2 border border-slate-200 rounded-2xl overflow-hidden shadow-card">
                    <template x-for="(result, idx) in results" :key="idx">
                        <div :class="idx === 0 ? 'bg-white' : ''"
                            class="p-6 flex flex-col md:flex-row items-center justify-between gap-4 border-b border-slate-200 last:border-0 hover:bg-white transition-colors">
                            <div class="flex items-center gap-4">
                                <template x-if="result.available">
                                    <div
                                        class="w-8 h-8 rounded-full bg-green/10 flex items-center justify-center text-green">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12" />
                                        </svg>
                                    </div>
                                </template>
                                <template x-if="!result.available">
                                    <div
                                        class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                        <span class="font-bold text-xs">X</span>
                                    </div>
                                </template>
                                <div>
                                    <div class="flex items-center gap-3">
                                        <p class="font-heading font-bold text-xl"
                                            :class="!result.available ? 'text-slate-400 line-through' : 'text-slate-900'"
                                            x-text="result.domain"></p>
                                        <template x-if="result.popular && result.available">
                                            <span
                                                class="bg-accent-dim text-accent text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-widest border border-accent/20">Populer</span>
                                        </template>
                                    </div>
                                    <p class="text-sm text-slate-500 mt-1"
                                        x-text="result.available ? 'Tersedia! Amankan sekarang.' : 'Sudah diambil. Coba ekstensi lain.'">
                                    </p>
                                </div>
                            </div>

                            <template x-if="result.available">
                                <div class="flex items-center gap-6">
                                    <p class="font-black text-xl text-slate-900"><span
                                            x-text="result.price"></span><span
                                            class="text-sm font-medium text-slate-500 font-body">/thn</span></p>
                                    <a href="/pricing"
                                        class="btn btn-outline border-slate-200 hover:border-accent hover:bg-accent-dim">
                                        Ke Keranjang
                                    </a>
                                </div>
                            </template>
                            <template x-if="!result.available">
                                <button disabled class="btn bg-slate-100 text-slate-400 cursor-not-allowed border-0">
                                    Tidak Tersedia
                                </button>
                            </template>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Info Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mt-32">
                <div class="card p-8 border-slate-200 flex items-start gap-4">
                    <div
                        class="w-12 h-12 bg-white shadow-sm rounded-xl flex items-center justify-center text-accent shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-slate-900 mb-2">Privasi WHOIS Gratis</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Kami melindungi informasi pribadi Anda dari
                            spammer dan penipu. Privasi WHOIS menjadi standar untuk setiap pendaftaran domain.</p>
                    </div>
                </div>
                <div class="card p-8 border-slate-200 flex items-start gap-4">
                    <div
                        class="w-12 h-12 bg-white shadow-sm rounded-xl flex items-center justify-center text-blue-400 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-lg text-slate-900 mb-2">Setup Instan</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">Tanpa menunggu. Domain Anda diaktifkan
                            seketika dan propagasi DNS dipercepat ke seluruh jaringan global kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>