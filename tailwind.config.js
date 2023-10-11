import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            textColor: {
                light: 'var(--light)',
                muted: 'var(--muted)',
                base: 'var(--base)',
                dark: 'var(--dark)',
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
                danger: 'var(--danger)',
                success: 'var(--success)',
                warning: 'var(--warning)',
                info: 'var(--info)',
            },
            backgroundColor: {
                light: 'var(--light)',
                muted: 'var(--muted)',
                base: 'var(--base)',
                dark: 'var(--dark)',
                primary: 'var(--primary)',
                secondary: 'var(--secondary)',
                danger: 'var(--danger)',
                success: 'var(--success)',
                warning: 'var(--warning)',
                info: 'var(--info)',
            },
        },
    },

    plugins: [forms],
};
