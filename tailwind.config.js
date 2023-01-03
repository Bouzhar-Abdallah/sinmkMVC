/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["app/views/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'worange': '#2B2D42',
        'cadeth': '#404363',
        'cadethh': '#DADBE7',
        
        }
    },
  },
  plugins: [],
}
