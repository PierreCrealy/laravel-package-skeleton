<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Application'))</title>
    <meta name="description" content="@yield('meta_description', 'Package')">

    <x-laravel-package-skeleton::styles />
</head>
<body class="@yield('bodyClass')" data-package-page="@yield('packagePage', '')">
    <header class="site-header">
        <a href="{{ url('/') }}" class="brand">
            <span class="brand__mark">@yield('brand', config('app.name', 'Package'))</span>
            <span class="brand__tag">@yield('brand_tag', 'package')</span>
        </a>
        <div class="header-status" aria-hidden="true">
            <span class="status-dot"></span>
            <span>En ligne</span>
        </div>
    </header>

    @include('laravel-package-skeleton::layouts.partials.flash')

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <span>&copy; {{ date('Y') }} {{ config('app.name', 'Application') }}</span>
        <span aria-hidden="true">&middot;</span>
        <a href="{{ url('/mentions-legales') }}">Mentions légales</a>
    </footer>

    <x-laravel-package-skeleton::scripts />
</body>
</html>
