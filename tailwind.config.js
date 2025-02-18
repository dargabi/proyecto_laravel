import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js", // In case you use dynamic class names in JS
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Figtree",
                    ...defaultTheme.fontFamily.sans,
                    "sans-serif",
                ], // Add fallback for sans-serif
            },
            colors: {
                "enterprise-blue": "#007BFF", // Primary blue for enterprise
                "enterprise-dark-blue": "#003366", // Dark blue for accents
                "enterprise-gray": "#F1F1F1", // Light gray for backgrounds
                "enterprise-black": "#000000", // Black for text and key elements
                "enterprise-white": "#FFFFFF", // White for clean look
                "enterprise-dark-gray": "#333333", // Dark gray for text or darker sections
                "enterprise-light-gray": "#E6E6E6", // Light gray for borders or subtle elements
            },
        },
    },

    plugins: [forms, daisyui],

    daisyui: {
        themes: [
            {
                enterprise: {
                    primary: "#007BFF", // Bright enterprise blue
                    secondary: "#003366", // Darker blue for secondary elements
                    accent: "#1E2A47", // Midnight blue for contrasting accents
                    neutral: "#F1F1F1", // Soft gray for background
                    "base-100": "#FFFFFF", // Clean white for main background
                    "base-200": "#333333", // Dark gray for footer or text areas
                    "base-300": "#E6E6E6", // Light gray for borders or secondary backgrounds
                },
            },
        ],
    },
};
