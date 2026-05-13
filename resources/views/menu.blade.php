@extends('layout.guest')

@section('title', 'Our Exquisite Menu')

@section('content')
<div class="py-12">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
            DISCOVER THE <span class="bg-gradient-to-r from-primary-500 to-orange-400 bg-clip-text text-transparent">FLAVORS</span>
        </h1>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto">From hand-crafted appetizers to decadent desserts, our menu is a celebration of culinary excellence.</p>
    </div>

    {{-- Menu Categories --}}
    <div class="flex flex-wrap justify-center gap-4 mb-16">
        <button class="px-8 py-3 rounded-full bg-primary-500 text-white font-bold shadow-lg shadow-primary-500/20">All Items</button>
        <button class="px-8 py-3 rounded-full bg-white/5 text-zinc-400 font-bold hover:bg-white/10 transition-all border border-white/5">Starters</button>
        <button class="px-8 py-3 rounded-full bg-white/5 text-zinc-400 font-bold hover:bg-white/10 transition-all border border-white/5">Main Course</button>
        <button class="px-8 py-3 rounded-full bg-white/5 text-zinc-400 font-bold hover:bg-white/10 transition-all border border-white/5">Desserts</button>
        <button class="px-8 py-3 rounded-full bg-white/5 text-zinc-400 font-bold hover:bg-white/10 transition-all border border-white/5">Drinks</button>
    </div>

    {{-- Menu Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $items = [
                ['name' => 'Truffle Pasta', 'desc' => 'Handmade fettuccine with black truffle and parmesan cream.', 'price' => '$24.00', 'tag' => 'Signature'],
                ['name' => 'Wagyu Burger', 'desc' => 'Premium wagyu beef with caramelized onions and aged cheddar.', 'price' => '$19.00', 'tag' => 'Popular'],
                ['name' => 'Grilled Salmon', 'desc' => 'Fresh Atlantic salmon with roasted asparagus and lemon butter.', 'price' => '$28.00', 'tag' => 'Healthy'],
                ['name' => 'Burrata Salad', 'desc' => 'Creamy burrata with heirloom tomatoes and basil oil.', 'price' => '$16.00', 'tag' => 'Fresh'],
                ['name' => 'Chocolate Fondant', 'desc' => 'Molten dark chocolate cake with vanilla bean ice cream.', 'price' => '$12.00', 'tag' => 'Sweet'],
                ['name' => 'Berry Fizz', 'desc' => 'Refreshing mix of forest berries, lime, and sparkling water.', 'price' => '$8.00', 'tag' => 'Mocktail'],
            ];
        @endphp

        @foreach($items as $item)
            <div class="group bg-zinc-900/50 backdrop-blur-md border border-white/5 rounded-[32px] p-8 hover:border-primary-500/30 transition-all duration-500">
                <div class="flex justify-between items-start mb-6">
                    <span class="px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-[10px] font-black uppercase tracking-widest text-zinc-400 group-hover:text-primary-500 group-hover:border-primary-500/30 transition-colors">
                        {{ $item['tag'] }}
                    </span>
                    <span class="text-2xl font-black text-white leading-none">{{ $item['price'] }}</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-primary-500 transition-colors">{{ $item['name'] }}</h3>
                <p class="text-zinc-500 text-sm leading-relaxed mb-8">
                    {{ $item['desc'] }}
                </p>
                <button class="w-full py-4 rounded-2xl bg-white/5 border border-white/10 text-white font-bold group-hover:bg-primary-500 group-hover:border-primary-500 transition-all">
                    Order Now
                </button>
            </div>
        @endforeach
    </div>

    <div class="mt-20 text-center">
        <p class="text-zinc-500 italic mb-4">Prices are subject to change based on seasonal availability.</p>
        <div class="w-24 h-1 bg-gradient-to-r from-transparent via-primary-500 to-transparent mx-auto opacity-30"></div>
    </div>
</div>
@endsection
