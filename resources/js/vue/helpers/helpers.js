/**
 * Helpers Registration
 * ========================================================
 * Register all helpers here and then use then everywhere
 * from here
 * ========================================================
 */

// 1. Route Helpers
export { prefixNames } from "./route-helpers/namePrefix";
export { prefixRoutes } from "./route-helpers/routePrefix";
export { authorizeAdmin } from "./route-helpers/authorizeAdmin";
export { guestAdmin } from "./route-helpers/guestAdmin";

// 2. Axios Helpers
export { setAuthorizationHeader } from "./axios-helpers/setAuthorizationHeader";

// 3. Local Storage Helpers
export { setAuthorizationData } from "./local-storage-helpers/setAuthorizationData";
export { removeAuthorizationData } from "./local-storage-helpers/removeAuthorizationData";
export { handle401 } from "./local-storage-helpers/handle401"
export { accessToken } from "./local-storage-helpers/getAuthorizationData";
export { refreshToken } from "./local-storage-helpers/getAuthorizationData";
export { accessTokenExpiry } from "./local-storage-helpers/getAuthorizationData";

// 4. Validations
export { validate } from "./validation-helpers/common-validators";

// 5. BaseURL ( For Redirection In Route Helpers )
export const baseURL = 'http://localhost/service_market/public';

// 6. Misc Helpers
export { trimChar } from "./misc-helpers/misc-helpers-01";
export { clean } from "./misc-helpers/misc-helpers-01";
export { uc_first } from "./misc-helpers/misc-helpers-01";
