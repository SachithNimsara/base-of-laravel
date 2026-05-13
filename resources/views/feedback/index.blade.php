@extends('layout.guest')

@section('title', 'What Our Customers Say')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
    <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-8">
        <div class="text-left">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-4 tracking-tight leading-tight">
                CUSTOMER <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">STORIES</span>
            </h1>
            <p class="text-zinc-400 text-lg max-w-xl">Hear what our beloved guests have to say about their dining experience with us.</p>
        </div>
        <a href="{{ route('feedback.create') }}" 
           class="group relative inline-flex items-center gap-3 bg-white/5 border border-white/10 px-8 py-4 rounded-2xl text-white font-bold hover:bg-white/10 transition-all duration-300">
            <span>Share Your Experience</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>

    @if($feedbacks->isEmpty())
        <div class="text-center py-24 bg-zinc-900/30 border border-dashed border-white/10 rounded-3xl">
            <div class="text-6xl mb-6">💬</div>
            <h3 class="text-xl font-bold text-white mb-2">No feedback yet</h3>
            <p class="text-zinc-500">Be the first to share your experience!</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($feedbacks as $feedback)
                <div class="bg-zinc-900/50 backdrop-blur-xl border border-white/5 rounded-3xl p-8 flex flex-col h-full hover:border-primary-500/30 transition-colors group">
                    <div class="flex items-center gap-1 mb-6">
                        @for($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                 class="h-5 w-5 {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-zinc-700' }}" 
                                 fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                        @endfor
                    </div>
                    
                    <p class="text-zinc-300 leading-relaxed mb-8 italic flex-grow">
                        "{{ $feedback->message }}"
                    </p>
                    
                    <div class="flex items-center gap-4 pt-6 border-t border-white/5">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary-500 to-orange-500 flex items-center justify-center text-white font-bold text-xl uppercase">
                            {{ substr($feedback->name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="text-white font-bold">{{ $feedback->name }}</h4>
                            <p class="text-zinc-500 text-xs uppercase tracking-widest">{{ $feedback->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
