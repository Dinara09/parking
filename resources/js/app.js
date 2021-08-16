/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
import Vue from 'vue';
window.Vue = require('vue');

Vue.component('create', require('./components/CreateNote.vue').default);
Vue.component('edit', require('./components/EditNote.vue').default);

// window.onload = function () {
//     let app = new Vue({
//         el: '#app',
//         data: {
//             name: '',
//             telNumber: '',
//             address: '',
//             sex: '',
//             brand: '',
//             model: '',
//             bodyColor: '',
//             number: '',
//             isParkedCar: '',
//         },
//         methods: {
//             onSubmit: function() {
//                 axios.post('/create/addClient', {name: this.name, telNumber: this.telNumber,
//                     address: this.address, sex: this.sex, brand: this.brand, model: this.model,
//                     bodyColor: this.bodyColor, number: this.number, isParkedCar: this.isParkedCar}).then(r => this)
//                     .catch(error => {
//                         console.error(error.response.data)
//                     }).then();
//
//             }
//         }
//     });
// }
