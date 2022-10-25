import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        vue({
            template : {
                transformAssetUrls : {
                    base : null,
                    includeAbsolute : false
                }
            }
        }),
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
        }),
    ],
});
