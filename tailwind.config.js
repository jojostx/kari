const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
        extend: {
            fontFamily: {
                sans: ["'Montserrat'"],
                vesp: 'bely-display',
                dm: 'DM Sans',
            },
            backgroundImage: {
                'pent': "url('/images/bg-penthouse.jpg')",
                'pent-mobile': "url('/images/bg-penthouse-mobile.jpg')",
                'point': "url('/images/bg-point-mobile.jpg')",
                'point-mobile': "url('/images/bg-point-mobile.jpg')",
                'prism': "url('/images/subtle-prism.svg')",
            },
            screens: {
                xs: '320px',
                '2xs': '360px',
                md: '720px'
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],

};