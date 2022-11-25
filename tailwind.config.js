/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    darkMode: 'class',
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./app/Enums/*.php",
    ],
    theme: {
        extend: {},
    },
    corePlugins: {
        aspectRatio: false,
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
