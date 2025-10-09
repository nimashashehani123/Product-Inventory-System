<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-6">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Category</label>
                        <input type="text" name="category" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" step="0.01" name="price" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Quantity</label>
                        <input type="number" name="quantity" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required>
                    </div>

                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-black rounded hover:bg-indigo-700 transition">
                        Save Product
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
