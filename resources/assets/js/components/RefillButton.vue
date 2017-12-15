<template>
    <div class="form-group">
        <button class="btn" @click="send">
            <slot></slot>
        </button>
    </div>
</template>

<script>
    export default {
        name: 'refill-button',
        props: {
            'actuatorId': String
        },
        methods: {
            send() {
                io.$emit('emit', {
                    channel: 'control',
                    data: {
                        actuatorId: this.actuatorId,
                        data: 1,
                        automatic: false
                    }
                });
            }
        }
    }
</script>