<?php

namespace Spoyntersmith\LaravelMemberships\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spoyntersmith\LaravelMemberships\Membership;
use Spoyntersmith\LaravelMemberships\MembershipPlan;

class MembershipPlanFactory extends Factory
{
    protected $model = MembershipPlan::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'duration' => $this->faker->numberBetween(1, 100),

            'valid_at' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'expires_at' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
