import Vue from "vue";
import Vuex from "vuex";

import post from "./modules/post";
import address from "./modules/address";

Vue.use(Vuex);
const debug = process.env.NODE_ENV !== "production";
export default new Vuex.Store({
    modules: {
        post,
        address
    }
});
