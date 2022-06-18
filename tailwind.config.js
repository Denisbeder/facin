module.exports = {
    mode: "jit",
    darkMode: 'class',
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
        borderColor: (theme) => ({
            DEFAULT: 'hsl(var(--bc) / .05)',
            ...theme.colors
        }),
        extend: {
            backgroundImage: {
                hero: "url(/vendor/assets/img/hero.png)",
            },
        },
    },
    daisyui: {
        themes: ['light'],
        darkTheme: "dark",
    },
};
