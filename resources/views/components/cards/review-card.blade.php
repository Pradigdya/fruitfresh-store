<div
    class="p-5 bg-white rounded-3xl shadow-lg hover:shadow-2xl hover:shadow-gray-400/50 w-[320px] h-full flex flex-col justify-between gap-4 transition-shadow duration-300">

    <!-- Bagian Atas (Rating & Isi Teks) -->
    <div class="flex flex-col gap-3">
        <div class="flex flex-wrap gap-3 px-3">
            <x-ui.star-rating :rating="$review->rating" />
            <h1 class="text-xs text-slate-500">{{ $review->created_at->diffForHumans() }}</h1>
        </div>

        <div class="px-3">
            <h1 class="text-sm font-medium leading-relaxed text-gray-800 md:text-base">
                {{ $review->comment }}
            </h1>
        </div>
    </div>

    <!-- Bagian Bawah (Profil Pembeli) -> Dijamin selalu sejajar rata di bawah -->
    <div class="flex flex-wrap items-center justify-between gap-3 px-3 pt-2 border-t border-gray-100">
        <div class="flex flex-wrap items-center gap-3">
            <img src="{{ $review->user_avatar ? asset('storage/' . $review->user_avatar) : asset('images/profile.jpeg') }}"
                alt="" class="object-cover w-10 h-10 rounded-full">
            <div class="text-xs">
                <h3 class="font-bold text-gray-900">{{ $review->user_name }}</h3>
                <p class="text-slate-500">Pembeli</p>
            </div>
        </div>

        @if ($review->product_image)
            <img src="{{ asset('images/' . $review->product_image) }}" alt=""
                class="object-cover rounded-full w-14 h-14">
        @endif
    </div>

</div>
