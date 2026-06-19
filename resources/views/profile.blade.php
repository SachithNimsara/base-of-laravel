@extends('layout.guest')

@section('title','Profile')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
        <!-- Profile Card -->
        <div class="bg-zinc-900 border border-white/10 rounded-2xl shadow-2xl p-8">
            <!-- Avatar -->
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 rounded-full bg-gradient-to-br from-primary-500 to-orange-400 flex items-center justify-center text-white font-bold text-4xl">
                    {{ strtoupper(substr($user->name,0,1)) }}
                </div>
            </div>

            <h1 class="text-3xl font-bold mb-6 text-center bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">{{ $user->name }}</h1>

            <!-- Info Section -->
            <div class="space-y-4 mb-8">
                <div class="p-4 bg-white/5 border border-white/10 rounded-lg">
                    <p class="text-zinc-400 text-sm mb-1">Email</p>
                    <p class="text-white font-semibold">{{ $user->email }}</p>
                </div>

                <div class="p-4 bg-white/5 border border-white/10 rounded-lg">
                    <p class="text-zinc-400 text-sm mb-1">Member Since</p>
                    <p class="text-white font-semibold">{{ $user->created_at->format('M d, Y') }}</p>
                </div>
            </div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-colors">
                    Logout
                </button>
            </form>
        </div>

        <!-- Back Link -->
        <div class="mt-6 text-center">
            <a href="{{ route('front.home') }}" class="text-primary-500 hover:text-orange-400 font-semibold transition-colors">← Back to Home</a>
        </div>
    </div>
</div>
@endsection
