<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::firstOrCreate([
            'user_id' => 2,
            'api_token' => ''
        ]);

        Client::firstOrCreate([
            'user_id' => 3,
            'api_token' => ''
        ]);
    }
}