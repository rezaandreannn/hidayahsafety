<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'produk' => 'sepatu',
            'category_id' => 1,
            'harga' => null,
            'image' => 'sepatu.jpg',
            'spesial' => false
        ]);
    }
}
