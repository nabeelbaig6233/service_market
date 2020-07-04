/**
 * Set Authorization Header On Axios Requests
 * =========================================================
 * Add "access_token" from localStorage to every axios
 * request as "Bearer {access_token}" on "Authorization"
 * Header
 * =========================================================
 */
import {accessToken, baseURL} from "../helpers";

export const authorizeAdmin = (to, from, next) => {
    if (accessToken() === null) {
        next({ name: 'admin.login' });
    } else {
        localStorage.getItem(CryptoJS.SHA3('role').toString()) === CryptoJS.SHA3('admin').toString() ? next() : location = baseURL;
    }
};
