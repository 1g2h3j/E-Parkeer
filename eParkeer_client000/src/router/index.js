import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: '/',
        name: 'user.index',
        component: () => import("../views/user/index.vue")
    },
    {
        path: '/create',
        name: 'user.create',
        component: () => import("../views/user/create.vue")
    },
    {
        path: '/edit/:id',
        name: 'user.edit',
        component: () => import("../views/user/edit.vue")
    },
];

const router = createRouter({
    history:  createWebHistory(),
    routes
});

export default router;