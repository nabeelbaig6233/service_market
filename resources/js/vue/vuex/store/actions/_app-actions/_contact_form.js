/**
 * VueX - App Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * front application
 * ==============================================
 */

export const _contact_from_actions = {
    submitContactForm({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.post('/contact-form', payload).then(response => resolve(response)).catch(error => reject(error.response)));
    },
};
