@if (config('laravel-package-skeleton.assets.css', true))
    <link rel="stylesheet" href="{{ \LaravelPackageSkeleton\LaravelPackageSkeleton\LaravelPackageSkeleton::assetUrl('laravel-package-skeleton.css') }}">
@endif

@stack('laravel-package-skeleton-styles')
