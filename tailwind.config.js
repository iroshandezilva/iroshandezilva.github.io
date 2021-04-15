module.exports = {
  purge: {
    mode:'layers',
    content:['/public/**/*.html/'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: "15px"
    },
    extend: {
      colors: {
        yellow: "#ffa503",
        black: "#222224",
        light: "#ECF2F9",
      },
      spacing: {
        '70': '70px',
      },
      fontFamily: {
        'proxima-lt': ['Proxima Nova Alt Th'],
        'proxima-rg': ['Proxima Nova Rg'],
        'proxima-md': ['Proxima Nova Th'],
        'proxima-bl': ['Proxima Nova Bl'],
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
