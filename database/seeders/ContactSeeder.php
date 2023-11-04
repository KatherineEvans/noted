<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        // Random fake contacts
        Contact::factory()->count(15)->forInterview()->create();
        Contact::factory()->count(5)->forJobApplication()->create();
    }
}
