/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
        colors: {
          orange: {
              100: '#fff6e7',
          }
        }
    },
  },
  plugins: [],
}

