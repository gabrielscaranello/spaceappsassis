import Vue from 'vue';
import App from './App.vue';

import router from './router';
import vuetify from './plugins/vuetify';
import store from './store';

import '../sass/app.scss';
import './plugins';
import './utils';

new Vue({
    el: '#app',
    render: h => h(App),
    router,
    store,
    vuetify,
});
