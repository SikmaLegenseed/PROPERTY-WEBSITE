// Example `tailwind.config.js` file

module.exports = {
  content: ["*.{html,php,js}"],
  important: true,
    theme: {
      fontFamily: {
        display: ['Gilroy', 'sans-serif'],
        body: ['Graphik', 'sans-serif'],
      },
      extend: {
      }
    },
    variants: {
      opacity: ['responsive', 'hover']
    }
  }