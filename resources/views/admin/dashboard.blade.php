<x-app-layout>
    <x-slot name="header">
        <h2>Admin Dashboard</h2>
    </x-slot>
    
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow rounded-lg p-6 text-center">

                <h3 class="text-lg font-semibold mb-6">Welcome Admin</h3>

                <a href="{{ route('products.create') }}"
                   class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                        Add New Product
                </a>

            </div>
        </div>
    </div>

</x-app-layout>
