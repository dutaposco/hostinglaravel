<header x-data="{ 
        scrolled: false, 
        menuOpen: false,
        userMenuOpen: false,
        activeMegaMenu: null
    }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 30)"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white shadow-sm py-1">
    <div class="container mx-auto px-6 flex items-center justify-between relative">
        <!-- Logo -->
        <a href="/" class="flex items-center group shrink-0" @click="menuOpen = false">
            <span class="font-heading text-2xl font-black tracking-tighter text-slate-900 transition-all duration-300 group-hover:tracking-tight">
                Duta<span class="text-accent italic">Hosting</span>
            </span>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-10 flex-1 justify-end mr-12 h-16">
            @php
                $menus = [
                    'domain' => 'Domain',
                    'hosting' => 'Hosting',
                    'website' => 'Website',
                    'layanan' => 'Semua Layanan'
                ];
            @endphp
            @foreach($menus as $key => $label)
                <div @click="activeMegaMenu = activeMegaMenu === '{{ $key }}' ? null : '{{ $key }}'"
                    class="h-full flex items-center gap-1.5 group cursor-pointer text-[13px] font-black uppercase tracking-wider transition-all duration-300 text-slate-800 hover:text-accent select-none">
                    <span :class="activeMegaMenu === '{{ $key }}' ? 'underline decoration-2 underline-offset-8' : ''">{{ $label }}</span>
                    <svg :class="activeMegaMenu === '{{ $key }}' ? 'rotate-180 text-accent' : ''" xmlns="http://www.w3.org/2000/svg"
                        width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300 opacity-70">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </div>
            @endforeach
        </nav>

        <!-- Desktop Actions -->
        <div class="hidden md:flex items-center gap-4 shrink-0">
            @auth
                <div class="relative" @mouseleave="userMenuOpen = false">
                    <button
                        class="flex items-center gap-3 bg-surface-2 border border-slate-100 px-4 py-2 rounded-xl hover:border-slate-200 transition-all shadow-sm"
                        @click="userMenuOpen = !userMenuOpen">
                        <div class="w-8 h-8 rounded-full bg-accent-dim flex items-center justify-center text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-slate-700">{{ Auth::user()->name }}</span>
                        <svg :class="userMenuOpen ? 'rotate-180' : ''"
                            class="text-slate-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                            width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div x-show="userMenuOpen" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        class="absolute top-full right-0 mt-2 w-48 bg-white border border-slate-100 rounded-xl shadow-lg p-1.5 overflow-hidden">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="flex items-center gap-3 w-full px-3 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-red-500 rounded-lg transition-all text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                    <polyline points="16 17 21 12 16 7" />
                                    <line x1="21" x2="9" y1="12" y2="12" />
                                </svg>
                                Keluar Dashboard
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="text-[12px] font-heading font-black uppercase tracking-[0.1em] px-8 py-2 rounded-xl transition-all duration-300 border-2 border-accent text-accent bg-transparent hover:bg-accent hover:text-white active:scale-95">
                    SIGN IN
                </a>
            @endauth
        </div>

        <!-- Hamburger -->
        <button
            class="md:hidden w-10 h-10 border border-orange-200 rounded-xl flex items-center justify-center text-slate-900"
            @click="menuOpen = !menuOpen">
            <template x-if="!menuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
            </template>
            <template x-if="menuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </template>
        </button>

        <!-- MEGA MENU DROP CONTAINER -->
        <div x-show="activeMegaMenu" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="absolute top-full left-0 w-full bg-white border-t border-slate-100 shadow-2xl rounded-b-3xl py-12 px-6"
            @mouseenter="activeMegaMenu = activeMegaMenu">
            <div class="container mx-auto">
                {{-- Domain Menu --}}
                <div x-show="activeMegaMenu === 'domain'" class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <div class="lg:col-span-4 pr-8 border-r border-slate-50">
                        <h2 class="text-3xl font-black text-slate-800 mb-6 uppercase tracking-tight">DOMAIN</h2>
                        <p class="text-slate-500 leading-relaxed">
                            Memiliki nama domain sangat penting sebagai digital branding, meningkatkan customer trust,
                            hingga mampu meningkatkan trafik bisnis.
                            Daftarkan nama dan ide bisnis terbaikmu sekarang!
                        </p>
                    </div>
                    <div class=" lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-8 pl-4">
                        <a href="/domains"
                            class="group flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                            <div
                                class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-500 shrink-0 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-slate-800 text-lg mb-1 group-hover:text-accent transition-colors">
                                    Beli Domain</h4>
                                <p class="text-sm text-slate-500 leading-snug">Bawa bisnis Anda #NaikLevel
                                    dengan
                                    mendaftarkan domain sebagai branding online bisnis Anda</p>
                            </div>
                        </a>
                        <a href="#"
                            class="group flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                            <div
                                class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center text-orange-600 shrink-0 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1.5.5 1.5 1.5L5 15c0 1.5.5 2.5 2 3 1 .5 2 3 2 3s-1.5 0-6 0z" />
                                    <path
                                        d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.5c0 1.5-.5 2.5-2 3-1 .5-2 3-2 3s1.5 0 6 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-slate-800 text-lg mb-1 group-hover:text-accent transition-colors">
                                    Reseller Domain</h4>
                                <p class="text-sm text-slate-500 leading-snug">Bergabung menjadi reseller domain
                                    dan
                                    dapatkan penghasilan hingga tak terbatas!</p>
                            </div>
                        </a>
                        <a href="#"
                            class="group flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                            <div
                                class="w-14 h-14 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-500 shrink-0 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M16 3h5v5" />
                                    <path d="M8 3H3v5" />
                                    <path d="M12 22v-8.3a4 4 0 0 0-1.172-2.828L3 3" />
                                    <path d="M13.172 10.828L21 3" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-slate-800 text-lg mb-1 group-hover:text-accent transition-colors">
                                    Transfer Domain</h4>
                                <p class="text-sm text-slate-500 leading-snug">Transfer domain Anda ke
                                    DutaHosting.
                                    Mudah dan cepat dengan fitur pengelolaan domain terlengkap.</p>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Hosting Menu --}}
                <div x-show="activeMegaMenu === 'hosting'" class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <div class="lg:col-span-3 pr-8 border-r border-slate-50">
                        <h2 class="text-3xl font-black text-slate-800 mb-6 uppercase tracking-tight">HOSTING</h2>
                        <p class="text-slate-500 leading-relaxed text-sm">
                            Layanan web hosting dengan teknologi cloud computing yang lebih handal. Tersedia pilihan
                            lokasi server di Indonesia.
                        </p>
                    </div>
                    <div class="lg:col-span-9 grid grid-cols-1 md:grid-cols-3 gap-x-8 gap-y-6">
                        @php
                            $hostingItems = [
                                ['Shared Hosting', 'Mulai harga Rp 15 ribu/bulan', 'bg-orange-50', 'text-orange-500'],
                                ['Cloud Hosting', 'Dedicated & isolated resource.', 'bg-orange-100', 'text-orange-600', 'Baru!'],
                                ['Hosting for WordPress', 'Performa khusus WordPress.', 'bg-emerald-50', 'text-emerald-500'],
                                ['Dedicated Server', 'Server fisik sesuai kebutuhan.', 'bg-indigo-50', 'text-indigo-500', 'Baru!'],
                                ['VPS / Cloud Server', 'Powerful berbasis KVM.', 'bg-purple-50', 'text-purple-500', 'Baru!'],
                                ['Unlimited Hosting', 'Hosting bebas tanpa batas.', 'bg-amber-50', 'text-amber-500'],
                                ['VPS Alibaba Cloud', 'Langsung dari Alibaba Cloud ID.', 'bg-orange-50', 'text-orange-500'],
                            ];
                        @endphp
                        @foreach($hostingItems as $item)
                            <a href="#"
                                class="group flex flex-col p-4 rounded-xl hover:bg-slate-50 transition-all border border-transparent hover:border-slate-100">
                                <div class="flex items-center gap-3 mb-2">
                                    <div
                                        class="w-8 h-8 rounded-lg {{ $item[2] }} flex items-center justify-center {{ $item[3] }} shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2" />
                                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2" />
                                            <line x1="6" y1="6" x2="6.01" y2="6" />
                                            <line x1="6" y1="18" x2="6.01" y2="18" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-slate-800 text-sm group-hover:text-accent transition-colors">
                                        {{ $item[0] }} @if(isset($item[4])) <span
                                            class="text-[10px] text-green italic ml-1 font-medium">{{ $item[4] }}</span>
                                        @endif
                                    </h4>
                                </div>
                                <p class="text-[11px] text-slate-500 leading-snug pl-11">{{ $item[1] }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Website Menu --}}
                <div x-show="activeMegaMenu === 'website'" class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <div class="lg:col-span-4 pr-8 border-r border-slate-50">
                        <h2 class="text-3xl font-black text-slate-800 mb-6 uppercase tracking-tight">WEBSITE</h2>
                        <p class="text-slate-500 leading-relaxed text-sm">
                            Website memegang peranan vital pada bisnis di era global ini. Banyak pelanggan yang mencari
                            produk, layanan, dan informasi mengenai bidang bisnis Anda di internet.
                        </p>
                    </div>
                    <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-8 pl-4">
                        <a href="#" class="group flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <div
                                class="w-14 h-14 rounded-2xl bg-orange-50 flex items-center justify-center text-orange-400 shrink-0 group-hover:rotate-6 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                    <line x1="3" y1="9" x2="21" y2="9" />
                                    <line x1="9" y1="21" x2="9" y2="9" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-slate-800 text-lg mb-1 group-hover:text-accent transition-colors">
                                    Website Builder <span class="text-green italic text-sm font-medium">Free!</span>
                                </h4>
                                <p class="text-sm text-slate-500 leading-snug">Cara mudah membuat website sendiri dengan
                                    Website Builder</p>
                            </div>
                        </a>
                        <a href="#" class="group flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <div
                                class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center text-orange-600 shrink-0 group-hover:rotate-6 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2a10 10 0 1 0 10 10H12V2z" />
                                    <path d="M12 12L2.5 12" />
                                    <path d="M12 12l9.5 0" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-slate-800 text-lg mb-1 group-hover:text-accent transition-colors">
                                    AI Website Builder <span class="text-accent italic text-sm font-medium">BARU!</span>
                                </h4>
                                <p class="text-sm text-slate-500 leading-snug">Membuat website hanya berdasarkan cerita
                                    singkat tentang ide dan bisnis Anda.</p>
                            </div>
                        </a>
                        <a href="#" class="group flex gap-5 p-4 rounded-2xl hover:bg-slate-50 transition-all">
                            <div
                                class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-500 shrink-0 group-hover:rotate-6 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a2 2 0 0 1 2.83 0l.3.3a2 2 0 0 1 0 2.83l-3.77 3.77a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a2 2 0 0 1 2.83 2.83l-3.77 3.77a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a2 2 0 0 1 2.83 2.83z" />
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="font-bold text-slate-800 text-lg mb-1 group-hover:text-accent transition-colors">
                                    Jasa Pembuatan Web</h4>
                                <p class="text-sm text-slate-500 leading-snug">Serahkan materi Anda pada kami. Website
                                    Anda online dalam 48 jam!</p>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- All Services Menu --}}
                <div x-show="activeMegaMenu === 'layanan'" class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                    <div>
                        <h4 class="text-orange-500 font-bold mb-4 flex items-center gap-2 border-b border-slate-50 pb-2">
                            Hosting</h4>
                        <ul class="space-y-2">
                            @foreach(['Shared Hosting', 'Dedicated Server', 'Hosting for WordPress', 'VPS Murah', 'Unlimited Hosting', 'Cloud Hosting'] as $li)
                                <li><a href="#"
                                        class="text-sm text-slate-600 hover:text-accent transition-colors flex items-center gap-2 group"><span
                                            class="text-slate-300 group-hover:text-accent">»</span> {{ $li }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-orange-500 font-bold mb-4 flex items-center gap-2 border-b border-slate-50 pb-2">
                            Domain</h4>
                        <ul class="space-y-2">
                            @foreach(['Beli Domain', 'Transfer Domain', 'Reseller Domain'] as $li)
                                <li><a href="#"
                                        class="text-sm text-slate-600 hover:text-accent transition-colors flex items-center gap-2 group"><span
                                            class="text-slate-300 group-hover:text-accent">»</span> {{ $li }}</a></li>
                            @endforeach
                        </ul>
                        <h4
                            class="text-orange-500 font-bold mt-8 mb-4 flex items-center gap-2 border-b border-slate-50 pb-2">
                            Website</h4>
                        <ul class="space-y-2">
                            @foreach(['AI Website Builder', 'Website Builder Free', 'Jasa Pembuatan Web'] as $li)
                                <li><a href="#"
                                        class="text-sm text-slate-600 hover:text-accent transition-colors flex items-center gap-2 group"><span
                                            class="text-slate-300 group-hover:text-accent">»</span> {{ $li }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-orange-500 font-bold mb-4 flex items-center gap-2 border-b border-slate-50 pb-2">
                            Email & Kolaborasi</h4>
                        <ul class="space-y-2">
                            @foreach(['Google Workspace', 'Titan Mail', 'OX Mail', 'Microsoft 365'] as $li)
                                <li><a href="#"
                                        class="text-sm text-slate-600 hover:text-accent transition-colors flex items-center gap-2 group"><span
                                            class="text-slate-300 group-hover:text-accent">»</span> {{ $li }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-orange-500 font-bold mb-4 flex items-center gap-2 border-b border-slate-50 pb-2">
                            Keamanan</h4>
                        <ul class="space-y-2">
                            @foreach(['Sertifikat SSL', 'Sitelock', 'CodeGuard Backup'] as $li)
                                <li><a href="#"
                                        class="text-sm text-slate-600 hover:text-accent transition-colors flex items-center gap-2 group"><span
                                            class="text-slate-300 group-hover:text-accent">»</span> {{ $li }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="menuOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        class="fixed inset-0 top-[70px] bg-white z-40 p-8 flex flex-col gap-12 md:hidden overflow-y-auto">
        <nav class="flex flex-col gap-4">
            @foreach(['Domain', 'Hosting', 'Website', 'Semua Layanan'] as $item)
                <a href="#"
                    class="text-xl font-heading font-bold py-3 border-b border-slate-50 flex justify-between items-center text-slate-700">
                    {{ $item }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            @endforeach
        </nav>
        <div class="mt-auto flex flex-col gap-4 pb-8 text-center">
            <a href="{{ route('login') }}"
                class="py-4 text-slate-700 font-bold border-2 border-slate-100 rounded-2xl">Sign In</a>
            <a href="/pricing" class="py-4 btn-primary rounded-2xl font-bold">Mulai Sekarang</a>
        </div>
    </div>
</header>