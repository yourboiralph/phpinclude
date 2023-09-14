/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      'display': ['Dancing Script'],
    },
    extend: {
      colors:{
        primary: '#9DB2BF',
        secondary: '#DDE6ED',
        zebrakun: '#F4B400',
        darkerprimary: '#66727a'
      },
    },
  },
  plugins: [],
}

