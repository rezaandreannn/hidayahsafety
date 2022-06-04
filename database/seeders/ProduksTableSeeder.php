<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'produk' => 'sepatu',
            'category_id' => 1,
            'harga' => null,
            'image' => '',
            'deskripsi' => '',
            'spesial' => false
        ]);
    }
}
