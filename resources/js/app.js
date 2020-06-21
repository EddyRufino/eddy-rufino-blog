require('./bootstrap');

window.Vue = require('vue');

Vue.component('githubs', require('./components/Githubs.vue').default);
Vue.component('github', require('./components/Github.vue').default);

const app = new Vue({
  el: '#app',
});