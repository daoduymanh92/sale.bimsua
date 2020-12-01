// require('./bootstrap');
import Vue from "vue";
import VueRouter from "vue-router";
import VuePlyr from "vue-plyr";

// The second argument is optional and sets the default config values for every player.
Vue.use(VuePlyr, {
    plyr: {
        fullscreen: { enabled: false }
    },
    emit: ["ended"]
});

Vue.use(VueRouter);

import App from "./pages/App";
import Test from "./pages/Hello";
import Home from "./pages/Home";
import Order from "./pages/CreateOrder";
import Orders from "./pages/OrderList";
import Support from "./pages/Support";
import Ticket from "./pages/Ticket";

import store from "./store/index";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Orders
        },
        {
            path: "/test",
            name: "test",
            component: Test
        },
        {
            path: "/order",
            name: "order",
            component: Order
        },
        {
            path: "/orders",
            name: "orders",
            component: Orders
        },
        {
            path: "/support",
            name: "support",
            component: Support
        },
        {
            path: "/tickets",
            name: "tickets",
            component: Ticket
        }
    ]
});

const app = new Vue({
    el: "#app",
    components: { App },
    router,
    store, // Vuex,
    render: h => h(App)
});
