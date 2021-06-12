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
            '50': '#f2fcf9',
            '100': '#e6f9f4',
            '200': '#bff0e3',
            '300': '#99e7d2',
            '400': '#4dd4b1',
            '500': '#00c28f',
            '600': '#00af81',
            '700': '#00926b',
            '800': '#007456',
            '900': '#005f46'
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
        'card': '40px 30px 50px 0px rgba(11, 34, 56, 0.07) !important',
      },
      borderRadius: {
        'card': '20px',
        'full': '9999px',
      },
      fontSize: {
        'title': '4.375rem',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
