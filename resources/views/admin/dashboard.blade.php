<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 leading-tight">Admin Dashboard</h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <!-- Total Products -->
                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Products</h3>
                    <p class="mt-3 text-4xl font-bold text-indigo-600">{{ $productsCount ?? 0}}</p>
                </div>

                <!-- Total Users -->
                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6 text-center">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Users</h3>
                    <p class="mt-3 text-4xl font-bold text-green-600">{{ $usersCount ?? 0 }}</p>
                </div>

                <!-- Recent Products -->
                <div class="bg-white dark:bg-gray-800 shadow-lg hover:shadow-2xl transition rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-2">Recent Products</h3>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 max-h-48 overflow-y-auto space-y-2">
                        @foreach($recentProducts ?? [] as $p)
                            <li class="flex justify-between border-b border-gray-200 dark:border-gray-700 pb-1">
                                <span>{{ $p->name }}</span>
                                <span class="text-indigo-500 font-medium">Rs.{{ $p->price }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <div class="text-center">
                <a href="{{ route('products.index') }}"
                   class="inline-block px-8 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-lg hover:bg-indigo-700 hover:shadow-2xl transition transform hover:-translate-y-1">
                    Manage Products
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
