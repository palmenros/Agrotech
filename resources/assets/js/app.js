import Vue from 'vue';
import axios from 'axios';
import Chart from 'chart.js';

import IO from './socket';

window.Vue = Vue;
window.axios = axios;
window.Chart = Chart;
window.io = IO;

let events = new Vue();
window.events = events;
window.flash = function(message, type = null) {
	window.events.$emit('flash', message, type);
};

import Slider from './components/Slider.vue';
import ToggleSwitch from './components/ToggleSwitch.vue';
import RefillButton from './components/RefillButton.vue';
import AutomaticControl from './components/AutomaticControl.vue';
import LineChart from './components/LineChart.vue';
import Flash from './components/Flash.vue';
import TimeSelector from './components/TimeSelector.vue';
import ArduinoSensor from './components/ArduinoSensor.vue';

const app = new Vue({
    el: '#app',
    components: { Slider, ToggleSwitch, RefillButton, AutomaticControl, LineChart, Flash, TimeSelector, ArduinoSensor }
});

//Set axios send X-Requested-With header
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
