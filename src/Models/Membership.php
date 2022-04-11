<?php

namespace Spoyntersmith\LaravelMemberships\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Membership extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;
    /*
     * Relationships
     */

    /**
     * Morph to the membershipable model.
     */
    public function membershipable()
    {
        return $this->morphTo();
    }

    /*
     * Accessors
     */

    /**
     * Return the current validity of the membership.
     * compare the current date/time to the membership's expiry date
     * and start date.
     */
    public function getIsValidAttribute(string|Membership $membership = null): bool
    {
        if ($membership instanceof Membership) {
            $membership = $membership->toArray();
        } else {
            $membership = config('memberships.models.membership')->find($membership['id']);
        }

        $now = now();
        $start = $membership['start_date'];
        $end = $membership['expiry_date'];

        if ($now->between($start, $end)) {
            return true;
        }

        return false;
    }

    /*
     * Mutators
     */

    /*
     * Scopes
     */

    /*
     * Methods
     */
}