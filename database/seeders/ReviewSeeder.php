<?php

namespace Database\Seeders;

use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama terlebih dahulu (opsional)
        Review::truncate();

        Review::create([
            'user_name' => 'Zayyan Hafizd',
            'user_avatar' => null, // akan memakai gambar default profile.jpeg
            'product_image' => 'buahalpukat.png',
            'rating' => 5,
            'comment' => 'Barangnya fresh dengan kualitas yang terbaik, sampai dengan aman packagingnya rapi dan bagus.',
            'created_at' => Carbon::now()->subHours(12), // Mengatur waktu menjadi 12 jam yang lalu
        ]);

        Review::create([
            'user_name' => 'Siti Aminah',
            'user_avatar' => null,
            'product_image' => 'buahapel.png', // sesuaikan dengan file gambar Anda jika ada
            'rating' => 4,
            'comment' => 'Jeruknya manis dan segar sekali, pengiriman juga sangat cepat. Respons penjual sangat ramah!',
            'created_at' => Carbon::now()->subDays(2), // Mengatur waktu menjadi 2 hari yang lalu
        ]);

        Review::create([
            'user_name' => 'Budi Santoso',
            'user_avatar' => null,
            'product_image' => 'buahalpukat.png',
            'rating' => 3,
            'comment' => 'Ukurannya lumayan besar, tapi ada beberapa buah yang sedikit terlalu matang. Tapi tidak apa-apa tetap enak.',
            'created_at' => Carbon::now()->subMinutes(45), // Mengatur waktu menjadi 45 menit yang lalu
        ]);
    }
}
