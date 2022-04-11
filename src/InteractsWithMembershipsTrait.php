<?php

namespace Spoyntersmith\LaravelMemberships;

use Spoyntersmith\LaravelMemberships\Models\Membership;

trait InteractsWithMembershipsTrait
{
    /**
     * Get the memberships for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function memberships()
    {
        return $this->morphToMany(
            config('memberships.models.membership'),
            'member',
            config('memberships.tables.membership_membership'),
            'member_id',
            'membership_id'
        )->withTimestamps();
    }

    /**
     * Add a membership to the model.
     *
     * @param  \Spoyntersmith\LaravelMemberships\Models\Membership  $membership
     */
    public function addMembership(string|Membership $membership, array $options = [])
    {
        $this->memberships()->attach(
            $this->getMembership($membership),
            $options,
            config('memberships.defaults.touch_on_create')
        );
    }

    /**
     * Remove a membership from the model.
     *
     * @param  \Spoyntersmith\LaravelMemberships\Models\Membership  $membership
     */
    public function removeMembership(string|Membership $membership) {
        $this->memberships()->detach(
            $this->getMembership($membership),
            config('memberships.defaults.touch_on_delete')
        );
    }

    private function getMembership(Membership|string $membership)
    {
        if (is_string($membership)) {
            $membership = Membership::firstWhere('name', $membership);
        }

        return $membership;
    }
}