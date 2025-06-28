<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::firstOrCreate([
            'client_id' => 2,
            'name' => 'Sepatu',
            'price' => 10,
        ]);

        Product::firstOrCreate([
            'client_id' => 1,
            'name' => 'Baju',
            'price' => 5,
        ]);
    }
}