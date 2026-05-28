@extends('components.layouts.baselayouts')

@section('title', 'FruitFresh - Solusi Buah Segar dan Sayuran')
@section('content')
    @include('components.layouts.navbar')

    <div class="w-full px-20 font-poppins">
        <div class="max-w-[1280px] h-[402px] mx-auto bg-cover bg-center rounded rounded-xl mt-4"
            style="background-image: url('{{ asset('images/gambarhero.png') }}')">
            <h1 class="text-[48px] pt-10 text-white ml-25 font-bold">Jual Beli <br>Buah Segar dan<br> Sayuran</h1>
            <div class=" ml-25 mt-7 flex flex-wrap gap-2.5">

                <a href="">
                    <div class="px-8 py-2 text-black bg-white rounded rounded-lg">
                        Mulai Belanja
                    </div>
                </a>
                <a href="">
                    <div class="px-8 py-2 text-white bg-green-600 rounded rounded-lg">
                        Cara Kerjanya
                    </div>
                </a>

            </div>

        </div>

    </div>

    <div class="px-20 ">
        <h1 class="font-bold text-[30px] mt-10">Kenapa FruitFresh?</h1>
        <div class="grid grid-cols-2 gap-4 mt-10">
            <div class="">
                <ul class="flex flex-col gap-3 text-2xl font-semibold">
                    <li class="flex items-center gap-3">
                        <x-heroicon-s-check class="w-10 h-10 text-green-500" />
                        <span>Buah Selalu Fresh</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-heroicon-s-check class="w-10 h-10 text-green-500" />
                        <span>Higienis dan Berkualitas</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-heroicon-s-check class="w-10 h-10 text-green-500" />
                        <span>Harga Terjangkau</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <x-heroicon-s-check class="w-10 h-10 text-green-500" />
                        <span>Gaya Hidup Sehat</span>
                    </li>

                </ul>
            </div>

            <div class="flex flex-col items-center justify-center">
                <div class="hover-3d">
                    <!-- content -->
                    <figure class="-mt-20 w-75 rounded-2xl">
                        <img src="{{ asset('images/gambarbuah.png') }}" />
                    </figure>
                    <!-- 8 empty divs needed for the 3D effect -->
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <a href="">
                    <div class="flex justify-center w-35 bg-[#23621F] rounded-xl">
                        <h1 class="px-4 py-2 font-bold text-center text-white text-large ">Lihat Produk</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div>
        <h1 class="flex items-center justify-center mt-10 text-3xl font-bold">Aman dan Terlindungi</h1>
        {{-- Card Rating --}}
        <div class="px-20">
            <div class="grid items-stretch grid-cols-1 gap-6 mt-10 sm:grid-cols-2 md:grid-cols-3 justify-items-center">
                @foreach ($reviews as $review)
                    <x-cards.review-card :review="$review" />
                @endforeach
            </div>

        </div>

        {{-- Card Rating End --}}
    </div>
    @include('components.layouts.footer')
@endsection
