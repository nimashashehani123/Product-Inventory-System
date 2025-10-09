<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white leading-tight bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 p-4 rounded-xl shadow-lg">
            User Dashboard
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl p-6 mb-10 text-center border-t-4 border-indigo-500 transition-transform transform hover:-translate-y-1 hover:shadow-3xl">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-indigo-600 dark:text-indigo-400 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 11c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Welcome, {{ auth()->user()->name }}!</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300 text-lg">You are logged in as a <span class="font-medium text-indigo-600 dark:text-indigo-400">{{ auth()->user()->type }}</span>.</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

                <!-- Your Products -->
                <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 dark:from-indigo-700 dark:to-indigo-900 text-white shadow-2xl rounded-2xl p-6 text-center transform transition hover:scale-105 hover:-translate-y-2 hover:shadow-3xl">
                    <div class="mb-2">
                        <svg class="w-8 h-8 mx-auto text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 3h18v18H3V3z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold">Your Products</h4>
                    <p class="mt-2 text-4xl font-bold">{{ auth()->user()->products()->count() }}</p>
                </div>

                <!-- Recent Products -->
                <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl p-6 text-center transform transition hover:scale-105 hover:-translate-y-2 hover:shadow-3xl">
                    <div class="mb-2">
                        <svg class="w-8 h-8 mx-auto text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Recent Products</h4>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 max-h-44 overflow-y-auto mt-2 space-y-1 scrollbar-hide">
                        @foreach(auth()->user()->products()->latest()->take(5)->get() as $p)
                            <li class="flex justify-between px-4 py-1 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                <span>{{ $p->name }}</span>
                                <span class="text-indigo-500 font-medium">Rs.{{ $p->price }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- More Insights -->
                <div class="bg-gradient-to-br from-purple-500 to-pink-500 dark:from-purple-700 dark:to-pink-900 text-white shadow-2xl rounded-2xl p-6 text-center transform transition hover:scale-105 hover:-translate-y-2 hover:shadow-3xl">
                    <div class="mb-2">
                        <svg class="w-8 h-8 mx-auto text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M13 16h-1v-4h-1m1-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold">More Insights</h4>
                    <p class="mt-2 text-lg">Coming soon...</p>
                </div>

            </div>

            <!-- Manage Products Button -->
            <div class="text-center">
                <a href="{{ route('products.index') }}"
                   class="inline-block px-10 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-bold rounded-2xl shadow-xl hover:shadow-2xl hover:scale-105 transition transform focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Manage Products
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
