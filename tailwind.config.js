module.exports = {
  purge: [
      './public/**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: "15px"
    },

    extend: {
      fontFamily: {
        sans: ['Inter var'],
      },
      colors: {
        base:{
          primary: {
            '50': '#fffbf2',
            '100': '#fff6e6',
            '200': '#ffe9c0',
            '300': '#ffdb9a',
            '400': '#ffc04f',
            '500': '#ffa503',
            '600': '#e69503',
            '700': '#bf7c02',
            '800': '#996302',
            '900': '#7d5101'
          },
          yellow: "#00C28F",
          black: "#221F23",
          light: "#f2fcf9",

        }
      },
      spacing: {
        '70': '70px',
      },
      boxShadow: {
        'card': '40px 30px 50px 0px rgba(11, 34, 56, 0.07)',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
