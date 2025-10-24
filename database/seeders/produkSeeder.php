<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prd = new produk;
        $prd->insert([
        ['nama' => 'laptop', 'qty' => '10', 'harga' => '500000'],
        ['nama' => 'HP', 'qty' => '7', 'harga' => '200000'],
        ['nama' => 'keyboard', 'qty' => '5', 'harga' => '300000']
    ]);
    }
}
