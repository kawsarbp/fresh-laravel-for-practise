/** @type {import('tailwindcss').Config} */
import withMT from "@material-tailwind/html/utils/withMT";
import defaultTheme from "tailwindcss/defaultTheme";
export default withMT({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: defaultTheme.colors
        },
    },
    plugins: [],
})

