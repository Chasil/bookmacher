import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
    }
});

setTimeout(() => {
    const fs = require('fs');
    fs.writeFile('public/hot', 'http://localhost:5173', () => {});
}, 5000);
