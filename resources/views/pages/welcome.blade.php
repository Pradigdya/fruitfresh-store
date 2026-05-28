@extends('components.layouts.baselayouts')

@section('title', 'FruitFresh - Solusi Buah Segar dan Sayuran')
@section('content')
    @include('components.layouts.navbar')

    <div class="w-full px-20 font-poppins">
        <div class="max-w-[1280px] h-[402px] mx-auto bg-cover bg-center rounded rounded-xl mt-4"
            style="background-image: url('{{ asset('images/gambarhero.png') }}')">
            <h1 class="text-[48px] pt-10 text-white ml-25 font-bold">Jual Beli <br>Buah Segar dan<br> Sayuran</h1>
            <div class=" ml-25 mt-7 flex flex-wrap gap-2.5">

                <a href="{{ route('login') }}">
                    <div class="px-8 py-2 text-black bg-white rounded rounded-lg">
                        Mulai Belanja
                    </div>
                </a>


            </div>

        </div>

    </div>


@endsection
