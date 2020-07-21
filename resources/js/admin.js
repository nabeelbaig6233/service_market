// Bootstrap
require('./bootstrap');

// Axios:
axios.defaults.baseURL = 'http://localhost:8080/service_market/public/api';

//  Crypto JS
window.CryptoJS = require('crypto-js');

// Custom js
require('./admin/custom');
