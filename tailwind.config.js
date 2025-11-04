/** @type {import('tailwindcss').Config} */
    export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        contFamily: {
            'mont' : ['Monserrat']
        },
        container:{
            center: true,
        },
        extend: {
            gridTemplateColumns:{
                //Simple 16 columns grid
                '16' : 'repeat(16, minmax(0,1fr))',

                //Complex site-specific column configration
                'footer' : '200px minmax(900px, 1fr) 100px',
            },
             fontFamily: {
            sans: ['Roboto', 'ui-sans-serif', 'system-ui'],
            serif: ['Lora', 'ui-serif', 'Georgia'],
        },
        },
    },
    plugins: [],
    };
