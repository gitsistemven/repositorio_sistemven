import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/css/style.css', 
                'resources/css/all.css',
                'resources/css/normalize.css',
                 'resources/css/mdb.min.css',
                 'resources/js/app.js',
                 'resources/js/fslightbox.js',
                 'resources/js/main.js',
                 'resources/js/sweetalert2.js',
                 'resources/js/mdb.min.js'
            ],
            refresh: true,
        }),
    ],
});
