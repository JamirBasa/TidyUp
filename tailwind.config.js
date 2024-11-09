import defaultTheme from 'tailwindcss/defaultTheme';
const plugin = require('tailwindcss/plugin');
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
            colors: {
                milk: "#f5f5f7",
                brand: {
                    400: "#596934",
                    500: "#3f4a25",
                    600: "#2d3520",
                },
                neutral: {
                    150: '#EBEBEB'
                }
            },
            size: {
                17: "4.25rem",
                18: "4.5rem",
                19: "4.75rem",
            },
            fontFamily: {
                clash: ['ClashDisplay-Variable', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
            },
            gridTemplateColumns: {
                3: 'repeat(3, minmax(0, 1fr))',
            },
        },
        // screens: {
        //     'phone': '480px',
        //     // => @media (min-width: 480px) { ... }

        //     'tablet': '640px',
        //     // => @media (min-width: 640px) { ... }
      
        //     'laptop': '1024px',
        //     // => @media (min-width: 1024px) { ... }
      
        //     'desktop': '1280px',
        //     // => @media (min-width: 1280px) { ... }

        //     '1080p': '1920px',
        //     // => @media (min-width: 1920px) { ... }

        //     '1440p': '2560px',

        //     '4k': '3840px',
        //     // => @media (min-width: 3840px) { ... }
        //   },
    },
    plugins: [],
};
