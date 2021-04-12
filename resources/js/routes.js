
import VueRouter from 'vue-router';

import Bookables from './bookables/Bookables';
const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home",
    },
    // {
    //     path: "/contact",
    //     component: ExampleComponent2,
    //     name: "contact",
    // }
];


const router = new VueRouter({
    mode:'history',
    routes
})

export default router;
