<template>
    <div class="form-group">
        <button class="btn">
            <slot></slot>
        </button>
    </div>
</template>

<script>
    export default {
        name: 'refill-button'
    }
</script>