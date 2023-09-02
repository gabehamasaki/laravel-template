import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import path from 'path';

const env = loadEnv(
    'mock',
    process.cwd(),
    '');

export default defineConfig({
    server: {
        host: env.APP_URL.replace('http://', ''),  // Add this to force IPv4 only
    },
    plugins: [
        vue({
            template: {
              transformAssetUrls: {
                base: null,
                includeAbsolute: false,
              },
            },
          }),
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/js",
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            vue: "vue/dist/vue.esm-bundler.js",
        }
    }
});
