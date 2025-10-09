<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 drop-shadow-md">
                User Dashboard
            </h2>
            <a href="{{ route('products.index') }}"
               class="inline-flex items-center gap-2 px-6 py-2 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 text-sm sm:text-base">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Manage Products
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 via-indigo-50/40 to-purple-50/40 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white/80 dark:bg-gray-800/90 backdrop-blur-md border border-gray-200/40 dark:border-gray-700/50 shadow-2xl rounded-3xl p-8 mb-10 text-center transition-transform hover:-translate-y-1 hover:shadow-pink-400/30">
                <div class="flex items-center justify-center mb-5">
                    <svg class="w-12 h-12 text-indigo-600 dark:text-indigo-400 animate-bounce" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl sm:text-3xl font-semibold text-gray-800 dark:text-gray-100">
                    Welcome, <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-pink-500">{{ auth()->user()->name }}</span>!
                </h3>
                <p class="mt-3 text-gray-600 dark:text-gray-300 text-lg">
                    You are logged in as a
                    <span class="font-medium text-indigo-600 dark:text-indigo-400">
                        {{ auth()->user()->type }}
                    </span>.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">

                <!-- Your Products -->
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 text-white shadow-2xl rounded-3xl p-8 text-center transform transition hover:scale-105 hover:-translate-y-2 hover:shadow-purple-500/40">
                    <div class="mb-4">
                        <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 3h18v18H3V3z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg sm:text-xl font-semibold">Your Products</h4>
                    <p class="mt-2 text-5xl font-bold drop-shadow-lg">{{ auth()->user()->products()->count() }}</p>
                </div>

                <!-- Recent Products -->
                <div class="bg-white/80 dark:bg-gray-800/90 backdrop-blur-md border border-gray-200/40 dark:border-gray-700/50 shadow-2xl rounded-3xl p-8 text-center transform transition hover:scale-105 hover:-translate-y-2 hover:shadow-indigo-400/30">
                    <div class="mb-4">
                        <svg class="w-10 h-10 mx-auto text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg sm:text-xl font-semibold text-gray-800 dark:text-gray-100">Recent Products</h4>

                    <ul class="mt-4 text-sm sm:text-base text-gray-700 dark:text-gray-300 max-h-52 overflow-y-auto space-y-2 scrollbar-hide">
                        @forelse(auth()->user()->products()->latest()->take(5)->get() as $p)
                            <li class="flex justify-between items-center px-5 py-2 rounded-xl bg-gray-100/70 dark:bg-gray-700/60 hover:bg-indigo-50 dark:hover:bg-gray-600 transition">
                                <span class="truncate font-medium">{{ $p->name }}</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-semibold">Rs.{{ number_format($p->price, 2) }}</span>
                            </li>
                        @empty
                            <p class="text-gray-500 dark:text-gray-400 italic mt-4">No products yet</p>
                        @endforelse
                    </ul>
                </div>

            </div>

            <!-- Manage Products Button (Bottom for mobile) -->
            <div class="text-center mt-8 sm:hidden">
                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 text-sm">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Manage Products
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
