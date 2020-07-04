/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Admin to handle various user submitted forms
 * ==============================================
 */
import {setAuthorizationHeader, accessToken, handle401} from "../../../../helpers/helpers";

export const _user_form_data_actions = {
    getUserContactForms() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get('/admin/contact-form').then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    deleteUserContactForm({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/contact-form/${ payload.id }`).then(response => resolve(response)).catch(error => {
                handle401();
                reject(error.response);
            });
        });
    },
};
