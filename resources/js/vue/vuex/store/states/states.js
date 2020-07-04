/**
 * VueX - States
 * ==================================================
 * Here we'll register our states
 * ==================================================
 */

import { adminStates } from "./_admin-states/_admin_states";
import { appStates } from "./_app-states/_app_states";

export const states = {
    ...adminStates, ...appStates,
    assetURL: null,
};
