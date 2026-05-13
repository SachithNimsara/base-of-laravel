@extends('layout.guest')

@section('title', 'Share Your Feedback')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tight">
            WE VALUE YOUR <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">FEEDBACK</span>
        </h1>
        <p class="text-zinc-400 text-lg">Help us improve your dining experience.</p>
    </div>

    <div class="bg-zinc-900/50 backdrop-blur-xl border border-white/5 rounded-3xl p-8 shadow-2xl">
        <form action="{{ route('feedback.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="name" class="text-sm font-semibold text-zinc-300 ml-1">Full Name</label>
                    <input type="text" name="name" id="name" required
                           class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-4 text-white focus:outline-none focus:border-primary-500 transition-all placeholder:text-zinc-600"
                           placeholder="John Doe">
                </div>
                <div class="space-y-2">
                    <label for="email" class="text-sm font-semibold text-zinc-300 ml-1">Email Address</label>
                    <input type="email" name="email" id="email" required
                           class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-4 text-white focus:outline-none focus:border-primary-500 transition-all placeholder:text-zinc-600"
                           placeholder="john@example.com">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-semibold text-zinc-300 ml-1">Your Rating</label>
                <div class="flex items-center gap-2 bg-white/5 border border-white/10 rounded-2xl p-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <label class="cursor-pointer group">
                            <input type="radio" name="rating" value="{{ $i }}" class="hidden peer" {{ $i == 5 ? 'checked' : '' }}>
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="h-8 w-8 text-zinc-600 peer-checked:text-yellow-400 group-hover:text-yellow-400/50 transition-colors" 
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                        </label>
                    @endfor
                </div>
            </div>

            <div class="space-y-2">
                <label for="message" class="text-sm font-semibold text-zinc-300 ml-1">Your Message</label>
                <textarea name="message" id="message" rows="5" required
                          class="w-full bg-white/5 border border-white/10 rounded-2xl px-5 py-4 text-white focus:outline-none focus:border-primary-500 transition-all placeholder:text-zinc-600"
                          placeholder="Tell us about your experience..."></textarea>
            </div>

            <button type="submit" 
                    class="w-full bg-gradient-to-r from-primary-500 to-orange-500 hover:from-primary-600 hover:to-orange-600 text-white font-bold py-5 rounded-2xl transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-lg shadow-primary-500/20">
                Submit Feedback
            </button>
        </form>
    </div>
</div>
@endsection
