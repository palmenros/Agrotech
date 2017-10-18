import Vue from 'vue';
import axios from 'axios';

window.Vue = Vue;
window.axios = axios;

import Slider from './components/Slider.vue';
import ToggleSwitch from './components/ToggleSwitch.vue';
import RefillButton from './components/RefillButton.vue';
import AutomaticControl from './components/AutomaticControl.vue';

const app = new Vue({
    el: '#app',
    components: { Slider, ToggleSwitch, RefillButton, AutomaticControl}
});

//Set axios send X-Requested-With header
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
