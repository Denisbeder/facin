const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
const appHost = new URL(process.env.APP_URL).host;

// Copies
mix.copyDirectory("resources/svg/**", "public/vendor/assets/svg");

// Scripts
mix.js("resources/js/app.js", "public/vendor/assets/js").version();

// Styles with Tailwind
mix.sass("resources/scss/app.scss", "public/vendor/assets/css")
    .options({
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .version();

mix.browserSync({
    proxy: `app.${appHost}`,
    open: false,
});
