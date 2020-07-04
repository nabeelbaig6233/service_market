/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// Axios:
window.axios = require('axios');
axios.defaults.baseURL = 'http://localhost/anwarhamidphotography/public/api';

require('./bootstrap');

// jQuery UI
import $ from 'jquery';
window.$ = window.jQuery = $;

// 5. Font Awesome:
require('@fortawesome/fontawesome-free/js/all.min');

// owl.carousel
require('owl.carousel');

// Wow js
window.WOW = require('wowjs');

// Custom Js
require('./front/theme-script');
