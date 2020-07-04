/**
 * Handles 401 Response Code Error
 * =======================================================
 * Sometimes, if a server request responds with error 401
 * (Unauthorized) then we'll nuke the Local Storage and
 * redirect the user to Admin Login Page
 * =======================================================
 */

import { removeAuthorizationData } from "./removeAuthorizationData";
import { router } from "../../router/vue-router";

export const handle401 = error => {
    if (error.status === 401) {
        removeAuthorizationData();
        router.push({ name: 'admin.login' });
    }
};
