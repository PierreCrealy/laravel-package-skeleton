<?php

declare(strict_types=1);

namespace LaravelPackageSkeleton\LaravelPackageSkeleton\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

class LaravelPackageSkeletonController
{
    public function __construct(private readonly ViewFactory $views) {}

    public function index(): View
    {
        return $this->views->make('laravel-package-skeleton::index');
    }
}
