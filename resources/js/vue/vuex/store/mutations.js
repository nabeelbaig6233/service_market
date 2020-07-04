/**
 * VueX - State Mutations
 * ====================================================
 * Here we'll register our properties/state mutations.
 * ====================================================
 */

export const mutations = {
    mutateAssetURL(state, payload) {
        state.assetURL = payload.URL;
    },
};
