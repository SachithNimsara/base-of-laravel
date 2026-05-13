@extends('layout.guest')

@section('title', 'Our Story - My Restaurant')

@section('content')
<div class="py-12 space-y-32">
    {{-- Story Section --}}
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="space-y-8">
            <div class="inline-block px-4 py-1 rounded-full bg-primary-500/10 border border-primary-500/20 text-primary-500 text-xs font-bold uppercase tracking-widest">
                Established 2020
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight tracking-tighter">
                A TRADITION OF <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">EXCELLENCE</span>
            </h1>
            <div class="space-y-6 text-zinc-400 text-lg leading-relaxed">
                <p>
                    Started as a small family-run bistro, My Restaurant has grown into a culinary landmark known for its innovation and commitment to quality. Our journey began with a simple mission: to serve honest food that brings people together.
                </p>
                <p>
                    Every dish we serve tells a story of heritage, passion, and meticulous attention to detail. We source our ingredients from local farmers and artisans, ensuring that every bite is as fresh as it is flavorful.
                </p>
            </div>
            <div class="flex gap-8 pt-4">
                <div>
                    <div class="text-3xl font-black text-white mb-1">12</div>
                    <div class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Awards Won</div>
                </div>
                <div class="w-px h-12 bg-white/10"></div>
                <div>
                    <div class="text-3xl font-black text-white mb-1">100%</div>
                    <div class="text-xs uppercase tracking-widest text-zinc-500 font-bold">Organic Sourced</div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="aspect-[4/5] rounded-[48px] bg-gradient-to-br from-zinc-800 to-zinc-950 border border-white/10 overflow-hidden relative group">
                <div class="absolute inset-0 bg-primary-500/10 group-hover:bg-primary-500/0 transition-all duration-700"></div>
                <div class="absolute inset-0 flex items-center justify-center text-8xl grayscale opacity-20 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700">
                    👨‍🍳
                </div>
            </div>
            {{-- Floating Card --}}
            <div class="absolute -bottom-8 -left-8 bg-zinc-900 border border-white/10 p-8 rounded-3xl shadow-2xl backdrop-blur-xl max-w-xs">
                <p class="text-white font-bold text-lg mb-2">"Food is our common ground, a universal experience."</p>
                <p class="text-primary-500 font-bold text-sm">— Executive Chef</p>
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section>
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-4">OUR CORE VALUES</h2>
            <div class="w-24 h-1 bg-primary-500 mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-10 rounded-[40px] bg-zinc-900/50 border border-white/5 hover:bg-zinc-900 transition-all duration-500 group">
                <div class="w-16 h-16 rounded-2xl bg-primary-500/10 border border-primary-500/20 flex items-center justify-center text-3xl mb-8 group-hover:scale-110 transition-transform">🥬</div>
                <h3 class="text-2xl font-bold text-white mb-4">Quality First</h3>
                <p class="text-zinc-500 leading-relaxed">We never compromise on the quality of our ingredients, sourcing only the finest produce available.</p>
            </div>
            <div class="p-10 rounded-[40px] bg-zinc-900/50 border border-white/5 hover:bg-zinc-900 transition-all duration-500 group">
                <div class="w-16 h-16 rounded-2xl bg-orange-500/10 border border-orange-500/20 flex items-center justify-center text-3xl mb-8 group-hover:scale-110 transition-transform">🔥</div>
                <h3 class="text-2xl font-bold text-white mb-4">Authentic Heat</h3>
                <p class="text-zinc-500 leading-relaxed">Traditional cooking methods preserved and perfected over generations of culinary expertise.</p>
            </div>
            <div class="p-10 rounded-[40px] bg-zinc-900/50 border border-white/5 hover:bg-zinc-900 transition-all duration-500 group">
                <div class="w-16 h-16 rounded-2xl bg-yellow-500/10 border border-yellow-500/20 flex items-center justify-center text-3xl mb-8 group-hover:scale-110 transition-transform">🤝</div>
                <h3 class="text-2xl font-bold text-white mb-4">Guest Obsessed</h3>
                <p class="text-zinc-500 leading-relaxed">Your satisfaction is our primary goal. We strive to make every visit an unforgettable experience.</p>
            </div>
        </div>
    </section>
</div>
@endsection