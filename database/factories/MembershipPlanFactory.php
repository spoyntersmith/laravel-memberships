<?php

namespace Spoyntersmith\LaravelMemberships\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spoyntersmith\LaravelMemberships\Models\MembershipPlan;

class MembershipPlanFactory extends Factory
{
    protected $model = MembershipPlan::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'description' => $this->faker->sentence,
            'duration' => $this->faker->numberBetween(1, 100),

            'started_at' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'expired_at' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
