<?php

namespace App\Filament\Resources\ClientResource\Pages;

use App\Filament\Resources\ClientResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateClient extends CreateRecord
{
    protected static string $resource = ClientResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $slugName = Str::slug($data['name']);
        $timestamp = now()->timestamp;
        $email = "{$slugName}@admin.com";
        $password = Hash::make('password');

        $user = User::create([
            'name' => $data['name'],
            'email' => $email,
            'password' => $password,
        ]);
        $user->assignRole('user');
        $data['user_id'] = $user->id;
        return $data;
    }
}