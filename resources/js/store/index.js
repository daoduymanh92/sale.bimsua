import Vue from 'vue';
import Vuex from 'vuex';

import Post from './modules/post';

Vue.use(Vuex);
const debug = process.env.NODE_ENV !== 'production';
export default new Vuex.Store({
   modules: {
        post : Post
   },
   strict: true
});