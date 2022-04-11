<?php

namespace Spoyntersmith\LaravelMemberships\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spoyntersmith\LaravelMemberships\Membership;

class MembershipFactory extends Factory
{
    protected $model = Membership::class;

    public function definition()
    {
        return [
            'membership_plan_id' => Membership::factory()->create()->id,
            'membershipable_id' => $this->faker->randomNumber(),
            'membershipable_type' => $this->faker->randomElement(['user', 'organization']),

            'start_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
