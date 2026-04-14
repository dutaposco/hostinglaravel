<header 
    x-data="{ 
        scrolled: false, 
        menuOpen: false,
        userMenuOpen: false
    }" 
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 30)"
    :class="scrolled ? 'bg-white shadow-sm py-3' : 'bg-transparent py-5'"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500"
>
    <div class="container mx-auto px-6 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 group" @click="menuOpen = false">
            <div class="w-10 h-10 bg-accent text-white rounded-xl flex items-center justify-center shadow-card transition-all duration-500 group-hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19a3.5 3.5 0 0 0 0-7h-1.5c0-2.28-1.74-4.5-4.47-4.5A4.5 4.5 0 0 0 7 12h-.5a3.5 3.5 0 0 0 0 7z"/></svg>
            </div>
            <span class="font-heading text-2xl font-black tracking-tight text-slate-900 group-hover:text-accent transition-colors">Duta<span class="font-medium text-accent">Hosting</span></span>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8 flex-1 justify-center">
            <a href="/" class="text-sm font-semibold transition-all duration-300 hover:text-accent {{ request()->is('/') ? 'text-accent' : 'text-slate-700' }}">Beranda</a>
            <a href="/domains" class="text-sm font-semibold transition-all duration-300 hover:text-accent {{ request()->is('domains') ? 'text-accent' : 'text-slate-700' }}">Domain</a>
            <a href="/pricing" class="text-sm font-semibold transition-all duration-300 hover:text-accent {{ request()->is('pricing') ? 'text-accent' : 'text-slate-700' }}">Harga</a>
        </nav>

        <!-- Desktop Actions -->
        <div class="hidden md:flex items-center gap-4">
            @auth
                <div class="relative" @mouseleave="userMenuOpen = false">
                    <button 
                        class="flex items-center gap-3 bg-surface-2 border border-slate-100 px-4 py-2 rounded-xl hover:border-slate-200 transition-all"
                        @click="userMenuOpen = !userMenuOpen"
                    >
                        <div class="w-8 h-8 rounded-full bg-accent-dim flex items-center justify-center text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                        <span class="bg-green/10 text-green text-[10px] font-black px-1.5 py-0.5 rounded uppercase tracking-wider border border-green/20">LIVE</span>
                        <svg :class="userMenuOpen ? 'rotate-180' : ''" class="text-slate-400 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>
                    
                    <div 
                        x-show="userMenuOpen" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        class="absolute top-full right-0 mt-2 w-48 bg-white border border-slate-100 rounded-xl shadow-lg p-1.5 overflow-hidden"
                    >
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="flex items-center gap-3 w-full px-3 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-red-500 rounded-lg transition-all text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                                Keluar Dashboard
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-sm font-bold text-slate-700 hover:text-accent px-4 py-2 transition-all">Masuk</a>
                <a href="/pricing" class="flex items-center gap-2 btn-primary px-5 py-2 rounded-full font-heading font-bold text-sm hover:-translate-y-0.5 transition-all">
                    Mulai Sekarang
                </a>
            @endauth
        </div>

        <!-- Hamburger -->
        <button
            class="md:hidden w-10 h-10 border border-blue-200 rounded-xl flex items-center justify-center text-slate-900"
            @click="menuOpen = !menuOpen"
            aria-label="Toggle menu"
        >
            <template x-if="!menuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </template>
            <template x-if="menuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </template>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div 
        x-show="menuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-10"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="fixed inset-0 top-[70px] bg-white z-40 p-8 flex flex-col gap-12 md:hidden"
    >
        <nav class="flex flex-col gap-6">
            <a href="/" @click="menuOpen = false" class="text-2xl font-heading font-bold py-2 {{ request()->is('/') ? 'text-accent' : 'text-slate-700' }}">Ringkasan</a>
            <a href="/domains" @click="menuOpen = false" class="text-2xl font-heading font-bold py-2 {{ request()->is('domains') ? 'text-accent' : 'text-slate-700' }}">Domain</a>
            <a href="/pricing" @click="menuOpen = false" class="text-2xl font-heading font-bold py-2 {{ request()->is('pricing') ? 'text-accent' : 'text-slate-700' }}">Harga</a>
        </nav>
        <div class="mt-auto flex flex-col gap-4 pb-8">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-3 py-4 border border-slate-100 rounded-2xl text-slate-600 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg> Keluar
                    </button>
                </form>
            @else
                <a href="/pricing" @click="menuOpen = false" class="w-full flex items-center justify-center gap-3 py-4 btn-primary rounded-full font-heading font-bold text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m13 2-2 10h8l-11 10 2-10H3Z"/></svg> Mulai Layanan
                </a>
            @endauth
        </div>
    </div>
</header>
