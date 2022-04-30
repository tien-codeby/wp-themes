import Vue from 'vue'

/*import Axios from 'axios'
Vue.prototype.$http = Axios

import VueCookies from 'vue-cookies'
Vue.use( VueCookies )*/

Vue.component('AdsForm', require('./components/ads/AdsForm.vue').default)

Vue.config.productionTip = false;

const app = new Vue( {} ).$mount( '#app' )

console.clear()
