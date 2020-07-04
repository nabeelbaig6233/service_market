/**
 * Set Authorization Data
 * ================================
 * Set Access Token, Refresh Token,
 * Access Token Expiry Time In
 * Local Storage
 * ================================
 */

// Token Values That Are Going To Be Stored In Local Storage
const valuesToSore = ['access_token', 'refresh_token', 'access_token_expiry'];

export const setAuthorizationData = data => {
    for (let [key, value] of Object.entries(data)) {
        if (valuesToSore.includes(key)) {
            localStorage.setItem(CryptoJS.SHA3(key).toString(), value);
        }
    }
};
