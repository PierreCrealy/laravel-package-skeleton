<?php

declare(strict_types=1);

namespace LaravelPackageSkeleton\LaravelPackageSkeleton;

use Composer\InstalledVersions;
use OutOfBoundsException;

class LaravelPackageSkeleton
{
    public static function assetUrl(string $file): string
    {
        $path = public_path("vendor/laravel-package-skeleton/{$file}");

        if (config('app.debug') && is_file($path)) {
            return asset("vendor/laravel-package-skeleton/{$file}").'?v='.filemtime($path);
        }

        try {
            $version = InstalledVersions::getPrettyVersion('pierre-bournazel/laravel-package-skeleton') ?? 'dev';
        } catch (OutOfBoundsException) {
            $version = 'dev';
        }

        return asset("vendor/laravel-package-skeleton/{$file}")."?v={$version}";
    }
}
