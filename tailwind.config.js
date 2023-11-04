/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        fontFamily:{
            roboto: ['Roboto']
        },
        screens: {
            'mini': '332px',
            // => @media (min-width: 640px) { ... }
          },
      },
    },
    plugins: [
        require('flowbite/plugin'),
        require ( 'tailwind-scrollbar' ) ,
    ],
  }
