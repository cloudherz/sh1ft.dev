import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/.bundling/final.bundle.scss', 'resources/js/app.ts'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/ts",
        },
    },
    server: {
        host: '192.168.0.107',
        port: 5173,
        cors: {
            origin: [
                'http://192.168.0.107:8000',
                'http://127.0.0.1:8000',
            ],
            credentials: true
        }
    },
});
