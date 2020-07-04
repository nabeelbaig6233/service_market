/**
 * VueX - App Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * front application for "Album Cover Page" &&
 * "Album Pictures Page"
 * ==============================================
 */

export const _album_cover_actions = {
    getAlbumCover({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.get(`/my-album/cover/${payload.album_id}`).then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
    authenticateAlbumPassword({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.post(`/my-album/authenticate/${payload.album_id}`, { password: payload.album_password }).then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
    getAlbumPictures({ commit }, payload) {
        if (payload.paginated) {
            return new Promise((resolve, reject) =>
                axios.post(payload.paginatedURL, { temp_access_token: payload.temp_access_token }).then(response => resolve(response)).catch(error => reject(error.response))
            );
        } else {
            return new Promise((resolve, reject) =>
                axios.post(`/my-album/pictures/${payload.album_id}`, { temp_access_token: payload.temp_access_token }).then(response => resolve(response)).catch(error => reject(error.response))
            );
        }
    },
    closeMyAlbum({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.get(`/my-album/close/${payload.album_id}`).then(response => resolve(response)).catch(error => reject(error.response))
        );
    }
};
