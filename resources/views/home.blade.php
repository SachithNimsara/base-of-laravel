@extends('layout.guest')

@section('title', 'Welcome to Premium Dining')

@section('content')
<div class="relative -mt-8 overflow-hidden">
    {{-- Hero Section --}}
    <section class="relative py-20 lg:py-32">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-500/10 border border-primary-500/20 text-primary-500 text-sm font-bold tracking-widest uppercase mb-4 animate-fade-in">
                    <span>✨</span> The Ultimate Dining Experience
                </div>
                <h1 class="text-5xl md:text-8xl font-black text-white leading-tight tracking-tighter">
                    CRAFTING <span class="bg-gradient-to-r from-primary-500 via-orange-500 to-yellow-500 bg-clip-text text-transparent">MEMORIES</span><br>
                    ONE PLATE AT A TIME
                </h1>
                <p class="text-zinc-400 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                    Indulge in a symphony of flavors where traditional techniques meet modern culinary art. Experience the finest dining in the heart of the city.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 pt-8">
                    <a href="{{ route('menu') }}" class="w-full sm:w-auto px-10 py-5 bg-primary-500 hover:bg-primary-600 text-white font-black rounded-2xl transition-all transform hover:scale-105 shadow-xl shadow-primary-500/20">
                        EXPLORE OUR MENU
                    </a>
                    <a href="{{ route('feedback.index') }}" class="w-full sm:w-auto px-10 py-5 bg-white/5 hover:bg-white/10 text-white font-black rounded-2xl border border-white/10 transition-all">
                        READ REVIEWS
                    </a>
                </div>
            </div>
        </div>
        
        {{-- Decorative Elements --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[1000px] bg-primary-500/20 rounded-full blur-[120px] -z-10 opacity-30"></div>
    </section>

    {{-- Stats Section --}}
    <section class="py-16">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center space-y-2 p-8 rounded-3xl bg-zinc-900/30 border border-white/5">
                <div class="text-4xl font-black text-white">150+</div>
                <div class="text-zinc-500 text-xs font-bold uppercase tracking-widest">Premium Dishes</div>
            </div>
            <div class="text-center space-y-2 p-8 rounded-3xl bg-zinc-900/30 border border-white/5">
                <div class="text-4xl font-black text-white">12k+</div>
                <div class="text-zinc-500 text-xs font-bold uppercase tracking-widest">Happy Guests</div>
            </div>
            <div class="text-center space-y-2 p-8 rounded-3xl bg-zinc-900/30 border border-white/5">
                <div class="text-4xl font-black text-white">25+</div>
                <div class="text-zinc-500 text-xs font-bold uppercase tracking-widest">Master Chefs</div>
            </div>
            <div class="text-center space-y-2 p-8 rounded-3xl bg-zinc-900/30 border border-white/5">
                <div class="text-4xl font-black text-white">4.9/5</div>
                <div class="text-zinc-500 text-xs font-bold uppercase tracking-widest">Average Rating</div>
            </div>
        </div>
    </section>

    {{-- Newsletter CTA --}}
    <section class="py-24">
        <div class="bg-gradient-to-br from-zinc-900 to-black border border-white/5 rounded-[40px] p-12 relative overflow-hidden">
            <div class="relative z-10 max-w-2xl">
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6">Stay in the Loop</h2>
                <p class="text-zinc-400 text-lg mb-10 leading-relaxed">
                    Join our exclusive culinary club and get early access to new menus, secret recipes, and special events.
                </p>
                <form action="{{ route('register.customer') }}" method="POST" class="flex flex-col sm:flex-row gap-4">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required class="flex-grow bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary-500 transition-all">
                    <input type="email" name="email" placeholder="Your Email" required class="flex-grow bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary-500 transition-all">
                    <button type="submit" class="bg-white text-black font-black px-10 py-4 rounded-2xl hover:bg-zinc-200 transition-all">JOIN NOW</button>
                </form>
            </div>
            <div class="absolute right-0 bottom-0 opacity-10 pointer-events-none translate-x-1/4 translate-y-1/4">
                <span class="text-[300px]">🍕</span>
            </div>
        </div>
    </section>
</div>
@endsection
