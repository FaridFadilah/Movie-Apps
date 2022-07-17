/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
  ],
  theme: {
    fontFamily:{
      "sans" : ['Roboto', "sans-serif"]
    },
    extend: {
      container: {
        center: true,
        padding: "1rem"
      },
      colors : {
        "hero-section" : "#121926",
        "navbar" : "#04293A",
        "navbar-search" : "#04293a",
        "navbar-hover" : "#D6EFED"
      }
    },
  },
  plugins: [],
}
