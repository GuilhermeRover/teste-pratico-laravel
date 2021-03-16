module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      zIndex: {
        "-1": "-1",
      },
      transformOrigin: {
        "0": "0%",
      },
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],
      borderColor: ['responsive', 'hover', 'focus', 'focus-within'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
