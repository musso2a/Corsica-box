const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],

            },
        },
        objectPosition: {
            bottom: 'bottom',
            center: 'center',
            left: 'left',
            'left-bottom': 'left bottom',
            'left-top': 'left top',
            right: 'right',
            'right-bottom': 'right bottom',
            'right-top': 'right top',
            top: 'top',
            'center-bottom': 'center bottom',
            'center-top': 'center top',
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            scrollbar: ['dark']
        },
    },

    plugins: [require('@tailwindcss/forms'),
        require('tailwind-scrollbar'),
        [require('@tailwindcss/forms'),]
    ],

};
