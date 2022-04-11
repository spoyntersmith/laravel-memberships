<?php

namespace Spoyntersmith\LaravelMemberships\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spoyntersmith\LaravelMemberships\Models\Membership;
use Spoyntersmith\LaravelMemberships\Models\MembershipPlan;

class MembershipFactory extends Factory
{
    protected $model = Membership::class;

    public function definition()
    {
        return [
            'membership_plan_id' => MembershipPlan::factory()->create()->id,
            'membershipable_id' => $this->faker->randomNumber(),
            'membershipable_type' => $this->faker->randomElement(['user', 'organization']),

            'started_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'expired_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
