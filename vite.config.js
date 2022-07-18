import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    build: {
        assetsDir: "",
    },
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            buildDirectory: "vendor/assets",
            refresh: ["resources/routes/**", "routes/**", "resources/views/**"],
        }),
        /* copy({
            targets: [
                { src: "resources/img/**", dest: "public/vendor/assets" },
                { src: "resources/svg/**", dest: "public/vendor/assets" },
            ],
        }), */
    ],
});
