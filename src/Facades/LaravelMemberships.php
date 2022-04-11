<?php

namespace Spoyntersmith\LaravelMemberships\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spoyntersmith\LaravelMemberships\LaravelMemberships
 */
class LaravelMemberships extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-memberships';
    }
}
