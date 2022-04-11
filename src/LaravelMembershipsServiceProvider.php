<?php

namespace Spoyntersmith\LaravelMemberships;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spoyntersmith\LaravelMemberships\Commands\LaravelMembershipsCommand;

class LaravelMembershipsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-memberships')
            ->hasConfigFile()
            ->hasMigration('create_laravel_membership_plans_table')
            ->hasMigration('create_laravel_memberships_table')
            ->hasCommand(LaravelMembershipsCommand::class);
    }
}
