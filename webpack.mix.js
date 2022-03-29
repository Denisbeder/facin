const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
const appHost = new URL(process.env.APP_URL).host;

// Copies
mix.copyDirectory("resources/img/**", "public/vendor/assets/img")
    .copyDirectory("resources/svg/**", "public/vendor/assets/svg");

// Scripts
mix.js("resources/js/app.js", "public/vendor/assets/js");

// Styles with Tailwind
mix.sass("resources/scss/app.scss", "public/vendor/assets/css")
    .options({
        postCss: [tailwindcss("./tailwind.config.js")],
    });

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
    proxy: `app.${appHost}`,
    open: false,
});
