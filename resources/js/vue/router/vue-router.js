/**
 * Vue Router - The Application's Front End Router
 * ===============================================
 * Here we'll load and initialize our routes.
 * ===============================================
 */

import Vue from 'vue';
import VueRouter from 'vue-router';
import { routes } from "./routes";

Vue.use(VueRouter);

export const router = new VueRouter({
    routes, mode: 'history',
});
