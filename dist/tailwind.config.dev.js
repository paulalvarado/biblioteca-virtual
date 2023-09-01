"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

/** @type {import('tailwindcss').Config} */
var _default = {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {}
  },
  plugins: [require('@tailwindcss/forms'), require('flowbite/plugin')({
    charts: true,
    forms: true,
    tooltips: true
  })]
};
exports["default"] = _default;