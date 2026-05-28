@props(['product'])

<div class="mt-10 rounded shadow-sm card bg-base-100 rounded-2xl">

    <a href="{{ route('shop.show', $product->id) }}">
        <figure>
            <img src="{{ asset('images/' . $product->image) }}" class="w-[200px]" />
        </figure>
    </a>

    <div class="flex flex-col gap-1 card-body bg-[#457545] text-white rounded-b-2xl">

        <h2 class="card-title">
            {{ $product->name }}
            <div class="badge badge-secondary">
                {{ $product->category }}
            </div>
        </h2>

        <p>{{ $product->description }}</p>

        <div class="items-center justify-between card-actions">

            <p class="text-lg font-semibold">
                Rp. {{ number_format($product->price, 0, ',', '.') }}
            </p>

            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button class="rounded-lg btn btn-white w-13 h-13">
                    +
                </button>
            </form>

        </div>

    </div>

</div>
