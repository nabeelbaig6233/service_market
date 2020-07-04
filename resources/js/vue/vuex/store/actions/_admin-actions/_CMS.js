/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Admin CMS
 * ==============================================
 */
import {setAuthorizationHeader, accessToken, handle401} from "../../../../helpers/helpers";

export const _CMS_actions = {
    getHomePageCMSContent() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get('/admin').then(response => resolve(response)).catch(error => {
                handle401();
                reject(error.response);
            });
        });
    },
};
