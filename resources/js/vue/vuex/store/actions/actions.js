/**
 * VueX - Mutation Actions
 * ===========================================
 * Here we'll register our mutation actions.
 * ===========================================
 */

import { adminActions } from "./_admin-actions/_admin_actions";
import { appActions } from "./_app-actions/_app_actions";
import { authActions } from "./_auth-actions/_auth";

export const actions = {
    ...authActions , ...adminActions, ...appActions,
    storeAssetURL({ commit }, payload) {
        commit('mutateAssetURL', { URL: payload.URL });
    },
};
