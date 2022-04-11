<?php

namespace Spoyntersmith\LaravelMemberships\Commands;

use Illuminate\Console\Command;

class LaravelMembershipsCommand extends Command
{
    public $signature = 'laravel-memberships';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
