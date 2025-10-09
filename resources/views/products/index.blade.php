<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">Products</h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-6">

                <a href="{{ route('products.create') }}" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 mb-4">
                    Add Product
                </a>

                @if(session('success'))
                    <div class="mb-4 p-2 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                @endif

                <table class="min-w-full table-auto border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">Category</th>
                            <th class="px-4 py-2 border">Price</th>
                            <th class="px-4 py-2 border">Quantity</th>
                            <th class="px-4 py-2 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $p)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $p->name }}</td>
                            <td class="border px-4 py-2">{{ $p->category }}</td>
                            <td class="border px-4 py-2">${{ $p->price }}</td>
                            <td class="border px-4 py-2">{{ $p->quantity }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('products.edit', $p->id) }}" class="px-2 py-1 bg-yellow-400 text-black rounded hover:bg-yellow-500">Edit</a>

                                <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $products->links() }} <!-- Pagination links -->
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
