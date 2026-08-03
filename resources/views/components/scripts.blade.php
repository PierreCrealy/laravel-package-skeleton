@if (config('laravel-package-skeleton.assets.js', true))
    @php
        $laravelPackageSkeletonConfig = [
            'locale' => app()->getLocale(),
            'confirm' => (bool) config('laravel-package-skeleton.js.confirm_destructive', true),
        ];
    @endphp

    <script>
        {{-- @json() sur une seule ligne : Blade avale le ']' fermant si l'argument est multiligne --}}
        window.laravelPackageSkeletonConfig = @json($laravelPackageSkeletonConfig);
    </script>
    <script src="{{ \LaravelPackageSkeleton\LaravelPackageSkeleton\LaravelPackageSkeleton::assetUrl('laravel-package-skeleton.js') }}" defer></script>
@endif

@stack('laravel-package-skeleton-scripts')
