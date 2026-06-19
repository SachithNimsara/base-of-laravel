@extends('layout.guest')

@section('title', 'View Feedback')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <div class="mb-8 flex items-center justify-between">
        <h1 class="text-3xl font-black text-white tracking-tight">Feedback <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">Details</span></h1>
        <a href="{{ route('admin.feedback.index') }}" class="text-zinc-400 hover:text-white flex items-center gap-2 transition-colors bg-white/5 hover:bg-white/10 px-4 py-2 rounded-xl border border-white/5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to List
        </a>
    </div>

    <div class="bg-zinc-900/50 backdrop-blur-xl border border-white/5 rounded-3xl p-8 shadow-2xl relative overflow-hidden">
        <div class="absolute top-0 right-0 p-8 opacity-10 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/>
            </svg>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 border-b border-white/5 pb-8 relative z-10">
            <div class="bg-black/20 p-5 rounded-2xl border border-white/5">
                <p class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Customer Name
                </p>
                <p class="text-white font-medium text-lg">{{ $feedback->name }}</p>
            </div>
            
            <div class="bg-black/20 p-5 rounded-2xl border border-white/5">
                <p class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email Address
                </p>
                <p class="text-white font-medium text-lg">{{ $feedback->email ?? 'Not provided' }}</p>
            </div>
            
            <div class="bg-black/20 p-5 rounded-2xl border border-white/5">
                <p class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    Rating Given
                </p>
                <div class="flex items-center gap-1 mt-1">
                    @for($i = 1; $i <= 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-zinc-700' }} drop-shadow-md" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                    @endfor
                </div>
            </div>
            
            <div class="bg-black/20 p-5 rounded-2xl border border-white/5">
                <p class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mb-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Date Submitted
                </p>
                <p class="text-white font-medium text-lg">{{ $feedback->created_at->format('M d, Y h:i A') }}</p>
            </div>
        </div>
        
        <div class="relative z-10">
            <p class="text-zinc-500 text-xs uppercase tracking-widest font-semibold mb-3 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                Feedback Message
            </p>
            <div class="bg-black/40 rounded-2xl p-6 text-zinc-300 leading-relaxed border border-white/5 text-lg italic relative">
                <span class="absolute top-4 left-4 text-4xl text-white/5 font-serif">"</span>
                <span class="relative z-10">{{ $feedback->message }}</span>
                <span class="absolute bottom-0 right-4 text-4xl text-white/5 font-serif rotate-180">"</span>
            </div>
        </div>
        
        <div class="mt-8 flex gap-4 pt-6 border-t border-white/5 relative z-10">
            <a href="{{ route('admin.feedback.edit', $feedback) }}" class="flex-1 text-center px-6 py-4 bg-white/5 hover:bg-white/10 text-white border border-white/10 rounded-xl font-bold transition-all shadow-lg">
                Edit Feedback
            </a>
            <form action="{{ route('admin.feedback.destroy', $feedback) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full px-6 py-4 bg-red-500/10 hover:bg-red-500/20 text-red-400 border border-red-500/20 rounded-xl font-bold transition-all shadow-lg">
                    Delete Feedback
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
