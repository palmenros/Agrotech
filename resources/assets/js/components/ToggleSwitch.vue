<template>
    <div class="form-group">
        <input ref="checkbox" :checked="value" @change="updateToggleButton" type="checkbox" class="switch-check" :id="id">
        <label @mousedown="mouseDown" @mouseup="mouseUp" class="switch toggle-slider" :for="id"> {{ contents }} </label>
    </div>
</template>

<script>
    export default {
        name: 'toggle-switch',
        data() {
            return {
                contents : this.text
            }
        },
        methods: {
            mouseDown() {
                document.body.style.userSelect = 'none';
                document.body.style.msUserSelect = 'none';
            },
            mouseUp() {
                document.body.style.userSelect = 'initial';
                document.body.style.msUserSelect = 'initial';
            },
            updateToggleButton() {
                this.$emit('input', this.$refs.checkbox.checked);
            }
        },
        props: {
            'id': String,
            'text': String,
            'value' : Boolean
        },

        mounted() {
            if(!this.text) {
                this.contents = 'Automático: ';
            }
        }

    };
</script>