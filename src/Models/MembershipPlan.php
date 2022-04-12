<?php

namespace Spoyntersmith\LaravelMemberships\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spoyntersmith\LaravelMemberships\Database\Factories\MembershipPlanFactory;

class MembershipPlan extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $table = 'laravel_membership_plans_table';

    protected static function newFactory()
    {
        return MembershipPlanFactory::new();
    }
}
