/**
 * Importing & Initializing "Vue.js"
 * =========================================================================================
 * Now we will import and initialize the main Vue Module and Vue Dependencies here. All the
 * Vue Dependencies will be included in the main Vue Instance here.
 * =========================================================================================
 */

import Vue from 'vue';
import App from "./vue/components/App";
import { store } from "./vue/vuex/vue-store";
import { router } from "./vue/router/vue-router";


new Vue({
    el: '#app', router, store,
    components: {
        app: App
    },
});
/* ====================================================================================== */
