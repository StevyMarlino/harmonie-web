import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const folder = {
    src: "resources/", // source files
    src_assets: "resources/", // source assets files
    dist: "public/", // build files
    dist_assets: "public/build/" //build assets files
};

export default defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: folder.dist_assets,
        cssCodeSplit: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css'],
            refresh: true,
        }),
    ],
});
