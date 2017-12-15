<template>
    <div class="control">
    <toggle-switch :id="switchId" v-model="sliderDisabled"></toggle-switch>
    <br>
    <slider :id="sliderId" :disabled="sliderDisabled" :actuatorId="actuatorId">
        <slot></slot>
    </slider>
    </div>
</template>

<script>

    import ToggleSwitch from './ToggleSwitch.vue';
    import Slider from './Slider.vue';

    export default {
        name: 'automatic-control',

        data() {
            return {
                sliderDisabled: false
            }
        },

        props: {
            'switchId' : String,
            'sliderId' : String,
            'disabled' : Boolean,
            'actuatorId' : String
        },
        components: { ToggleSwitch, Slider },

        mounted() {
            if(this.disabled) {
                this.sliderDisabled = this.disabled;
            }
        },

        watch: {
            sliderDisabled() {
                io.$emit('emit', {
                    channel: 'control',
                    data: {
                        actuatorId: this.actuatorId,
                        data: 0,
                        automatic: this.sliderDisabled
                    }
                });
            }
        }
    };
</script>