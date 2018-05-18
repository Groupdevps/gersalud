
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const EventBus = new Vue()

Object.defineProperties(Vue.prototype, {
    $bus: {
        get: function () {
            return EventBus
        }
    }
})*/

Vue.component('admisionist', require('./components/adminil/admisiones/admisionista.vue'));
 
Vue.component('medico_general', require('./components/adminil/PNC/medico/medico_general.vue'));

Vue.component('addcentro', require('./components/adminil/sistemas/addcentros.vue'));

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*window.axios= require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};*/

const app = new Vue({
    el: '#app'
});
