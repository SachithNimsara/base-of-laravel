<nav class="sticky top-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/5">
    <div class="container mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center">
            <a href="{{ route('front.home') }}" class="text-2xl font-black text-primary-500 tracking-tighter flex items-center gap-2">
                <span class="text-3xl">🍽️</span>
                <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">MY RESTAURANT</span>
            </a>
        </div>

        <ul class="hidden md:flex items-center gap-2">
            <li>
                <a href="{{ route('front.home') }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('front.home') ? 'bg-primary-500/10 text-primary-500' : 'text-zinc-400 hover:text-white hover:bg-white/5' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('menu') }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('menu') ? 'bg-primary-500/10 text-primary-500' : 'text-zinc-400 hover:text-white hover:bg-white/5' }}">
                    Menu
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('about') ? 'bg-primary-500/10 text-primary-500' : 'text-zinc-400 hover:text-white hover:bg-white/5' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-primary-500/10 text-primary-500' : 'text-zinc-400 hover:text-white hover:bg-white/5' }}">
                    Contact
                </a>
            </li>
            <li>
                <a href="{{ route('feedback.index') }}" 
                   class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('feedback.*') ? 'bg-primary-500/10 text-primary-500' : 'text-zinc-400 hover:text-white hover:bg-white/5' }}">
                    Reviews
                </a>
            </li>
        </ul>

        <div class="md:hidden text-zinc-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </div>
    </div>
</nav>
