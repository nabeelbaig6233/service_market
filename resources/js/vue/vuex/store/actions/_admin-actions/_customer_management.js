/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Admin to handle customers
 * ==============================================
 */

import { setAuthorizationHeader, accessToken, handle401 } from "../../../../helpers/helpers";

export const _customer_management_actions = {
    getAllCustomers() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get('/admin/customers').then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        });
    },
    createNewCustomer({ commit }, payload) {
        return new Promise((resolve, reject) =>
            axios.post('/register', payload).then(response => resolve(response)).catch(error => reject(error.response))
        );
    },
    deleteSelectedCustomer({ commit }, payload) {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.delete(`/admin/customer/${payload}`).then(response => resolve(response)).catch(error => {
                handle401(error.response);
                reject(error.response);
            });
        })
    },
};
