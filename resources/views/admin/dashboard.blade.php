<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 tracking-wide">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Cards Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">

   <!-- Total Products Card -->
<div class="relative rounded-3xl p-6 shadow-xl overflow-hidden transform transition-all duration-500
            bg-gradient-to-br from-indigo-500 to-indigo-600 text-white
            hover:scale-105 hover:-translate-y-2 hover:shadow-2xl
            dark:from-indigo-700 dark:to-indigo-900 dark:text-white">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] dark:opacity-20"></div>
    <h3 class="text-lg font-semibold tracking-wide relative z-10">Total Products</h3>
    <p class="mt-4 text-5xl font-extrabold relative z-10">{{ $productsCount ?? 0 }}</p>
</div>

<!-- Total Users Card -->
<div class="relative rounded-3xl p-6 shadow-xl overflow-hidden transform transition-all duration-500
            bg-gradient-to-br from-green-500 to-emerald-600 text-white
            hover:scale-105 hover:-translate-y-2 hover:shadow-2xl
            dark:from-green-700 dark:to-green-900 dark:text-white">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] dark:opacity-20"></div>
    <h3 class="text-lg font-semibold tracking-wide relative z-10">Total Users</h3>
    <p class="mt-4 text-5xl font-extrabold relative z-10">{{ $usersCount ?? 0 }}</p>
</div>

<!-- Recent Products Card -->
<div class="relative rounded-3xl p-6 shadow-xl overflow-hidden transform transition-all duration-500
            bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200
            hover:scale-105 hover:-translate-y-1 hover:shadow-2xl">
    <h3 class="text-lg font-semibold mb-4 border-b border-gray-300 dark:border-gray-600 pb-2">Recent Products</h3>
    <ul class="text-sm max-h-56 overflow-y-auto space-y-2 scrollbar-hide">
        @foreach($recentProducts ?? [] as $p)
            <li class="flex justify-between px-4 py-2 rounded-lg transition-all transform
                       bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                <span class="font-medium">{{ $p->name }}</span>
                <span class="text-indigo-500 font-semibold">Rs.{{ $p->price }}</span>
            </li>
        @endforeach
    </ul>
</div>

</div>


           <!-- Manage Button -->
            <div class="text-center">
                <a href="{{ route('products.index') }}"
                   class="group inline-flex items-center gap-3 px-10 py-4 bg-gradient-to-r from-indigo-600 via-purple-600 to-violet-600 text-white text-lg font-bold rounded-2xl shadow-2xl shadow-indigo-500/50 hover:shadow-indigo-500/70 hover:scale-105 transition-all duration-300">
                    <svg class="w-6 h-6 group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Manage Products</span>
                    <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
