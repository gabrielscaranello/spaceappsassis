const routes = [{
    path: '/',
    component: () => import('../pages/index.vue'),
}, {
    path: '/login',
    component: () => import('../pages/login.vue'),
}, {
    path: '/admin',
    component: () => import('../pages/app.vue'),
    children: [{
        path: '',
        component: () => import('../pages/dashboard.vue'),
    }, {
        path: 'inscritos',
        name: 'Incritos',
        component: () => import('../pages/subscribed/index.vue'),
    }],
}];

export default routes;
