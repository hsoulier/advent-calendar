const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Cabinet Grotesk",
                    "Nunito",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                palette: {
                    orange: "#fb5012ff",
                    blue: "#01fdf6ff",
                    lavender: "#cbbaedff",
                    yellow: "#e9df00ff",
                    green: "#03fcbaff",
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
