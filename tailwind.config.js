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
                'primary-accent': 'var(--primaryAccent)',
                secondary: 'var(--secondary)',
                'secondary-accent': 'var(--secondaryAccent)',
                danger: 'var(--danger)',
                'danger-accent': 'var(--dangerAccent)',
                success: 'var(--success)',
                'success-accent': 'var(--successAccent)',
                warning: 'var(--warning)',
                'warning-accent': 'var(--warningAccent)',
                info: 'var(--info)',
                'info-accent': 'var(--infoAccent)',
            },
            backgroundColor: {
                light: 'var(--light)',
                muted: 'var(--muted)',
                base: 'var(--base)',
                dark: 'var(--dark)',
                primary: 'var(--primary)',
                'primary-accent': 'var(--primaryAccent)',
                secondary: 'var(--secondary)',
                'secondary-accent': 'var(--secondaryAccent)',
                danger: 'var(--danger)',
                'danger-accent': 'var(--dangerAccent)',
                success: 'var(--success)',
                'success-accent': 'var(--successAccent)',
                warning: 'var(--warning)',
                'warning-accent': 'var(--warningAccent)',
                info: 'var(--info)',
                'info-accent': 'var(--infoAccent)',
            },
        },
    },

    plugins: [forms],
};
