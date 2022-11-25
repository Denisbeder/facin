import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/assets/scss/app.scss',
                'resources/assets/js/app.js',
                'resources/assets/svg/logo.svg',
            ],
            refresh: true,
        }),
    ],
});
