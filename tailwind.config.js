const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      spacing: {
        88: '22rem',
        97: '27rem',
      },
      colors: {
        orange: colors.orange,
        bvr1: '#EF501F',
        bvr2: '#EF3700',
        bvr3: '#DF3400',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
