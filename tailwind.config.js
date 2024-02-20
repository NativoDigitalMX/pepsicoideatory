/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        backgroundImage: {
            banner: "url('/resources/images/bg_banner.png')",
        },
        colors: {
            blue: "#0079D3",
            lightBlue: "#E6EDF3",
            sharePointBlue: "#0A4678",
            gray: '#7F8390'
        },
        fontFamily: {
            sans: ["HelveticaNowDisplay", "Verdana", "sans-serif"],
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                sm: "1rem",
                md: "1rem",
                lg: "2rem",
            },
            center: true,
        },
    },
  },
  plugins: [],
}

