const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
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
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
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
                'bridge': "url('/images/london-bridge.jpg')",
                'bridge-mobile': "url('/images/london-bridge-mobile.jpg')",
                'prism': "url('/images/subtle-prism.svg')",
            },
            screens: {
                xs: '320px',
                '2xs': '360px',
                md: '720px'
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],
};