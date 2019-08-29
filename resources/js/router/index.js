import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '@/store';
import Jwt from '@/utils/jwt';

import routes from './routes';
import unauthenticated from './unauthenticated';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes,
});

router.beforeEach(async (to, _from, next) => {
    const auth = await Jwt.check();

    if (auth === 200) {
        if (to.path === '/login') return next('/admin');
        return next();
    }
    if (auth !== 200) {
        if (unauthenticated.find((route) => route == to.path)) return next();
    }
    return next('/login');
});


export default router;
