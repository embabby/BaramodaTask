import Vue from 'vue'
import VueRouter from 'vue-router'


import VueSidebarMenu from 'vue-sidebar-menu'
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css'
Vue.use(VueSidebarMenu)



Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import Sidebar from './views/Sidebar'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/sidebar',
            name: 'sidebar',
            component: Sidebar,
        },
    ],
});

// Vue.component('sidebar', require('./components/Sidebar.vue'));

const app = new Vue({
    el: '#app',
    components: { Sidebar },
    router,
});