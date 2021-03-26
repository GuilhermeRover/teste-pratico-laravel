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
      animation: {
        'spin-slow': 'spin 4s linear infinite',
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
