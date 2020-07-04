/**
 * Main Routes
 * ======================================================
 * All of application's front-end and admin-panel routes
 * will be registered here
 * ======================================================
 */

import { appRoutes } from "./route-groups/app-routes";
import { adminRoutes } from "./route-groups/admin-routes";


// All your final groups of routes will be merged here
export const routes = [...appRoutes, ...adminRoutes];
