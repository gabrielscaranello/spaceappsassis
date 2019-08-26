import Vue from 'vue';
import Vuex from 'vuex';
import modules from './modules';

Vue.use(Vuex);

const mutations = {
  loader: () => {
    console.log('teste');
    return true;
  },
};

// Create a new store
const store = new Vuex.Store({
  mutations,
  modules,
});

export default store;
