<footer class="bg-zinc-950 border-t border-white/5 pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            {{-- Brand Column --}}
            <div class="space-y-6">
                <h3 class="text-xl font-bold text-white flex items-center gap-2">
                    <span class="text-2xl">🍽️</span> My Restaurant
                </h3>
                <p class="text-zinc-400 text-sm leading-relaxed max-w-xs">
                    Serving delicious food with love since 2020. We pride ourselves on using the freshest ingredients and traditional recipes.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-zinc-400 hover:bg-primary-500 hover:text-white transition-all duration-300">fb</a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-zinc-400 hover:bg-primary-500 hover:text-white transition-all duration-300">ig</a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-zinc-400 hover:bg-primary-500 hover:text-white transition-all duration-300">tw</a>
                </div>
            </div>

            {{-- Contact Column --}}
            <div class="space-y-6">
                <h4 class="text-sm font-bold uppercase tracking-widest text-primary-500">Contact Us</h4>
                <ul class="space-y-4 text-sm text-zinc-400">
                    <li class="flex items-start gap-3">
                        <span class="text-primary-500">📍</span>
                        <span>123 Food Street, Colombo,<br>Sri Lanka</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-primary-500">📞</span>
                        <a href="tel:+94112345678" class="hover:text-white transition-colors">+94 11 234 5678</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-primary-500">✉️</span>
                        <a href="mailto:info@myrestaurant.com" class="hover:text-white transition-colors">info@myrestaurant.com</a>
                    </li>
                </ul>
            </div>

            {{-- Opening Hours Column --}}
            <div class="space-y-6">
                <h4 class="text-sm font-bold uppercase tracking-widest text-primary-500">Opening Hours</h4>
                <ul class="space-y-3 text-sm text-zinc-400">
                    <li class="flex justify-between border-b border-white/5 pb-2">
                        <span>Mon – Fri</span>
                        <span class="text-white">8:00 AM – 10:00 PM</span>
                    </li>
                    <li class="flex justify-between border-b border-white/5 pb-2">
                        <span>Saturday</span>
                        <span class="text-white">9:00 AM – 11:00 PM</span>
                    </li>
                    <li class="flex justify-between border-b border-white/5 pb-2">
                        <span>Sunday</span>
                        <span class="text-white text-right">10:00 AM – 9:00 PM</span>
                    </li>
                </ul>
            </div>

            {{-- Newsletter Column --}}
            <div class="space-y-6">
                <h4 class="text-sm font-bold uppercase tracking-widest text-primary-500">Newsletter</h4>
                <p class="text-zinc-400 text-sm">Subscribe to get the latest updates and offers.</p>
                <form class="flex flex-col gap-3">
                    <input type="email" placeholder="Your email address" class="bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-primary-500 transition-colors">
                    <button type="submit" class="bg-primary-500 hover:bg-primary-600 text-white font-bold py-3 px-6 rounded-lg text-sm transition-colors">
                        Subscribe Now
                    </button>
                </form>
            </div>
        </div>

        <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-zinc-500 text-xs">
            <p>&copy; {{ date('Y') }} My Restaurant. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
