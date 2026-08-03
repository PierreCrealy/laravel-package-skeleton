window.LaravelPackageSkeleton = window.LaravelPackageSkeleton || {}

;(function (Package) {
    'use strict'

    // Résolu dans init(), pas au chargement : les `import` étant hoistés,
    // ce module est évalué AVANT que le socle ait posé Package.$.
    let $

    Package.pages = Package.pages || {}

    Package.pages.default = {
        init() {
            $ = Package.$

            if (!$) {
                console.error('[laravel-package-skeleton] jQuery instance missing on window.LaravelPackageSkeleton.$')
                return
            }

            console.log('LaravelPackageSkeleton default page ready')
        },
    }
})(window.LaravelPackageSkeleton)
