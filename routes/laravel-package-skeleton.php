<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use LaravelPackageSkeleton\LaravelPackageSkeleton\Http\Controllers\LaravelPackageSkeletonController;

Route::get('laravel-package-skeleton', [LaravelPackageSkeletonController::class, 'index'])->name('laravel-package-skeleton.index');
