import Vue from 'vue';
import App from './App.vue';

import router from './router';
import '../sass/app.scss';

new Vue({
    el: '#app',
    render: h => h(App),
    router,
});
