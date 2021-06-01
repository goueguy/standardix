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
        primary: {
          DEFAULT: '#03bfae',
        },
        yellow: {
          DEFAULT: '#FFD70F',
        },
        gray: {
          DEFAULT: '#E5E5E5',
        },
        medium: {
         DEFAULT: '#2E3A59',
        }
      },
      fontFamily: {
        'light': ['Gilroy-Light'],
        'display': ['Gilroy-ExtraBold', 'Gilroy-Light'],
        'body': ['Gilroy-ExtraBold', 'Gilroy-Light']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
