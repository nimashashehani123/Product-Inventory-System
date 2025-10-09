<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 leading-tight">
            User Dashboard
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Welcome Card -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 mb-8 text-center">
                <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Welcome, {{ auth()->user()->name }}!</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">You are logged in as a <span class="font-medium">{{ auth()->user()->type }}</span>.</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center">
                    <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Your Products</h4>
                    <p class="mt-2 text-3xl font-bold text-indigo-600">{{ auth()->user()->products()->count() }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center">
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

            </div>

            <!-- Manage Products Button -->
            <div class="text-center">
                <a href="{{ route('products.index') }}"
                   class="inline-block px-8 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 hover:shadow-2xl transition transform hover:-translate-y-1">
                    Manage Products
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
