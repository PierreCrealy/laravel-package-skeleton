<?php

declare(strict_types=1);

return [

    'name' => 'LaravelPackageSkeleton',
    'placeholder' => 'LaravelPackageSkeleton placeholder',
    'version' => '0.0.1',
    'url' => 'https://github.com/pierreCrealy/laravel-package-skeleton',

    'routes' => [
        'enabled' => true,
        'prefix' => 'laravel-package-skeleton',
        'middleware' => ['web'],
    ],

    'assets' => [
        'css' => true,
        'js' => true,
    ],
];
