<div x-data="{ 
    open: false, 
    isTyping: false, 
    messages: [
        { role: 'bot', text: 'Hi! I\'m DutaHosting Virtual Assistant. How can I help you today?' }
    ],
    quickQuestions: [
        { q: 'What services do you offer?', a: 'Kami menawarkan Web Hosting, Cloud VPS, hingga pendaftaran Domain dengan performa tinggi.' },
        { q: 'What is DutaHosting?', a: 'DutaHosting adalah penyedia layanan Web Hosting dan Cloud VPS terbaik di Indonesia dengan uptime 99.9%.' },
        { q: 'Why choose DutaHosting?', a: 'Karena kami memberikan garansi kecepatan, keamanan tingkat tinggi, dan support 24/7 untuk Anda.' },
        { q: 'How to contact support?', a: 'Anda dapat menghubungi kami via WhatsApp yang tersedia atau mengirim tiket bantuan melalui dashboard.' }
    ],
    askQuestion(question, answer) {
        if(this.isTyping) return;
        this.messages.push({ role: 'user', text: question });
        this.isTyping = true;
        
        // Scroll to bottom
        this.$nextTick(() => {
            const container = this.$refs.msgContainer;
            if (container) container.scrollTop = container.scrollHeight;
        });

        setTimeout(() => {
            this.isTyping = false;
            this.messages.push({ role: 'bot', text: answer });
            this.$nextTick(() => {
                const container = this.$refs.msgContainer;
                if (container) container.scrollTop = container.scrollHeight;
            });
        }, 1500);
    }
}" class="fixed bottom-6 right-6 z-[9999]" style="font-family: 'Inter', sans-serif;">
    <!-- Chat Button -->
    <button @click="open = !open" 
        class="bg-blue-600 text-white w-14 h-14 rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform active:scale-95 group relative z-50">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 8V4H8"/><rect width="16" height="12" x="4" y="8" rx="2"/><path d="M2 14h2"/><path d="M20 14h2"/><path d="M15 13v2"/><path d="M9 13v2"/>
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <span x-show="!open" class="absolute 0 top-0 right-0 flex h-4 w-4">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-4 w-4 bg-green-500 border-2 border-white"></span>
        </span>
    </button>

    <!-- Chat Window -->
    <div x-show="open" style="display: none;"
        x-transition:enter="transition ease-out duration-300 transform origin-bottom-right"
        x-transition:enter-start="opacity-0 translate-y-10 scale-90"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200 transform origin-bottom-right"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-10 scale-90"
        class="absolute bottom-20 right-0 w-[400px] bg-white rounded-xl shadow-2xl overflow-hidden border border-slate-100 flex flex-col max-h-[700px] z-40">
        
        <!-- Header -->
        <div class="bg-blue-600 p-5 text-white shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 8V4H8"/><rect width="16" height="12" x="4" y="8" rx="2"/><path d="M2 14h2"/><path d="M20 14h2"/><path d="M15 13v2"/><path d="M9 13v2"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-black text-lg tracking-tight leading-tight mb-1">DutaHosting AI</h3>
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 bg-[#10b981] rounded-full"></span>
                        <span class="text-xs text-blue-100 font-medium">Online</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages Area -->
        <div x-ref="msgContainer" class="flex-1 overflow-y-auto p-5 bg-[#F9FAFB] space-y-4 min-h-[160px] border-b border-slate-100">
            <template x-for="msg in messages" :key="msg.role + msg.text">
                <div :class="msg.role === 'bot' ? 'flex justify-start' : 'flex justify-end'">
                    <div :class="msg.role === 'bot' ? 'bg-white text-slate-700 rounded-3xl shadow-sm border border-slate-100' : 'bg-blue-600 text-white rounded-3xl shadow-sm'"
                        class="max-w-[85%] px-5 py-4 text-[15px] font-medium leading-relaxed">
                        <span x-text="msg.text"></span>
                    </div>
                </div>
            </template>
            
            <!-- Typing Indicator -->
            <div x-show="isTyping" class="flex justify-start">
                <div class="bg-white px-5 py-4 rounded-3xl shadow-sm border border-slate-100 flex gap-1.5 items-center object-center">
                    <span class="w-2 h-2 bg-slate-300 rounded-full animate-bounce"></span>
                    <span class="w-2 h-2 bg-slate-300 rounded-full animate-bounce [animation-delay:-0.15s]"></span>
                    <span class="w-2 h-2 bg-slate-300 rounded-full animate-bounce [animation-delay:-0.3s]"></span>
                </div>
            </div>
        </div>

        <!-- Quick Questions Area -->
        <div class="px-5 py-5 bg-white shrink-0">
            <p class="text-[12px] font-black tracking-widest text-[#94A3B8] uppercase mb-4">QUICK QUESTIONS</p>
            <div class="grid grid-cols-2 gap-2.5">
                <template x-for="(item, index) in quickQuestions" :key="index">
                    <button @click="askQuestion(item.q, item.a)" 
                        class="px-3 py-2 bg-[#F8FAFC] hover:bg-[#F1F5F9] text-[#475569] text-[13px] rounded-2xl border border-[#E2E8F0] transition-all active:scale-95 leading-tight text-center flex items-center justify-center min-h-[50px]">
                        <span x-text="item.q"></span>
                    </button>
                </template>
            </div>
        </div>

        <!-- Bottom Action Area -->
        <div class="px-5 pb-5 bg-white shrink-0 flex flex-col items-center">
            <a href="https://wa.me/6281234567890" target="_blank"
                class="flex items-center justify-center gap-2 w-full py-3.5 bg-[#22c55e] hover:bg-[#16a34a] text-white rounded-xl font-bold text-[15px] transition-all active:scale-95 mb-4 shadow-sm relative overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Contact via WhatsApp
            </a>
            <p class="text-[11px] text-[#94A3B8] font-bold tracking-[0.15em] uppercase">POWERED BY DUTAHOSTING AI</p>
        </div>
    </div>
</div>
