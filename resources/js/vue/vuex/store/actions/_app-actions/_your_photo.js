/**
 * VueX - App Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * front application for "Your Photo Page"
 * ==============================================
 */

export const _your_photo_actions = {
    getAllAlbums() {
        return new Promise((resolve, reject) =>
            axios.get(`/my-albums`).then(response => resolve(response)).catch(error => reject(error.response))
        );
    }
};
