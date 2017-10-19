import Vue from 'vue';
import axios from 'axios';
import Chart from 'chart.js';


window.Vue = Vue;
window.axios = axios;
window.Chart = Chart;

import Slider from './components/Slider.vue';
import ToggleSwitch from './components/ToggleSwitch.vue';
import RefillButton from './components/RefillButton.vue';
import AutomaticControl from './components/AutomaticControl.vue';
import LineChart from './components/LineChart.vue';

const app = new Vue({
    el: '#app',
    components: { Slider, ToggleSwitch, RefillButton, AutomaticControl, LineChart}
});

//Set axios send X-Requested-With header
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
