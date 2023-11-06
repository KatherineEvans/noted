<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JobApplication;
use App\Enums\InterviewType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interview>
 */
class InterviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_application_id' => JobApplication::factory(),
            'date_interviewed' => fake()->dateTimeBetween($startDate = '-1 week', $endDate = 'now'),
            'round' => rand(1, 5),
            'type' => InterviewType::randomValue(),
            'note' => fake()->text($maxNbChars = 200)
        ];
    }
}
