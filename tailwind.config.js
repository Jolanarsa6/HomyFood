import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Cairo", "ui-sans-serif", "system-ui", "sans-serif"],
                    },
                    colors: {
                        "homy-green": {
                            100: "#E8EFEA",
                            500: "#225E38",
                            600: "#1C4D2E",
                            700: "#1A472A",
                        },
                        "homy-gold": {
                            50: "#FDFBF6",
                            100: "#F6EEDA",
                            200: "#EAD5AC",
                            400: "#D4B87E",
                            500: "#C4A462",
                            600: "#A88E53",
                        },
                    },
                },
            },

    plugins: [require("@tailwindcss/forms")],
};


