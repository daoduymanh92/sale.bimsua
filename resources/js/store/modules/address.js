/* Module1.store.js */
import Repository from "./../../repositories/RepositoryFactory";
const AddressRepository = Repository.get("addresses");

// State object
const state = {
    cities: [],
    variable2: 2,
    variable3: 3
};
// Getter functions
const getters = {};
// Actions
const actions = {
    async getCities({ commit }) {
        let response = await AddressRepository.getList({});
        commit("SET_CITIES", response.data.data);
    }
};
// Mutations
const mutations = {
    SET_CITIES(state, data) {
        state.cities = data;
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
