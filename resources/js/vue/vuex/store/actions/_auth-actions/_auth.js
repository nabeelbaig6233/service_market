/**
 * VueX - Authentication Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * authentication process
 * ==============================================
 */

import { setAuthorizationHeader, setAuthorizationData, removeAuthorizationData, accessToken } from "../../../../helpers/helpers";

export const authActions = {
    login({ commit, dispatch }, payload) {
        return new Promise((resolve, reject) => {
            axios.post('/login', payload).then(response => {
                setAuthorizationData(response.data);
                dispatch('setUserDetails').then(() => resolve());
            }).catch(error => {
                removeAuthorizationData();
                reject(error.response);
            });
        });
    },
    setUserDetails() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.get('/user').then(response => {
                localStorage.setItem(CryptoJS.SHA3('role').toString(), CryptoJS.SHA3(response.data.role).toString());
                resolve();
            }).catch(error => {
                localStorage.removeItem(CryptoJS.SHA3('role').toString());
                removeAuthorizationData();
                reject(error.response)
            });
        });
    },
    logout() {
        return new Promise((resolve, reject) => {
            setAuthorizationHeader(accessToken());
            axios.post('/logout').then(response => {
                removeAuthorizationData();
                localStorage.removeItem(CryptoJS.SHA3('role').toString());
                resolve(response);
            }).catch(error => reject(error.response));
        });
    },
};
