<template>
    <div class="timeline">
        <div class="select">
            <select ref="timeSelector" v-model="selection">
                <option value="month">
                    Este mes
                </option>
                <option value="year">
                    Este año
                </option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'time-selector',
        data() {
            return {
                selection: 'year'
            };
        },
        created() {
            let basename = document.location.pathname.split(/[\\/]/).pop();
            if(basename !== 'statistics') {
                this.selection = basename;
            }
        },
        watch: {
            selection() {
                let basename = document.location.pathname.split(/[\\/]/).pop();
                if(this.selection !== basename) {
                    document.location.href = '/statistics/' + this.selection;
                }
            }
        }
    };
</script>

<style lang="scss">

    .timeline {
        margin: 0 0 10px 20px;

        @media(max-width: 975px) {
            margin-left: 0;
        }

        .select {
            display: inline-block;
            max-width: 100%;
            position: relative;
            vertical-align: top;

            &::after {
                border: 1px solid #8b8b8b;
                border-right: 0;
                border-top: 0;
                content: " ";
                display: block;
                height: 0.5em;
                pointer-events: none;
                position: absolute;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                width: 0.5em;
                margin-top: -0.375em;
                right: 1.125em;
                top: 50%;
                z-index: 4;
            }

            select {
                -moz-appearance: none;
                -webkit-appearance: none;
                align-items: center;
                border-radius: 3px;
                box-shadow: none;
                height: 2.25em;
                justify-content: flex-start;
                line-height: 1.5;
                position: relative;
                vertical-align: top;
                background-color: white;
                border: 1px solid #dbdbdb;
                color: #363636;
                cursor: pointer;
                display: block;
                font-size: 1em;
                max-width: 100%;
                outline: none;
                padding: calc(0.375em - 1px) 2.5em calc(0.375em - 1px) calc(0.625em - 1px);

                &:hover {
                    border: 1px solid #bfbfbf;
                }
            }

        }
    }

</style>