/**
 * Set Authorization Header In Axios
 * ====================================
 * Set "Authorization" header in Axios
 * Request
 * ====================================
 */

export const setAuthorizationHeader = token => axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
