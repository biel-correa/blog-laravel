/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                main: {
                    "primary": "#f43034",
                    "secondary": "#f5f5f5",
                    "accent": "#000",
                    "neutral": "#fff",
                    "base-100": "#ffffff",
                }
            }
        ]
    },
}

