<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Jeruk',
            'slug' => 'jeruk',
            'description' => 'Jeruk segar dan manis.',
            'price' => 25000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Strawberry',
            'slug' => 'strawberry',
            'description' => 'Strawberry merah segar.',
            'price' => 40000,
            'category' => 'BUAH',
            'image' => 'buahstrawberry.png',
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Apel',
            'slug' => 'apel',
            'description' => 'Apel import premium.',
            'price' => 35000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Mangga',
            'slug' => 'mangga',
            'description' => 'Mangga harum manis.',
            'price' => 28000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Pisang',
            'slug' => 'pisang',
            'description' => 'Pisang matang pilihan.',
            'price' => 18000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 40,
        ]);

        Product::create([
            'name' => 'Semangka',
            'slug' => 'semangka',
            'description' => 'Semangka merah segar.',
            'price' => 30000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 15,
        ]);

        Product::create([
            'name' => 'Anggur',
            'slug' => 'anggur',
            'description' => 'Anggur tanpa biji.',
            'price' => 50000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Melon',
            'slug' => 'melon',
            'description' => 'Melon manis berkualitas.',
            'price' => 32000,
            'category' => 'BUAH',
            'image' => 'buahjeruk.png',
            'stock' => 18,
        ]);
    }
}
