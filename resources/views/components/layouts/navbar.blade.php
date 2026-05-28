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
                        <span class="text-white badge badge-sm badge-success indicator-item">8</span>
                    </div>
                </div>
                <div tabindex="0"
                    class="mt-3 z-[100] card card-compact dropdown-content w-52 bg-base-100 shadow-xl border border-gray-100">
                    <div class="card-body">
                        <span class="text-lg font-bold text-gray-800">8 Items</span>
                        <span class="font-semibold text-green-600">Subtotal: Rp 99.000</span>
                        <div class="mt-2 card-actions">
                            <button class="text-white btn btn-success btn-block btn-sm">View cart</button>
                        </div>
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
