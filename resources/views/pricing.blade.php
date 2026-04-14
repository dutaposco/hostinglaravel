<x-app-layout>
    @section('title', 'DutaHosting - Harga & Paket Hosting Cloud')

    <div class="page pb-20 pt-32 relative font-sans" x-data="{ billing: 'yearly' }">
        <div class="absolute top-0 inset-x-0 h-[500px] bg-gradient-to-b from-accent/5 to-transparent pointer-events-none"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16 animate-fadeInUp">
                <span class="section-label mb-4">
                    <svg class="mr-1 inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                    Deployment Fleksibel
                </span>
                <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-black mb-6 tracking-tight text-slate-900">
                    Harga transparan untuk semua.
                </h1>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto mb-10">
                    Tidak ada biaya tersembunyi, tidak ada kontrak rumit. Pilih paket yang paling sesuai dengan kebutuhan proyek Anda.
                </p>

                {{-- Billing Toggle --}}
                <div class="inline-flex items-center gap-4 bg-white p-1.5 rounded-full border border-slate-200 shadow-inner">
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

            {{-- Pricing Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto relative mb-32">
                {{-- Same cards as home but with more detail or slightly different styling if needed --}}
                @foreach([
                    ['name' => 'Cloud Pemula', 'id' => 'shared', 'monthly' => '15.900', 'yearly' => '9.900', 'desc' => 'Sempurna untuk situs pribadi dan blog.', 'highlight' => false],
                    ['name' => 'Cloud Premium', 'id' => 'vps', 'monthly' => '39.900', 'yearly' => '24.900', 'desc' => 'Kinerja tinggi untuk bisnis.', 'highlight' => true, 'badge' => 'Paling Populer'],
                    ['name' => 'Cloud Enterprise', 'id' => 'dedicated', 'monthly' => '149.000', 'yearly' => '99.000', 'desc' => 'Sumber daya khusus untuk lalu lintas besar.', 'highlight' => false]
                ] as $p)
                    <div class="card p-8 lg:p-10 flex flex-col animate-fadeInUp bg-white {{ $p['highlight'] ? 'border-accent border-2 shadow-lg scale-[1.02] md:-translate-y-2 relative' : 'border-slate-200 mt-4 hover:border-slate-300' }}">
                        @if(isset($p['badge']))
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white px-5 py-1.5 rounded-full text-xs font-bold tracking-wider uppercase shadow-md z-20">{{ $p['badge'] }}</div>
                        @endif
                        <div class="mb-6">
                            <h3 class="font-heading text-2xl font-bold text-slate-900 mb-2">{{ $p['name'] }}</h3>
                            <p class="text-slate-600 text-sm min-h-[40px]">{{ $p['desc'] }}</p>
                        </div>
                        <div class="mb-8">
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl font-bold text-slate-400">Rp</span>
                                <span class="text-5xl font-black font-heading text-slate-900 tracking-tight" x-text="billing === 'yearly' ? '{{ $p['yearly'] }}' : '{{ $p['monthly'] }}'"></span>
                                <span class="text-slate-400 font-medium">/bln</span>
                            </div>
                            <p x-show="billing === 'yearly'" class="text-green text-sm font-semibold mt-2 border border-green/20 bg-green/10 inline-block px-2 py-0.5 rounded">Ditagih secara tahunan</p>
                        </div>
                        <ul class="flex flex-col gap-4 mb-10 flex-grow">
                            @php
                                $features = $p['id'] == 'shared' ? ['1 Website', '10 GB NVMe', 'SSL Gratis', 'Unlimited Bandwidth'] : ($p['id'] == 'vps' ? ['Unlimted Web', '50 GB NVMe', 'Free Domain', 'Dukungan 24/7'] : ['Dedicated Core', '200 GB NVMe', 'DDoS Protection', 'Object Caching']);
                            @endphp
                            @foreach($features as $f)
                                <li class="flex items-center gap-3 text-sm font-medium text-slate-600">
                                    <svg class="text-accent flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    <span>{{ $f }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <button class="{{ $p['highlight'] ? 'btn btn-primary' : 'bg-white text-accent border-2 border-accent hover:bg-accent hover:text-white' }} w-full py-4 rounded-full font-heading font-bold text-sm transition-all">
                            Mulai Sekarang
                        </button>
                    </div>
                @endforeach
            </div>

            {{-- Detailed FAQs --}}
            <div class="max-w-3xl mx-auto border-t border-slate-100 pt-20 animate-fadeInUp">
                <h3 class="font-heading text-3xl font-black text-center mb-10 text-slate-900">Pertanyaan Umum</h3>
                <div class="grid gap-6">
                    <div class="card p-6 border-slate-100 bg-white">
                        <h4 class="font-bold text-lg mb-2 text-slate-900">Bisakah saya meningkatkan kapasitas paket saya nanti?</h4>
                        <p class="text-slate-600 text-sm">Tentu saja. Infrastruktur cloud kami memungkinkan Anda meningkatkan kapasitas dengan mudah tanpa downtime.</p>
                    </div>
                    <div class="card p-6 border-slate-100 bg-white">
                        <h4 class="font-bold text-lg mb-2 text-slate-900">Di mana lokasi server Anda?</h4>
                        <p class="text-slate-600 text-sm">Pusat data kami berlokasi di Jakarta, Singapura, Tokyo, dan Los Angeles.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
