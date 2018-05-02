
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.BootstrapVue = require('bootstrap-vue');
Vue.use(BootstrapVue);
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'

// import bAlert from 'bootstrap-vue/es/components/alert/alert'
// import bNavbar from 'bootstrap-vue/es/components/navbar/navbar';
// import bNavbarnav from 'bootstrap-vue/es/components/navbar/navbar-nav';
// import bNavbarbrand from 'bootstrap-vue/es/components/navbar/navbar-brand';
// import bNavbartoggle from 'bootstrap-vue/es/components/navbar/navbar-toggle';

// import { Navbar } from 'bootstrap-vue/es/components';
// Vue.use(Navbar);

import vSelect from 'vue-select';



// window.Balert = require('bootstrap-vue/es/components/alert/alert');
// Vue.use(Balert);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('example-test', require('./components/ExampleTest.vue'));
Vue.component('example-nav', require('./components/VueNavbar.vue'));
Vue.component('v-select', vSelect);
Vue.component('example-select', require('./components/VueSelectText.vue'));
Vue.component('example-bvselcet', require('./components/BvSelect.vue'));


// Vue.component('bAlert', bAlert);

// Vue.component('b-alert', Balert);

// button-counter と呼ばれる新しいコンポーネントを定義します

Vue.component('button-counter', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
});

const app = new Vue({
    el: '#app'
});

