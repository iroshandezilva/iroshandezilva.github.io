const cssnano = require('cssnano');

module.exports = {
  plugins: [
      require('tailwindcss'),
      cssnano({
        preset:'default',
      }),
    require('tailwindcss'),
    require('autoprefixer'),
  ]
}