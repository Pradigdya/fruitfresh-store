@props(['rating'])

<div class="flex items-center gap-1">
    @for ($i = 1; $i <= 5; $i++)
        <svg class="w-5 h-5 {{ $i <= $rating ? 'text-yellow-400 fill-yellow-400' : 'text-gray-300 fill-gray-200' }}"
            xmlns="http://w3.org" viewBox="0 0 24 24">
            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
        </svg>
    @endfor
</div>
