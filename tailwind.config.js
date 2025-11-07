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
            // GrowPath Design System
            colors: {
                // Primary Colors
                'primary-brand': '#0F172A',
                'primary-accent': '#3B82F6',
                'secondary-accent': '#8B5CF6',

                // Neutral Palette
                neutral: {
                    50: '#F8FAFC',
                    100: '#F1F5F9',
                    200: '#E2E8F0',
                    300: '#CBD5E1',
                    400: '#94A3B8',
                    500: '#64748B',
                    600: '#475569',
                    700: '#334155',
                    800: '#1E293B',
                    900: '#0F172A',
                },

                // Semantic Colors
                success: '#10B981',
                warning: '#F59E0B',
                error: '#EF4444',
                info: '#3B82F6',
            },

            fontFamily: {
                sans: ['Inter', 'SF Pro Display', '-apple-system', ...defaultTheme.fontFamily.sans],
                mono: ['JetBrains Mono', 'Fira Code', ...defaultTheme.fontFamily.mono],
            },

            fontSize: {
                'xs': ['0.75rem', { lineHeight: '1.4' }],      // 12px
                'sm': ['0.875rem', { lineHeight: '1.5' }],     // 14px
                'base': ['1rem', { lineHeight: '1.6' }],       // 16px
                'lg': ['1.125rem', { lineHeight: '1.7' }],     // 18px
                'xl': ['1.25rem', { lineHeight: '1.4' }],      // 20px
                '2xl': ['1.5rem', { lineHeight: '1.3' }],      // 24px
                '3xl': ['2rem', { lineHeight: '1.25' }],       // 32px
                '4xl': ['2.5rem', { lineHeight: '1.2' }],      // 40px
                '5xl': ['3.5rem', { lineHeight: '1.1' }],      // 56px
            },

            spacing: {
                // 8-point grid system (extends default)
                '18': '4.5rem',   // 72px
                '112': '28rem',   // 448px
                '128': '32rem',   // 512px
            },

            maxWidth: {
                'prose': '640px',
                'content': '768px',
                'dashboard': '1024px',
                'full-width': '1280px',
                'container': '1536px',
            },

            borderRadius: {
                'DEFAULT': '6px',
                'card': '8px',
            },

            boxShadow: {
                'card': '0 1px 3px rgba(0, 0, 0, 0.1)',
                'card-hover': '0 4px 6px rgba(0, 0, 0, 0.1)',
            },

            animation: {
                'float': 'float 6s ease-in-out infinite',
                'slide-up': 'slide-up 0.5s ease-out',
                'fade-in': 'fade-in 0.4s ease-out',
            },

            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                'slide-up': {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                'fade-in': {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
            },
        },
    },

    plugins: [forms],
};
