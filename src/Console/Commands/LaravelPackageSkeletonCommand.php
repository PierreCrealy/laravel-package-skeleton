<?php

declare(strict_types=1);

namespace LaravelPackageSkeleton\LaravelPackageSkeleton\Console\Commands;

use Illuminate\Console\Command;

class LaravelPackageSkeletonCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-package-skeleton:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-package-skeleton.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('LaravelPackageSkeleton placeholder command executed.');

        return self::SUCCESS;
    }
}
