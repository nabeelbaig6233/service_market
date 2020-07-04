/**
 * VueX - App Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * front application's prints photos
 * ==============================================
 */

export const _prints_photos_actions = {
    authenticateVisitor({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.post('/visitor/welcome', { temp_access_token: payload }).then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
    createOrRefreshIncomingVisitor({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.post('visitor/create-or-refresh', payload).then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
    getSalePictures() {
        return new Promise((resolve, reject) =>
            axios.get('/visitor/prints/pictures').then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
    inquireForPrintPhoto({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.post('/visitor/picture/inquire', payload).then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
};
