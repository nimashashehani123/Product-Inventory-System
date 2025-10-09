<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 drop-shadow-lg">
                    Admin Dashboard
                </h2>
                <p class="text-sm text-gray-600 mt-1 font-medium">Welcome back! Here's your overview</p>
            </div>
            <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-2xl shadow-lg border border-gray-200">
                <div class="relative">
                    <div class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse shadow-lg shadow-emerald-500/50"></div>
                    <div class="absolute inset-0 w-3 h-3 bg-emerald-400 rounded-full animate-ping"></div>
                </div>
                <span class="text-sm font-bold text-gray-700">Live</span>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 via-blue-50/30 to-purple-50/30 min-h-screen relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

           <!-- Stats Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

    <!-- Total Products Card -->
    <div class="group relative overflow-hidden bg-white/80 rounded-3xl p-8 shadow-2xl hover:shadow-blue-500/30 transition-all duration-500 border border-gray-200/50 hover:scale-[1.02] hover:-translate-y-1">
        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-40 transition-opacity duration-500 animate-pulse"></div>
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
        <div class="relative">
            <div class="flex items-center justify-between mb-6">
                <div class="relative p-4 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-500">
                    <svg class="relative w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <span class="px-4 py-1.5 text-xs font-black text-blue-700 bg-blue-100/80 rounded-full shadow-lg border border-blue-200">
                    PRODUCTS
                </span>
            </div>
            <h3 class="text-xs font-bold text-gray-600 uppercase tracking-widest mb-4 group-hover:text-blue-600 transition-colors">
                Total Products
            </h3>
            <p class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 drop-shadow-2xl group-hover:scale-110 transition-transform duration-500 origin-left">
                {{ $productsCount ?? 0 }}
            </p>
        </div>
    </div>

    <!-- Total Users Card -->
    <div class="group relative overflow-hidden bg-white/80 rounded-3xl p-8 shadow-2xl hover:shadow-emerald-500/30 transition-all duration-500 border border-gray-200/50 hover:scale-[1.02] hover:-translate-y-1">
        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-600 via-teal-600 to-green-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-40 transition-opacity duration-500 animate-pulse"></div>
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-400/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
        <div class="relative">
            <div class="flex items-center justify-between mb-6">
                <div class="relative p-4 bg-gradient-to-br from-emerald-100 to-teal-100 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-500">
                    <svg class="relative w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <span class="px-4 py-1.5 text-xs font-black text-emerald-700 bg-emerald-100/80 rounded-full shadow-lg border border-emerald-200">
                    USERS
                </span>
            </div>
            <h3 class="text-xs font-bold text-gray-600 uppercase tracking-widest mb-4 group-hover:text-emerald-600 transition-colors">
                Total Users
            </h3>
            <p class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 drop-shadow-2xl group-hover:scale-110 transition-transform duration-500 origin-left">
                {{ $usersCount ?? 0 }}
            </p>
        </div>
    </div>

</div>

<!-- Recent Products Full-Width Card -->
<div class="group relative overflow-hidden bg-white/80 rounded-3xl p-10 shadow-2xl hover:shadow-pink-500/30 transition-all duration-500 border border-gray-200/50 hover:scale-[1.01] hover:-translate-y-1 mb-10">
    <div class="absolute -inset-1 bg-gradient-to-r from-pink-600 via-rose-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-40 transition-opacity duration-500 animate-pulse"></div>
    <div class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-br from-pink-400/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
    
    <div class="relative">
        <div class="flex items-center justify-between mb-6">
            <div class="relative p-4 bg-gradient-to-br from-pink-100 to-rose-100 rounded-2xl shadow-lg group-hover:scale-110 transition-transform duration-500">
                <svg class="relative w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 4h18M3 10h18M3 16h18" />
                </svg>
            </div>
            <span class="px-4 py-1.5 text-xs font-black text-pink-700 bg-pink-100/80 rounded-full shadow-lg border border-pink-200">
                RECENT PRODUCTS
            </span>
        </div>

        <h3 class="text-xs font-bold text-gray-600 uppercase tracking-widest mb-6 group-hover:text-pink-600 transition-colors">
            Latest 5 Added
        </h3>

        <div class="space-y-3">
            @forelse($recentProducts as $product)
                <div class="flex justify-between items-center bg-gradient-to-br from-pink-50 to-purple-50 rounded-2xl px-6 py-3 shadow-md border border-pink-100 hover:scale-[1.01] transition-all duration-300">
                    <div>
                        <p class="text-base font-bold text-gray-800">{{ $product->name }}</p>
                        <p class="text-sm text-gray-500">{{ ucfirst($product->category) }}</p>
                    </div>
                    <span class="text-sm font-semibold text-pink-600">Rs. {{ number_format($product->price, 2) }}</span>
                </div>
            @empty
                <p class="text-sm text-gray-400 text-center">No recent products</p>
            @endforelse
        </div>
    </div>
</div>


                
                
                    
            </div>

            <!-- Manage Button -->
            <div class="text-center">
                <a href="{{ route('products.index') }}"
                   class="group relative inline-flex items-center gap-4 px-12 py-5 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white text-lg font-black rounded-3xl shadow-2xl shadow-blue-500/50 hover:shadow-purple-500/60 hover:scale-105 hover:-translate-y-1 transition-all duration-500 overflow-hidden border-2 border-white/20">
                    <span class="relative tracking-wide">Manage Products</span>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
