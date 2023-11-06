<?php

namespace Database\Seeders;

use App\Models\Interview;
use App\Models\JobApplication;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterviewSeeder extends Seeder
{
    public function run(): void
    {
        // Random fake job apps
        JobApplication::factory()->create();

        // Add interviews for each
        JobApplication::all()->each(function ($job_app) {
            Interview::factory()->create([
                'job_application_id' => $job_app->id,
            ]);
        });
    }
}
