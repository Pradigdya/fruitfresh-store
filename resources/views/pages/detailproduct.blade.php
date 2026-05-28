@extends('components.layouts.baselayouts')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">

        <div class="w-[900px] bg-white rounded-3xl shadow-lg p-10 flex gap-10">

            {{-- Gambar --}}
            <div class="flex items-center justify-center w-1/2">

                <img src="{{ asset('images/' . $product->image) }}" class="w-[350px]">

            </div>

            {{-- Detail --}}
            <div class="flex flex-col justify-center w-1/2 gap-5">

                <div>

                    <h1 class="text-4xl font-bold">
                        {{ $product->name }}
                    </h1>

                    <div class="mt-2 badge badge-success">
                        {{ $product->category }}
                    </div>

                </div>

                <p class="text-gray-600">
                    {{ $product->description }}
                </p>

                <h2 class="text-3xl font-bold text-green-600">
                    Rp. {{ number_format($product->price, 0, ',', '.') }}
                </h2>

                <p class="text-gray-500">
                    Stock: {{ $product->stock }}
                </p>

                <div class="flex gap-3 mt-5">

                    <button class="btn btn-success">
                        Tambah ke Keranjang
                    </button>

                    <a href="{{ route('shop.index') }}" class="btn btn-outline">
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>
@endsection
