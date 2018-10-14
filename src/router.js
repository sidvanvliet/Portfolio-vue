import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('./views/Home.vue')
        },
        {
            path: '/resume',
            name: 'resume',
            component: () => import('./views/Resume.vue')
        },
        {
            path: '/portfolio',
            name: 'portfolio',
            component: () => import('./views/Portfolio.vue')
        },
        {
            path: '/contact',
            name: 'contact',
            component: () => import('./views/Contact.vue')
        },
        {
            path: '/privacy',
            name: 'privacy',
            component: () => import('./views/PrivacyPolicy.vue')
        }
    ]
})
