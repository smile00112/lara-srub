require('./bootstrap');

// window.Vue = require('vue').default;
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import App from './components/App'
import Home from './components/Home'
import About from './components/About'
import Houses from './components/houses/Houses'

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/houses',
            name: 'houses',
            component: Houses
        }
    ]

})
//Vue.component('app', require('./components/App').default);

const app = new Vue({
    el: '#app',
    components: {App},
    router: router

});
