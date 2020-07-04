/**
 * Application Routes
 * ================================================
 * All of application's front-end routes will be
 * registered here
 * ================================================
 */

import { prefixRoutes, prefixNames } from "../../helpers/helpers";
import Home from "../../components/front/Home";
import About from "../../components/front/About";
import Signup from "../../components/front/Signup";
import Contact from "../../components/front/Contact";
import How_it_works from "../../components/front/How_it_works";


let routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/about', name: 'about', component: About},
    { path: '/sign-up', name: 'signup', component: Signup},
    { path: '/contact', name: 'contact', component: Contact},
    { path: '/how-it-works', name: 'how_it_works', component: How_it_works}
];

export const appRoutes = routes
    |> (routes => prefixRoutes(routes, 'service_market/public'))
    |> (routes => prefixNames(routes, 'front'));
