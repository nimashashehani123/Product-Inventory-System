<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 flex-wrap">
            <h2 class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 drop-shadow-lg">
                Manage Products
            </h2>
            <a href="{{ route('products.create') }}"
               class="inline-flex items-center gap-2 px-6 py-2 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Add Product
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-800 font-semibold rounded-xl border border-green-200 shadow-md text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-gray-800 dark:text-gray-200">
                        <thead class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white uppercase text-xs font-bold tracking-wider">
                            <tr>
                                <th class="px-6 py-3 text-left">Name</th>
                                <th class="px-6 py-3 text-left">Category</th>
                                <th class="px-6 py-3 text-left">Price</th>
                                <th class="px-6 py-3 text-left">Quantity</th>
                                <th class="px-6 py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($products as $p)
                                <tr class="hover:bg-indigo-50 dark:hover:bg-gray-700 transition-colors duration-300">
                                    <td class="px-6 py-4 font-semibold truncate max-w-[150px]">{{ $p->name }}</td>
                                    <td class="px-6 py-4 capitalize">{{ $p->category }}</td>
                                    <td class="px-6 py-4 text-indigo-600 dark:text-indigo-400 font-semibold">Rs.{{ $p->price }}</td>
                                    <td class="px-6 py-4">{{ $p->quantity }}</td>
                                    <td class="px-6 py-4 text-center flex justify-center gap-3 flex-wrap">
                                        <a href="{{ route('products.edit', $p->id) }}"
                                           class="px-4 py-1 bg-yellow-400 text-black rounded-lg font-semibold hover:bg-yellow-500 transition">
                                            Edit
                                        </a>
                                        <button type="button" data-id="{{ $p->id }}"
                                                class="delete-btn px-4 py-1 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition">
                                            Delete
                                        </button>
                                        <form id="delete-form-{{ $p->id }}" action="{{ route('products.destroy', $p->id) }}" method="POST" class="hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-400 dark:text-gray-500 font-medium">
                                        No products available.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-4 flex justify-center bg-gray-100 dark:bg-gray-800">
                    {{ $products->links() }}
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <a href="{{ route('dashboard') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold rounded-2xl shadow-md hover:shadow-lg hover:scale-105 transition-transform duration-300">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to Dashboard
                </a>
            </div>

        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${id}`).submit();
                    }
                });
            });
        });
    </script>
</x-app-layout>
