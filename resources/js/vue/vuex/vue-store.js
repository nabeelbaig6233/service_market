/**
 * VueX - The Central State Management
 * ==============================================
 * Here we'll load and initialize all our states,
 * getters, mutations and actions.
 * ==============================================
 */

import Vue from 'vue';
import Vuex from 'vuex';
import { states, getters, mutations, actions } from "./store-organizer";

Vue.use(Vuex);

export const store = new Vuex.Store({ states, getters, mutations, actions });
