/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Admin to handle user albums management
 * ==============================================
 */

import {setAuthorizationHeader, accessToken, handle401} from "../../../../helpers/helpers";

export const _user_albums_actions = {
    getUserAlbums({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get(`/admin/albums?per_page=${payload.per_page}&search_column=${payload.search_column}&page=${payload.page}&column=${payload.column}&direction=${payload.direction}&search_operator=${payload.search_operator}&search_input=${payload.search_input}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    createUserAlbum({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.post('/admin/album', payload).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    updateUserAlbum({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.post(`/admin/album/${ payload.id }`, { _method: 'PATCH', ...payload.data }).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    deleteUserAlbum({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/album/${ payload.id }`).then(response => resolve(response)).catch(error => {
                handle401();
                reject(error.response);
            });
        });
    },
    getAllCustomers() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get(`/admin/users`).then(response => resolve(response)).catch(error => {
                handle401();
                reject(error.response);
            });
        })
    },
    deleteAllUserAlbums() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete('/admin/albums').then(response => resolve(response)).catch(error => {
                handle401();
                reject(error.response);
            });
        });
    },
};
