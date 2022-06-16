module.exports = {
    mode: "jit",
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio"),
        require("daisyui"),
    ],
    theme: {
        extend: {
            backgroundImage: {
                hero: "url(/vendor/assets/img/hero.png)",
            },
        },
    },
    daisyui: {
        themes: ['winter'],
        darkTheme: "dark",
    },
};
