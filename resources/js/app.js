// require('./bootstrap');
import Vue from "vue";
import VueRouter from "vue-router";
import Vuex from "vuex";
import VuePlyr from "vue-plyr";

// The second argument is optional and sets the default config values for every player.
Vue.use(VuePlyr, {
    plyr: {
        fullscreen: { enabled: false }
    },
    emit: ["ended"]
});

Vue.use(Vuex);
Vue.use(VueRouter);

import App from "./pages/App";
import Hello from "./pages/Hello";
import Home from "./pages/Home";
import Order from "./pages/CreateOrder";
import Orders from "./pages/OrderList";
import Support from "./pages/Support";

import store from "./store/index";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/hello",
            name: "hello",
            component: Hello
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
        }
    ]
});

const app = new Vue({
    el: "#app",
    components: { App },
    router,
    store // Vuex,
});
