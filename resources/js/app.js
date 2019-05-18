/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Home from "./pages/Home";
import VueRouter from 'vue-router';
import App from "./pages/App";
import router from './router'
import  axios from "axios";
import toastr from 'toastr'

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const http = axios.create({
    baseURL: 'http://expenses.test/api/',
});

Vue.prototype.$http = http;
Vue.prototype.$toastr = toastr;


const app = new Vue({
    el: '#app',
    render:(h)=>h(App),
    router
});
