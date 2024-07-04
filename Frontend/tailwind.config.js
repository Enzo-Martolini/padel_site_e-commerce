/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,css,js,jsx}", "./components/*.{js,ts,jsx,tsx}", "/pages/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        "lobster-two": ['"Lobster Two"', "sans-serif"],
      },
    },
  },
  plugins: [],
};
