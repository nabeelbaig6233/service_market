/**
 * VueX - State Getters
 * ==================================================
 * Here we'll register our  properties/states getters
 * ==================================================
 */

import { appGetters } from "./_app-getters/_app_getters";
import { adminGetters } from "./_admin-getters/_admin_getters";

export const getters = {
    ...appGetters, ...adminGetters,
    getAssetURL(state) {
        return state.assetURL;
    },
};
