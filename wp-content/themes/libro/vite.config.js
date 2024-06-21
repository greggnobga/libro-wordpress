import { defineConfig } from 'vite';
import { svelte } from '@sveltejs/vite-plugin-svelte';
import { resolve } from 'path';
import fs from 'fs';

export default defineConfig({
    plugins: [svelte()],

    root: '',
    base: process.env.NODE_ENV === 'development' ? '/' : '/assets/bundle',

    build: {
        outDir: resolve(__dirname, './assets/bundle'),
        emptyOutDir: true,
        manifest: false,
        target: 'es2018',

        rollupOptions: {
            input: {
                main: resolve(__dirname + '/src/main.js'),
            },

            output: {
                entryFileNames: `[name].js`,
                chunkFileNames: `[name].js`,
                assetFileNames: `[name].[ext]`,
            },
        },

        minify: true,
        write: true,
    },

    server: {
        cors: true,
        strictPort: true,
        port: 3000,

        https: false,

        hmr: {
            host: 'localhost',
        },
    },

    resolve: {
        alias: {
            $lib: '/src/lib',
        },
    },
});
