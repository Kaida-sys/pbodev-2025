<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password')]
        );
        $user->assignRole('super_admin');

        $client1 = User::firstOrCreate(
            ['email' => 'client2@admin.com'],
            ['name' => 'Client Account', 'password' => Hash::make('password')]
        );
        $client1->assignRole('user');

        $client2 = User::firstOrCreate(
            ['email' => 'client1@admin.com'],
            ['name' => 'Client1 Account', 'password' => Hash::make('password')]
        );
        $client2->assignRole('user');
    }
}