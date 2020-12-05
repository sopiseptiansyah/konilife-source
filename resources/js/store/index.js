import Vue from 'vue';
import VueGoogleMaps from 'vue-googlemaps';
import 'vue-googlemaps/dist/vue-googlemaps.css';
import Store from './src/Store';
import baseApi from '../api';
window.baseApi = baseApi;

Vue.use(VueGoogleMaps, {
    load: {
        // put your google API key either in the ./config/local.env.js file or just hardcode in the string below
        apiKey: process.env.MIX_GOOGLE_API_KEY || '',
        useBetaRenderer: true
    }
});

Vue.config.productionTip = false;


new Vue({
    el: '#store',
    components: { Store },
    template: '<Store/>'
})