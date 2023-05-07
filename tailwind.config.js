/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')

module.exports = {
  // content: ["./src/**/*.{html,js}"],
    theme: {
      extend: {
        colors: {
          'black': '#1D1E22',
          'black-light': '#202225',
          'gray': '#262A32',
      },
    },
  },
  plugins: [],
}