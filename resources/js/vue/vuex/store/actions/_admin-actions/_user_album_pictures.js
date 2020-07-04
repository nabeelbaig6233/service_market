/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Admin to handle user album pictures management
 * ==============================================
 */

import { setAuthorizationHeader, accessToken, handle401 } from "../../../../helpers/helpers";

export const _user_album_pictures_actions = {
    getUserAlbumPictures({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get(`/admin/album/pictures/${payload.album_id}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        })
    },
    deleteAlbumPicture({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/album/picture/${payload}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    deleteAllAlbumPictures({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/album/pictures/${payload}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
};
