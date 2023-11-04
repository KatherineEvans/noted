<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\JobApplication;
use App\Models\Interview;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $job_titles = ['Sales Recruiter', 'Recruitment Consultant', 'Recruitment Manager', 'Talent Acquisition Specialist', 'Recruiting Team Lead', 'Recruitment Specialist'];

        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'role' => fake()->randomElement($job_titles),
        ];
    }
    
    public function forInterview()
    {
        return $this->state(function (array $attributes) {
            return [
                'contactable_type' => Interview::class,
                'contactable_id' => Interview::factory()
            ];
        });
    }

    public function forJobApplication()
    {
        return $this->state(function (array $attributes) {
            return [
                'contactable_type' => JobApplication::class,
                'contactable_id' => JobApplication::factory()
            ];
        });
    }
}
