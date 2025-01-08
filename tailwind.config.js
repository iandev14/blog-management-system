module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...require('tailwindcss/defaultTheme').fontFamily.sans],
            },
            backgroundImage: {
                'hero-pattern': "url('/assets/images/background.jpg')",
            },
        },
    },
    plugins: [],
    safelist: [
        'bg-hero-pattern', // Safelist this class to ensure it is included in the CSS
    ],
};
