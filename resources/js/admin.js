/**
 * 1. Global Libraries:
 * =========================================================================================
 * These are the Global Libraries that are used in almost every Laravel Projects. These
 * includes Bootstrap, Axios & jQuery. So we'll include them separately here in this
 * section. Of course, these are not fixed rules, so you can define your own libraries here
 * according to your preferences.
 * =========================================================================================
 */

// 1. Axios:
window.axios = require('axios');
axios.defaults.baseURL = 'http://localhost/service_market/public/api';

// 2. jQuery:
window.$ = window.jQuery = require('jquery');

// 4. Crypto JS
window.CryptoJS = require('crypto-js');

/**
 * 2. Global Libraries Configuration Files
 * =========================================================================================
 * Here, you can include the configuration files/code to configure the Global Libraries.
 * Like setting the Header in every Axios request.
 * =========================================================================================
 */


/* ====================================================================================== */

// Custom Js
require('./front/theme-script');



/*
 * 3. Project Dependent Libraries:
 * =========================================================================================
 * These are Project Dependent Libraries. Unlike Global Libraries, these are not necessarily
 * included in every Laravel Project. They include Owl Carousel, AOS, Lodash etc. Like
 * Global Libraries, you can also change them as per your needs.
 * =========================================================================================
 */

//
/* ====================================================================================== */





/**
 * 4. Project Dependent Libraries Configuration Files
 * =========================================================================================
 * Here, you can include the configuration files/code to configure the Project Dependent
 * Libraries. Like initializing something.
 * =========================================================================================
 */

//
/* ====================================================================================== */





/**
 * 5. Custom JavaScript Files
 * =========================================================================================
 * These are Global Custom JavaScript files/code. These files or code is meant to run on
 * every single page or most of the pages of your website. So, this is the best place to
 * include them here.
 * =========================================================================================
 */

//
/* ====================================================================================== */





/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
