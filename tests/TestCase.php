<?php

declare(strict_types=1);

namespace LaravelPackageSkeleton\LaravelPackageSkeleton\Tests;

use LaravelPackageSkeleton\LaravelPackageSkeleton\LaravelPackageSkeletonServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelPackageSkeletonServiceProvider::class,
        ];
    }
}
