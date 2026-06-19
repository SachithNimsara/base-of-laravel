<nav class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/5">
    <div class="container mx-auto px-6 h-20 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('front.home') }}" class="text-2xl font-black text-primary-500 tracking-tighter flex items-center gap-2">
                <span class="text-3xl">🍽️</span>
                <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">MY RESTAURANT</span>
            </a>
        </div>

        <!-- Main Navigation Links -->
        <ul class="hidden md:flex items-center gap-8">
            <li>
                <a href="{{ route('front.home') }}" 
                   class="text-sm font-semibold transition-colors {{ request()->routeIs('front.home') ? 'text-primary-500' : 'text-zinc-300 hover:text-white' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('menu') }}" 
                   class="text-sm font-semibold transition-colors {{ request()->routeIs('menu') ? 'text-primary-500' : 'text-zinc-300 hover:text-white' }}">
                    Menu
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="text-sm font-semibold transition-colors {{ request()->routeIs('about') ? 'text-primary-500' : 'text-zinc-300 hover:text-white' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="text-sm font-semibold transition-colors {{ request()->routeIs('contact') ? 'text-primary-500' : 'text-zinc-300 hover:text-white' }}">
                    Contact
                </a>
            </li>
            <li>
                <a href="{{ route('feedback.index') }}" 
                   class="text-sm font-semibold transition-colors {{ request()->routeIs('feedback.index') ? 'text-primary-500' : 'text-zinc-300 hover:text-white' }}">
                    Feedback
                </a>
            </li>
        </ul>

        <!-- Auth Section -->
        <div class="hidden md:flex items-center gap-4">
            @guest
                <a href="{{ route('login.show') }}" class="px-4 py-2 text-sm font-semibold text-zinc-300 hover:text-white transition-colors">Sign in</a>
                <a href="{{ route('register.show') }}" class="px-5 py-2 text-sm font-semibold bg-primary-500 hover:bg-primary-600 text-white rounded-lg transition-all">Sign up</a>
            @else
                <div class="relative group">
                    <button class="flex items-center gap-3 bg-white/5 hover:bg-white/10 px-3 py-2 rounded-full transition-colors">
                        <span class="w-8 h-8 rounded-full bg-gradient-to-br from-primary-500 to-orange-400 flex items-center justify-center text-white font-bold text-sm">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</span>
                        <span class="text-sm text-white font-medium">{{ auth()->user()->name }}</span>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-zinc-900 rounded-lg shadow-xl opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 border border-white/10">
                        <a href="{{ route('profile.show') }}" class="block px-4 py-3 text-sm text-zinc-300 hover:text-white hover:bg-white/5 border-b border-white/5">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-3 text-sm text-zinc-300 hover:text-white hover:bg-red-500/10">Logout</button>
                        </form>
                    </div>
                </div>
            @endguest
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden text-zinc-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </div>
    </div>
</nav>
