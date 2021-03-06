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
