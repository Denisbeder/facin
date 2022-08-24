import { defineConfig } from "vite";
import { viteStaticCopy } from 'vite-plugin-static-copy'
import laravel from "laravel-vite-plugin";

export default defineConfig({
    build: {
        assetsDir: "",
    },
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            buildDirectory: "vendor/assets",
            refresh: ["resources/routes/**", "routes/**", "resources/views/**"],
        }),
        viteStaticCopy({
            targets: [
                { src: "resources/img/**", dest: "img" },
                { src: "resources/svg/**", dest: "svg" },
            ],
        }),
    ],
});
