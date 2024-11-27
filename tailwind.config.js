import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    500: '#3b82f6',
                    600: '#2164d1'
                },
                warning: {
                    500: '#ff752c',
                    600: '#cd5a2a',
                },
                success: {
                    500: '#569c3d',
                    600: '#446d34',
                },
                danger: {
                    500: '#da2323',
                    600: '#af0000',
                }
            },
        },
    },
    plugins: [
        require('daisyui'),
    ],
};
