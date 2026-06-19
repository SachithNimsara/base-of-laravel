@extends('layout.guest')

@section('title', 'Admin - Manage Feedback')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight">
            MANAGE <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">FEEDBACK</span>
        </h1>
        <a href="{{ route('feedback.index') }}" class="text-zinc-400 hover:text-white transition-colors">View Public Page</a>
    </div>

    @if(session('success'))
        <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-6 py-4 rounded-xl mb-8">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-zinc-900/50 backdrop-blur-xl border border-white/5 rounded-3xl overflow-hidden shadow-2xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-zinc-300 whitespace-nowrap md:whitespace-normal">
                <thead class="bg-zinc-800/50 border-b border-white/5">
                    <tr>
                        <th class="px-6 py-5 font-semibold text-white tracking-wide uppercase text-sm">Name</th>
                        <th class="px-6 py-5 font-semibold text-white tracking-wide uppercase text-sm min-w-[300px]">Feedback</th>
                        <th class="px-6 py-5 font-semibold text-white tracking-wide uppercase text-sm w-32">Rate</th>
                        <th class="px-6 py-5 font-semibold text-white tracking-wide uppercase text-sm text-right w-40">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @forelse($feedbacks as $feedback)
                        <tr class="hover:bg-white/[0.02] transition-colors group">
                            <td class="px-6 py-5 font-medium text-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary-500 to-orange-500 flex items-center justify-center text-white font-bold text-xs uppercase flex-shrink-0">
                                        {{ substr($feedback->name, 0, 1) }}
                                    </div>
                                    <span>{{ $feedback->name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-5 text-zinc-400">
                                <span class="line-clamp-2" title="{{ $feedback->message }}">{{ $feedback->message }}</span>
                            </td>
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-1 bg-white/5 px-2 py-1 rounded-lg w-fit border border-white/5">
                                    <span class="text-yellow-400 font-bold text-sm">{{ $feedback->rating }}.0</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                    </svg>
                                </div>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex items-center justify-end gap-2 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('admin.feedback.show', $feedback) }}" class="p-2 bg-blue-500/10 text-blue-400 hover:bg-blue-500/20 rounded-lg transition-colors" title="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.feedback.edit', $feedback) }}" class="p-2 bg-yellow-500/10 text-yellow-400 hover:bg-yellow-500/20 rounded-lg transition-colors" title="Edit Feedback">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.feedback.destroy', $feedback) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this feedback? This action cannot be undone.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 bg-red-500/10 text-red-400 hover:bg-red-500/20 rounded-lg transition-colors" title="Delete Feedback">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-zinc-500">
                                <div class="text-4xl mb-4">📭</div>
                                <p>No feedback found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
