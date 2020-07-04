/**
 * Remove Authorization Data
 * ====================================
 * Remove Access Token, Refresh Token,
 * Access Token Expiry Time From Local
 * Storage
 * ====================================
 */

export const removeAuthorizationData = () => {
    localStorage.removeItem(CryptoJS.SHA3('role').toString());
    localStorage.removeItem(CryptoJS.SHA3('access_token').toString());
    localStorage.removeItem(CryptoJS.SHA3('refresh_token').toString());
    localStorage.removeItem(CryptoJS.SHA3('access_token_expiry').toString());
};
