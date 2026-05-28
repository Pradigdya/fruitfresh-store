<div class="flex flex-row items-center justify-between px-20 py-5 bg-white shadow-sm navbar font-poppins">

    <!-- 1. LOGO -->
    <a href="{{ route('dashboard') }}">
        <h1 class="text-3xl font-bold text-green-600">FruitFresh</h1>
    </a>


    <!-- 2. SEARCH BAR -->
    <div class="flex max-w-md gap-2">
        <input type="text" placeholder="Cari sesuatu..."
            class="w-[350px] px-4 py-2 text-gray-700 border border-gray-300 rounded-lg focus:border-green-500 focus:outline-none focus:ring-1 focus:ring-green-500" />
    </div>

    {{-- Jika BELUM login --}}
    @guest
        <div class="flex flex-wrap gap-2.5 items-center">
            <div class="px-8 py-2 text-black transition rounded-lg outline outline-1 outline-black hover:bg-gray-50">
                <a href="{{ route('login') }}">Login</a>
            </div>
            <div class="px-8 py-2 text-white transition bg-green-600 rounded-lg hover:bg-green-700">
                <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    @endguest


    {{-- Jika SUDAH login --}}
    @auth
        <!-- Container Kanan (User Profile, Cart, Logout) Berjajar Horizontal -->
        <div class="flex items-center gap-6">

            <!-- Tombol Cart DaisyUI (Dipindah ke sebelum profile agar posisi UI ideal) -->
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span
                            class="text-white badge badge-sm badge-success indicator-item">{{ auth()->user()->cart?->items->sum('qty') ?? 0 }}</span>
                    </div>
                </div>
                <div tabindex="0"
                    class="mt-3 z-[100] dropdown-content w-80 rounded-2xl bg-white shadow-2xl border border-gray-100">

                    <div class="p-5">

                        {{-- Header --}}
                        <div class="flex items-center justify-between mb-4">

                            <h1 class="text-lg font-bold text-gray-800">
                                Shopping Cart
                            </h1>

                            <span class="text-sm text-gray-500">
                                {{ auth()->user()->cart?->items->sum('qty') ?? 0 }} Items
                            </span>

                        </div>

                        {{-- Jika Cart Kosong --}}
                        @if (!auth()->user()->cart || auth()->user()->cart->items->count() == 0)
                            <div class="py-10 text-center">

                                <p class="text-gray-400">
                                    Cart masih kosong
                                </p>

                            </div>
                        @else
                            {{-- List Product --}}
                            <div class="flex flex-col gap-4 max-h-[300px] overflow-y-auto">

                                @php
                                    $subtotal = 0;
                                @endphp

                                @foreach (auth()->user()->cart->items as $item)
                                    @php
                                        $subtotal += $item->product->price * $item->qty;
                                    @endphp

                                    <div class="flex items-center gap-3">

                                        {{-- Gambar --}}
                                        <img src="{{ asset('images/' . $item->product->image) }}"
                                            class="object-cover border w-14 h-14 rounded-xl">

                                        {{-- Detail --}}
                                        <div class="flex-1">

                                            <h2 class="font-semibold text-gray-800">
                                                {{ $item->product->name }}
                                            </h2>

                                            <p class="text-sm text-gray-500">
                                                Qty: {{ $item->qty }}
                                            </p>

                                            <p class="text-sm font-semibold text-green-600">
                                                Rp {{ number_format($item->product->price, 0, ',', '.') }}
                                            </p>

                                        </div>

                                    </div>
                                @endforeach

                            </div>

                            {{-- Footer --}}
                            <div class="pt-4 mt-5 border-t">

                                <div class="flex items-center justify-between mb-4">

                                    <span class="font-medium text-gray-600">
                                        Subtotal
                                    </span>

                                    <span class="text-lg font-bold text-green-600">

                                        Rp {{ number_format($subtotal, 0, ',', '.') }}

                                    </span>

                                </div>

                                <button class="w-full text-white btn btn-success rounded-xl">
                                    View Cart
                                </button>

                            </div>
                        @endif

                    </div>

                </div>
            </div>

            <!-- Identitas User (Foto & Nama) -->
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=22c55e&color=fff"
                    class="object-cover w-10 h-10 border border-gray-200 rounded-full">

                <div class="leading-tight">
                    <h1 class="font-semibold text-gray-800">
                        {{ Auth::user()->name }}
                    </h1>
                    <p class="text-xs text-gray-500 capitalize">
                        {{ Auth::user()->role }}
                    </p>
                </div>
            </div>

            {{-- Form Logout --}}
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit"
                    class="px-4 py-2 text-sm font-medium text-white transition bg-red-500 rounded-lg hover:bg-red-600">
                    Logout
                </button>
            </form>

        </div>
    @endauth

</div>
