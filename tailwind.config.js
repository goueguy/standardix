module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            medium: {
                DEFAULT: '#2E3A59'
            }
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
