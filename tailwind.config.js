module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
<<<<<<< HEAD
    extend: {
      zIndex: {
        "-1": "-1",
      },
      transformOrigin: {
        "0": "0%",
      },
    },
=======
    extend: {},
>>>>>>> 4105fddd429198f3a06b11bdf49215979fb1b601
  },
  variants: {
    extend: {
      opacity: ['disabled'],
<<<<<<< HEAD
      borderColor: ['responsive', 'hover', 'focus', 'focus-within'],
=======
>>>>>>> 4105fddd429198f3a06b11bdf49215979fb1b601
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
