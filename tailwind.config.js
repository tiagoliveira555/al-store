import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Poppins', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            base: {
                'gray-100': '#A1A1A1',
                'gray-200': '#676767',
                'gray-300': '#2A2A2A',
                'black-100': '#1A1A1A',
                'black-200': '#0B0B0B',
                'green-100': '#1E7F14',
                'green-200': '#165F0F',
            }
        },
        backgroundImage: {
            'base-gradient': "linear-gradient(45deg, #165F0F 0%, #165F0F66 100%)",
        }
    },
  },
  plugins: [],
}

