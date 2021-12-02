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
        extend: {
            fontFamily: {
                sans: ["'Source Sans Pro'"],
                mont: 'Montserrat',
            },
        },
        fontSize: {
            'xs': ['14px', { lineHeight: '24px', letterSpacing: '-0.01em' }],
            'sm': ['16px', { lineHeight: '28px', letterSpacing: '-0.01em' }],
            'lg': ['18px', { lineHeight: '28px', letterSpacing: '-0.01em' }],
            'xl': ['24px', { lineHeight: '36px', letterSpacing: '-0.01em' }],
            '2xl': ['36px', { lineHeight: '48px', letterSpacing: '-0.032em' }],
            '3xl': ['48px', { lineHeight: '56px', letterSpacing: '-0.032em' }],
            '4xl': ['56px', { lineHeight: '64px', letterSpacing: '-0.032em' }],
            '5xl': ['80px', { lineHeight: '80px', letterSpacing: '-0.032em' }],
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};