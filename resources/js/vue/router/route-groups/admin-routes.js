import { prefixRoutes, prefixNames, authorizeAdmin, guestAdmin } from "../../helpers/helpers";
import Login from "../../components/admin/Login";

let routes = [
    { path: '/', redirect: { name: 'admin.login' } },
    { path: '/login', name: 'login', component: Login, beforeEnter: guestAdmin },
];

export const adminRoutes = routes
    |> (routes => prefixRoutes(routes, 'service_market/public/admin'))
    |> (routes => prefixNames(routes, 'admin'));
