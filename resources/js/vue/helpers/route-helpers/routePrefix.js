/**
 * Prefix Route Helper
 * ==================================================
 * Add a piece of URL to start of the existing routes
 * ==================================================
 *
 * Params:
 * =======
 * 1. "routes" : The routes array on which to apply prefix
 * 2. "route_prefix" : The route prefix string to apply on "routes" parameter
 *
 * Returns:
 * ========
 * 1. If "route_prefix" === '' or undefined or null, then original "routes" array will be returned
 * 2. If "route_prefix" !== first condition's prefix, then prefixed "routes" array will be returned
 */

export const prefixRoutes = (routes, route_prefix = '') => {
    route_prefix = route_prefix.toLowerCase().trim();
    route_prefix = trimSlashes(route_prefix);
    (!((route_prefix === '') || (route_prefix === null) || (route_prefix === undefined) || (route_prefix === false) || (route_prefix === 0)))
        ? routes.forEach(route => route.path = `/${route_prefix}${route.path}`) : undefined;
    return routes;
};


/**
 * Trim All The Leading & Trailing Slashes
 * =======================================
 */
const trimSlashes = route_prefix => {

    // Trim all the leading slashes
    if (route_prefix.charAt(0) === '/') {
        route_prefix = route_prefix.substr(1);
        return trimSlashes(route_prefix);
    }

    // Trim all the trailing slashes
    if (route_prefix.charAt(route_prefix.length - 1) === '/') {
        route_prefix = route_prefix.substr(0, route_prefix.length - 1);
        return trimSlashes(route_prefix);
    }

    return route_prefix;
};
