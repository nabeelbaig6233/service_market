import { prefixRoutes, prefixNames, authorizeAdmin, guestAdmin } from "../../helpers/helpers";
import Login from "../../components/front/Login";
import Dashboard from "../../components/admin/Dashboard";


let routes = [
    { path: '/', redirect: { name: 'admin.login' } },
    { path: '/login', name: 'login', component: Login, beforeEnter: guestAdmin },
    { path: '/admin', name: 'dashboard', component: Dashboard, beforeEnter: authorizeAdmin },
];

export const adminRoutes = routes
    |> (routes => prefixRoutes(routes, 'service_market/public/admin'))
    |> (routes => prefixNames(routes, 'admin'));
