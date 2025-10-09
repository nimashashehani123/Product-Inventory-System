<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white leading-tight bg-gradient-to-r from-indigo-600 to-purple-600 p-4 rounded-lg shadow-md">
            User Dashboard
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl p-6 mb-8 text-center border-t-4 border-indigo-500">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 11c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Welcome, {{ auth()->user()->name }}!</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">You are logged in as a <span class="font-medium text-indigo-600">{{ auth()->user()->type }}</span>.</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <!-- Product Count -->
                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center transform hover:-translate-y-1">
                    <div class="mb-2">
                        <svg class="w-6 h-6 mx-auto text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 3h18v18H3V3z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Your Products</h4>
                    <p class="mt-2 text-3xl font-bold text-indigo-600">{{ auth()->user()->products()->count() }}</p>
                </div>

                <!-- Recent Products -->
                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center transform hover:-translate-y-1">
                    <div class="mb-2">
                        <svg class="w-6 h-6 mx-auto text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Recent Products</h4>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 max-h-40 overflow-y-auto mt-2">
                        @foreach(auth()->user()->products()->latest()->take(5)->get() as $p)
                            <li class="flex justify-between border-b border-gray-200 dark:border-gray-700 pb-1">
                                <span>{{ $p->name }}</span>
                                <span class="text-indigo-500 font-medium">Rs.{{ $p->price }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Placeholder for Future Stats -->
                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center transform hover:-translate-y-1">
                    <div class="mb-2">
                        <svg class="w-6 h-6 mx-auto text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M13 16h-1v-4h-1m1-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200">More Insights</h4>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Coming soon...</p>
                </div>
            </div>

            <!-- Manage Products Button -->
            <div class="text-center">
                <a href="{{ route('products.index') }}"
                   class="inline-block px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-2xl transition transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Manage Products
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
