import defaultTheme from "tailwindcss/defaultTheme";
const plugin = require("tailwindcss/plugin");
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                milk: "#f5f5f7",
                brand: {
                    300: "#90A955",
                    400: "#596934",
                    500: "#3f4a25",
                    600: "#2d3520",
                },
                neutral: {
                    150: "#EBEBEB",
                },
                upcoming: {
                    light: "#E1F1E9",
                    main: "#3f4a25",
                },
                ongoing: {
                    light: "#FFF2E0",
                    main: "#FF9904",
                },
                completed: {
                    light: "#E0F6FB",
                    main: "#00B5DD",
                },
                cancelled: {
                    light: "#ECEBF4",
                    main: "#6258A6",
                },
                noshows: {
                    light: "#fae0e0",
                    main: "#642727",
                },
            },
            size: {
                17: "4.25rem",
                18: "4.5rem",
                19: "4.75rem",
            },
            fontFamily: {
                clash: ["ClashDisplay-Variable", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
            },
            gridTemplateColumns: {
                3: "repeat(3, minmax(0, 1fr))",
            },
            screens: {
                "3xl": "1600px", // Custom 3X large devices
                "4xl": "1920px", // Custom 4X large devices
                ultra: "2560px",
            },
        },
    },
    plugins: [],
    darkMode: "class",
};
