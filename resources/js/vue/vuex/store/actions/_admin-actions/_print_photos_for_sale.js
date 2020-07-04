/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Admin to handle user print photos for sale
 * management
 * ==============================================
 */

import { setAuthorizationHeader, accessToken, handle401 } from "../../../../helpers/helpers";

export const _print_photos_for_sale_actions = {
    getAllSalesPictures() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get('/admin/prints/photos').then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    deleteSalePicture({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/prints/photo/${payload}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        })
    },
    getSalePictureInquirers() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get(`/admin/prints/photos/inquirers`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    getSalePictureInquirerInquiredPhotos({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get(`/admin/prints/photos/inquirer/pictures/${payload}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    deleteSalePictureInquirer({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/prints/photos/inquirer/${payload}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    deleteAllSalePictures() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete('/admin/prints/photos').then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
};
