/* Module1.store.js */
import Repository from "./../../repositories/RepositoryFactory";
const PostRepository = Repository.get("posts");

// State object
const state = {
    variable1: [],
    variable2: 2,
    variable3: 3
};
// Getter functions
const getters = {};
// Actions
const actions = {
    async fetchVariable1({ commit }) {
        console.log("run action");
        let data = await PostRepository.get();
        commit("SET_VARIABLE_1", data.data);
    },
    async TEST_NOW({ commit }) {
        commit("SET_VARIABLE_1", "test");
    }
};
// Mutations
const mutations = {
    SET_VARIABLE_1(state, data) {
        state.variable1 = data;
    },
    SET_VARIABLE_2(state, data) {
        state.variable2 = data;
    }
};
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
