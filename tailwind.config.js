/** @type {import('tailwindcss').Config} */
export default {
content: [
"./resources/**/*.blade.php",
"./resources/**/*.js",
"./resources/**/*.vue",
], theme: {
extend: {
  colors: {
    "primary": "#E50914",
    "secondary": "#FFD166",
    "component":"#404040",
    "subtle": "#CCCCCC"
  },
  fontFamily: {
    trade: ["Trade Winds", "system-ui"],
    yellowTTail: ["Yellow Tail", "cursive"],
    poppins: ["Poppins", "sans-serif"],
    supermercado: ["Supermercado One", "sans-serif"],
    buttons: ["Seaweed Script", "cursive"],


  },
},
},
plugins: [],
}
