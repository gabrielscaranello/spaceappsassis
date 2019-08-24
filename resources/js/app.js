import Vue from 'vue';
import App from './App.vue';

import router from './router';
import vuetify from './plugins/vuetify.js';
import '../sass/app.scss';

new Vue({
    el: '#app',
    render: h => h(App),
    router,
    vuetify,
});
