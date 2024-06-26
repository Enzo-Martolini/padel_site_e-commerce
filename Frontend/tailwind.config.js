/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./components/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        'lobster-two': ['"Lobster Two"', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
