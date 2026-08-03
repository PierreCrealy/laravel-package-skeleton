import { defineConfig } from 'vite'
import { resolve } from 'path'

// Vite ne s'occupe QUE du JavaScript. Le SCSS est compilé par le CLI `sass`
// (voir le script build:css) : sans entrée HTML ni manifeste exploitable par
// un package, faire transiter le CSS par le graphe de modules obligeait à
// désactiver cssCodeSplit puis à renommer la sortie.
export default defineConfig({
    // `public/` est notre dossier de SORTIE, pas un dossier d'assets statiques
    // à recopier. Sans ce `false`, Vite considère les deux comme confondus.
    publicDir: false,
    build: {
        outDir: 'public',
        // Impératif : public/ contient aussi le CSS produit par sass.
        emptyOutDir: false,
        rollupOptions: {
            input: {
                'laravel-package-skeleton': resolve(__dirname, 'resources/js/laravel-package-skeleton.js'),
            },
            output: {
                // Noms fixes, sans empreinte : les vues les référencent en dur
                // via LaravelPackageSkeleton::assetUrl(). Le cache est cassé par le
                // paramètre ?v= porté par cette méthode.
                entryFileNames: '[name].js',
                assetFileNames: '[name][extname]',
                // iife : chargeable par une balise <script> classique, sans
                // type="module". Contrepartie : une seule entrée possible.
                // Passer à 'es' le jour où le code-splitting devient utile.
                format: 'iife',
            },
        },
    },
})
