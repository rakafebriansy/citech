npm install -D tailwindcss
npx tailwindcss init
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch

@tailwind base;
@tailwind components;
@tailwind utilities;

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
}