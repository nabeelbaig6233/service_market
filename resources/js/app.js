/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// Bootstrap
require('./bootstrap');

// Axios:
axios.defaults.baseURL = 'http://localhost/service_market/public/api';

//  Crypto JS
window.CryptoJS = require('crypto-js');

// Font Awesome:
require('@fortawesome/fontawesome-free/js/all.min');

// owl.carousel
require('owl.carousel');

// Wow js
window.WOW = require('wowjs');

// Custom Js
require('./front/theme-script');
