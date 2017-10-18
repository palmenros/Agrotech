<template>
    <div class="form-group">
        <label :for="id"> <slot></slot> </label>
        <input class="slider-range" type="range" :id="id" :disabled="disabled">
        <div ref="slider" class="slider" @mousedown="moveToClick($event)" >
            <div class="slider-fill" :style="fillStyle"></div>
            <div @touchstart="startMovingTouch($event)" @mousedown="startMoving($event)" class="slider-handle" ref="handle" :style="handleStyle"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'slider',
        data() {
            return {
                percentage: 13,
                handleWidth: 15,
                mouseUp: {},
                mouseMove: {},
                touchMove: {},
                touchEnd: {},
                touchCancel: {}
            };
        },
        methods: {

            startMovingTouch(e) {
                if(this.disabled) {
                    return false;
                }
                document.body.style.userSelect = 'none';

                this.touchMove = this.moveTouch.bind(this);
                document.addEventListener('touchmove', this.touchMove);

                this.touchEnd = this.endTouch.bind(this);
                document.addEventListener('touchend', this.touchEnd);

                this.touchCancel = this.cancelTouch.bind(this);
                document.addEventListener('touchcancel', this.touchCancel);

            },

            moveTouch(e) {
                let offset = this.$refs.slider.getBoundingClientRect().x;
                let newWidth = e.touches[0].pageX - offset;

                this.percentage = 100 * newWidth / this.$refs.slider.offsetWidth;
                this.percentage = Math.max(0, Math.min(100, this.percentage));            },

            endTouch() {
                document.removeEventListener('touchmove', this.touchMove);
                document.removeEventListener('touchend', this.touchEnd);
                document.removeEventListener('touchcancel', this.touchCancel);
            },

            cancelTouch() {
                document.removeEventListener('touchmove', this.touchMove);
                document.removeEventListener('touchend', this.touchEnd);
                document.removeEventListener('touchcancel', this.touchCancel);
            },

            startMoving(e){
                if(e.button === 2 || this.disabled) {
                    return false;
                }

                document.body.style.userSelect = 'none';

                this.mouseMove = this.move.bind(this);
                document.addEventListener('mousemove', this.mouseMove);

                this.mouseUp = this.endMoving.bind(this);
                document.addEventListener('mouseup', this.mouseUp);
            },
            move(e){
                let offset = this.$refs.slider.getBoundingClientRect().x;
                let newWidth = e.pageX - offset;

                this.percentage = 100 * newWidth / this.$refs.slider.offsetWidth;
                this.percentage = Math.max(0, Math.min(100, this.percentage));
            },
            endMoving() {
                document.removeEventListener('mousemove', this.mouseMove);
                document.removeEventListener('mouseup', this.mouseUp);
                document.body.style.userSelect = 'initial';
            },
            moveToClick(e) {
                if(e.button === 2 || this.disabled) {
                    return false;
                }

                let offset = this.$refs.slider.getBoundingClientRect().x;
                let newWidth = e.pageX - offset;

                this.percentage = 100 * newWidth / this.$refs.slider.offsetWidth;
                this.percentage = Math.max(0, Math.min(100, this.percentage));
            }
        },
        props: {
            'id' : String,
            'disabled' : Boolean
        },
        computed: {
            fillStyle() {
                return {
                    'width': `${this.percentage}%`
                };
            },
            handleStyle() {
                return {
                    'left': `${this.handleOffset}%`
                };
            },
            handleOffset() {
                return this.percentage - this.handleWidth / 2;
            }
        },
        mounted() {
            this.handleWidth = this.$refs.handle.offsetWidth;
        }
    };
</script>