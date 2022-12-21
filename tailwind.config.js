const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                b3: '#092C4C',
                b4: '#0B5060',
                g1: '#333333',
                g2: '#4F4F4F',
                g3: '#828282',
                g4: '#BDBDBD',
                g5: '#E0E0E0',
                error: '#F45D5D',
                primary: '#1B92AC',
                success: '#27AE60',
                warning: '#E2A03B',
                'primary-light': '#EBF5F7',
                'success-light': '#D4EFDF',
                'warning-light': '#F9ECD8',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
