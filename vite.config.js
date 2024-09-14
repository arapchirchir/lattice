import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/lattice.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/functions.js',
            ],
            refresh: true,
        }),
    ],
});
