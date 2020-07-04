/**
 * Get Access Token From Local Storage
 * ===================================
 */

export const accessToken = () => localStorage.getItem(CryptoJS.SHA3('access_token').toString());
export const refreshToken = () => localStorage.getItem(CryptoJS.SHA3('refresh_token').toString());
export const accessTokenExpiry = () => localStorage.getItem(CryptoJS.SHA3('access_token_expiry').toString());
