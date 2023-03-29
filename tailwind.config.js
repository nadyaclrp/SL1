/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                peach: "#CE7777",
                navy: "#2B3A55",
                softPeach: "#E8C4C4",
                cream: "#F2E5E5",
            },
        },
    },
    plugins: [],
};
