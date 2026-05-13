@extends('layout.guest')

@section('title', 'Contact Us - My Restaurant')

@section('content')
<div class="py-12 max-w-6xl mx-auto">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
            GET IN <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">TOUCH</span>
        </h1>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto">Have a question or want to make a reservation? We're here to help you with anything you need.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        {{-- Contact Info Cards --}}
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-zinc-900/50 backdrop-blur-md border border-white/5 p-8 rounded-[32px] group hover:border-primary-500/30 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-primary-500/10 flex items-center justify-center text-2xl mb-6">📍</div>
                <h3 class="text-xl font-bold text-white mb-2">Visit Us</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">123 Food Street, Colombo,<br>Sri Lanka</p>
            </div>
            <div class="bg-zinc-900/50 backdrop-blur-md border border-white/5 p-8 rounded-[32px] group hover:border-primary-500/30 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-orange-500/10 flex items-center justify-center text-2xl mb-6">📞</div>
                <h3 class="text-xl font-bold text-white mb-2">Call Us</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">+94 11 234 5678<br>+94 77 123 4567</p>
            </div>
            <div class="bg-zinc-900/50 backdrop-blur-md border border-white/5 p-8 rounded-[32px] group hover:border-primary-500/30 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-yellow-500/10 flex items-center justify-center text-2xl mb-6">✉️</div>
                <h3 class="text-xl font-bold text-white mb-2">Email Us</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">info@myrestaurant.com<br>support@myrestaurant.com</p>
            </div>
        </div>

        {{-- Contact Form --}}
        <div class="lg:col-span-2">
            <div class="bg-zinc-900 border border-white/5 p-10 rounded-[40px] shadow-2xl">
                <form action="#" class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-widest text-zinc-500 ml-1">Your Name</label>
                            <input type="text" placeholder="John Doe" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary-500 transition-all">
                        </div>
                        <div class="space-y-3">
                            <label class="text-xs font-bold uppercase tracking-widest text-zinc-500 ml-1">Email Address</label>
                            <input type="email" placeholder="john@example.com" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary-500 transition-all">
                        </div>
                    </div>
                    <div class="space-y-3">
                        <label class="text-xs font-bold uppercase tracking-widest text-zinc-500 ml-1">Subject</label>
                        <select class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary-500 transition-all appearance-none">
                            <option class="bg-zinc-900">General Inquiry</option>
                            <option class="bg-zinc-900">Table Reservation</option>
                            <option class="bg-zinc-900">Private Event</option>
                            <option class="bg-zinc-900">Feedback</option>
                        </select>
                    </div>
                    <div class="space-y-3">
                        <label class="text-xs font-bold uppercase tracking-widest text-zinc-500 ml-1">Message</label>
                        <textarea rows="6" placeholder="How can we help you?" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary-500 transition-all"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary-500 hover:bg-primary-600 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-primary-500/20 transform hover:scale-[1.01]">
                        SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Map Placeholder --}}
    <div class="mt-24 h-[400px] bg-zinc-900/50 border border-white/5 rounded-[48px] overflow-hidden relative flex items-center justify-center">
        <div class="text-zinc-700 text-sm font-bold uppercase tracking-[0.3em]">Interactive Map Placeholder</div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
    </div>
</div>
@endsection
