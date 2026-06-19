@extends('layout.guest')

@section('title','Sign Up')

@section('content')
<div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <!-- Card -->
        <div class="bg-zinc-900 border border-white/10 rounded-2xl shadow-2xl p-8">
            <h1 class="text-3xl font-bold mb-2 bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">Create Account</h1>
            <p class="text-zinc-400 text-sm mb-6">Join us for an amazing dining experience</p>

            @if($errors->any())
                <div class="mb-4 p-4 bg-red-500/10 border border-red-500/20 rounded-lg">
                    <ul class="space-y-1">
                        @foreach($errors->all() as $error)
                            <li class="text-red-400 text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-zinc-300 mb-2">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required 
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:border-primary-500 focus:outline-none text-white placeholder-zinc-500 transition-colors" 
                        placeholder="John Doe" />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-300 mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required 
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:border-primary-500 focus:outline-none text-white placeholder-zinc-500 transition-colors" 
                        placeholder="you@example.com" />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-300 mb-2">Password</label>
                    <input type="password" name="password" required 
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:border-primary-500 focus:outline-none text-white placeholder-zinc-500 transition-colors" 
                        placeholder="••••••••" />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-zinc-300 mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" required 
                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg focus:border-primary-500 focus:outline-none text-white placeholder-zinc-500 transition-colors" 
                        placeholder="••••••••" />
                </div>

                <button type="submit" class="w-full mt-6 px-6 py-3 bg-gradient-to-r from-primary-500 to-orange-400 text-white font-semibold rounded-lg hover:opacity-90 transition-opacity">Sign up</button>
            </form>

            <div class="mt-6 pt-6 border-t border-white/10">
                <p class="text-center text-zinc-400 text-sm">
                    Already have an account? 
                    <a href="{{ route('login.show') }}" class="text-primary-500 hover:text-orange-400 font-semibold transition-colors">Sign in</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
