/**
 * Prefix Name Helper
 * =========================================================
 * Add a piece of name to start of the existing routes' name
 * =========================================================
 *
 * Params:
 * =======
 * 1. "routes" : The routes array on which to apply name prefix
 * 2. "name_prefix" : The name prefix string to apply on "routes" parameter
 *
 * Returns:
 * ========
 * 1. If "name_prefix" === '' or undefined or null, then original "routes" array will be returned
 * 2. If "name_prefix" !== first condition's prefix, then prefixed "routes" array will be returned
 */

export const prefixNames = (routes, name_prefix = '') => {
    name_prefix = name_prefix.toLowerCase().trim();
    (!((name_prefix === '') || (name_prefix === null) || (name_prefix === undefined) || (name_prefix === false) || (name_prefix === 0)))
        ? routes.forEach(route => route.name = `${name_prefix}.${route.name}`) : undefined;
    return routes;
};
