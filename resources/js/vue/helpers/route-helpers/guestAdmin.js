/**
 * Check If User Is Not Authenticated
 * =========================================================
 * Check if user is not authenticated to authenticate as
 * guest
 * =========================================================
 */
import {accessToken} from "../helpers";

export const guestAdmin = (to, from, next) => {
    accessToken() === null ? next() : next({ name: 'admin.dashboard' });
};
