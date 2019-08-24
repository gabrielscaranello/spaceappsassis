const routes = [{
    path: '/',
    component: () => import('../pages/index.vue'),
}, {
    path: '/admin',
    component: () => import('../pages/dashboard.vue'),
    children: [],
}];

export default routes;
