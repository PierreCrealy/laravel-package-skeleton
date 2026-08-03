<?php

declare(strict_types=1);

namespace LaravelPackageSkeleton\LaravelPackageSkeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelPackageSkeleton\LaravelPackageSkeleton\LaravelPackageSkeleton
 */
class LaravelPackageSkeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelPackageSkeleton\LaravelPackageSkeleton\LaravelPackageSkeleton::class;
    }
}
