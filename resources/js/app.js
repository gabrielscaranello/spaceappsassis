import Vue from 'vue';
import App from './App.vue';

import router from './router';
import vuetify from './plugins/vuetify';
import '../sass/app.scss';
import './plugins';

new Vue({
    el: '#app',
    render: h => h(App),
    router,
    vuetify,
});
