import jQuery from 'jquery'

window.LaravelPackageSkeleton = window.LaravelPackageSkeleton || {}

;(function ($, window, Package) {
    'use strict'

    // Exposé pour que les modules de page réutilisent la même instance privée
    Package.$ = $

    Package.config = window.laravelPackageSkeletonConfig || {}

    Package.common = {
        init() {
            this.emit('ready', { locale: Package.config.locale })
        },

        emit(name, detail = {}) {
            $(document).trigger(`package:${name}`, [detail])
            document.dispatchEvent(new CustomEvent(`package:${name}`, { detail }))
        },
    }

    Package.pages = Package.pages || {}

    Package.boot = function () {
        Package.common.init()

        const page = document.body.dataset.packagePage
        console.log(`Booting page "${page}"`)

        Package.pages[page]?.init?.()
    }
})(jQuery, window, window.LaravelPackageSkeleton)

// Les modules de page s'enregistrent dans Package.pages ; Package.boot() décide
// lequel initialiser d'après l'attribut data-package-page du <body>.
import './pages/default.js'

jQuery(function () {
    window.LaravelPackageSkeleton.boot()
})
