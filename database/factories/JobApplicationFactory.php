<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\LocationType;
use App\Enums\ApplicationStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApplication>
 */
class JobApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['Software Engineer', 'Sr. Backend Engineer', 'Full-Stack Software Engineer', 'Software Engineer III', 'Engineering Manager', 'Staff Software Engineer'];

        $job_boards = ['LinkedIn', 'Indeed', 'Otta', 'Company Website', 'Built In'];

        return [
            'company' => fake()->company(),
            'role' => fake()->randomElement($roles),
            'website' => fake()->domainName(),
            'mission' => fake()->bs(),
            'location_type' => LocationType::randomValue(),
            'location' => fake()->address(),
            'date_applied' => fake()->dateTimeBetween($startDate = '-3 months', $endDate = '-1 week'),
            'status'  => ApplicationStatus::randomValue(),
            'found_on' => fake()->randomElement($job_boards),
            'projected_salary' => fake()->numberBetween($min = 100000, $max = 250000),
            'offered_role' => fake()->boolean($chanceOfGettingTrue = 25),
            'offer_note' => fake()->text($maxNbChars = 200),
            'accepted' => false
        ];
    }
}
