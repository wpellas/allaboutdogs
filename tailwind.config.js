/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./components/*.{php,html,js}"],
  theme: {
    extend: {
        screens: {
            xs: "480px",
            sm: "768px",
            md: "1024px",
            lg: "1280px",
            xl: "1536px"
            },
        colors: {
            "primary-special": "#ececec",
            "primary-100": "#0E8056",
            "primary-300": "#0D734D",
            "primary-500": "#063322",
            "secondary-100": "#BF2300",
            "secondary-300": "#731F0D",
            "secondary-500": "#330E06",
      },
      fontFamily: {
        "montserrat": ["Montserrat", "sans-serif"],
        "raleway": ["Raleway", "sans-serif"]
      }
    }
  }
}
