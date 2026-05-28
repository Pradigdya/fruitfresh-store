@extends('components.layouts.baselayouts')

@section('title', 'FruitFresh - Mari Belanja')

@section('content')
    @include('components.layouts.navbar')
    <div class="px-20 mt-15">
        <ul class="flex flex-wrap gap-5 mt-6 menu menu-horizontal bg-base-200 rounded-box">
            <li>
                <a class="tooltip" data-tip="Fruits">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-apple-icon lucide-apple">
                        <path d="M12 6.528V3a1 1 0 0 1 1-1h0" />
                        <path
                            d="M18.237 21A15 15 0 0 0 22 11a6 6 0 0 0-10-4.472A6 6 0 0 0 2 11a15.1 15.1 0 0 0 3.763 10 3 3 0 0 0 3.648.648 5.5 5.5 0 0 1 5.178 0A3 3 0 0 0 18.237 21" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="tooltip" data-tip="Vegetables">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-leaf-icon lucide-leaf">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                    </svg>
                </a>
            </li>

        </ul>
    </div>

    <div class="flex flex-wrap px-20 mt-10">

        <div class="rounded shadow-sm card bg-base-100 w-75 rounded-2xl">
            <a href="">
                <figure>
                    <img src="{{ asset('images/buahjeruk.png') }}" alt="Shoes" class="w-[200px]" />
                </figure>
            </a>

            <div class=" flex flex-col gap-1 card-body bg-[#457545] text-white rounded-b-2xl">

                <h2 class="card-title">
                    Jeruk
                    <div class="badge badge-secondary">BUAH</div>
                </h2>
                <p>Fresh & Manis</p>

                <div class="items-center justify-between card-actions">
                    <p class="text-lg font-semibold">Rp. 25.000 / Kg</p>
                    <button class="rounded-lg btn btn-white w-13 h-13"> <x-heroicon-s-plus
                            class="w-10 h-10 text-slate-600" />
                    </button>
                </div>
            </div>
        </div>

    </div>

@endsection
