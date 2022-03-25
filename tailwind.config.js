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
    ],
    theme: {
        borderColor: (theme) => ({
            DEFAULT: theme("colors.slate.100", "currentColor"),
            ...theme.colors,
        }),
        extend: {
            listStyleType: {
                roman: "upper-roman",
            },
        },
    },
};
