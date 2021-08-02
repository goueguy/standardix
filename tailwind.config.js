    module.exports = {
    purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        screens: {
        'xs': {'max':'639px'},
        'sm': {'min':'640px'},
        'md': {'min':'768px', 'max':'1023px'},
        'lg': {'min':'1024px','max':'1279px'},
        'xl': {'min': '1280px','max':'1535px'},
        '2xl': {'min':'1536px'},
        '3xl': '1600px'
    },
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
        },
        graystandardix:"#efefef",
        bodygray:"#E5E5E5",
        },
        fontFamily: {
        'light': ['Gilroy-Light'],
        'display': ['Gilroy-ExtraBold', 'Gilroy-Light'],
        'body': ['Gilroy-ExtraBold', 'Gilroy-Light']
        },

        colors: {
            medium: {
                DEFAULT: '#2E3A59'
            }
        }
    },
    },
    variants: {
        display:[],
    extend: {},
    },
    plugins: [],
}
