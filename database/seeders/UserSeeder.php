<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = collect([
            ['name' => 'Katherine Evans', 'email' => 'katherine@example.com'],
            ['name' => 'Kat Ellen', 'email' => 'kat@example.com'],
            ['name' => 'Test User', 'email' => 'user@example.com'],
        ])->each(function ($user) {
            User::factory()->create($user);
        });
    }
}
