<?php

declare(strict_types=1);

use LaravelPackageSkeleton\LaravelPackageSkeleton\LaravelPackageSkeleton;

it('resolves the singleton', function () {
    expect(app(LaravelPackageSkeleton::class))->toBeInstanceOf(LaravelPackageSkeleton::class);
});

it('returns the same instance from the container', function () {
    expect(app(LaravelPackageSkeleton::class))->toBe(app(LaravelPackageSkeleton::class));
});

it('merges the package config', function () {
    expect(config('laravel-package-skeleton.placeholder'))->toBe('LaravelPackageSkeleton placeholder');
});

it('loads the package translations', function () {
    expect(trans('laravel-package-skeleton::messages.placeholder'))->toBe('LaravelPackageSkeleton placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('laravel-package-skeleton::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('laravel-package-skeleton:placeholder')
        ->expectsOutputToContain('LaravelPackageSkeleton placeholder command executed.')
        ->assertSuccessful();
});
