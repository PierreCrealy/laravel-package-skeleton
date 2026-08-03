<?php

declare(strict_types=1);

namespace LaravelPackageSkeleton\LaravelPackageSkeleton;

use Illuminate\Support\ServiceProvider;
use LaravelPackageSkeleton\LaravelPackageSkeleton\Console\Commands\LaravelPackageSkeletonCommand;

class LaravelPackageSkeletonServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-package-skeleton.php', 'laravel-package-skeleton');

        $this->app->singleton(LaravelPackageSkeleton::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('laravel-package-skeleton.routes.enabled', true)) {
            $this->loadRoutesFrom(__DIR__.'/../routes/laravel-package-skeleton.php');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-package-skeleton');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-package-skeleton');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-package-skeleton.php' => config_path('laravel-package-skeleton.php'),
        ], ['laravel-package-skeleton', 'laravel-package-skeleton-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-package-skeleton'),
        ], ['laravel-package-skeleton', 'laravel-package-skeleton-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-package-skeleton'),
        ], ['laravel-package-skeleton', 'laravel-package-skeleton-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-package-skeleton'),
        ], ['laravel-package-skeleton', 'laravel-package-skeleton-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-package-skeleton', 'laravel-package-skeleton-migrations']);

        $this->commands([
            LaravelPackageSkeletonCommand::class,
        ]);
    }
}
