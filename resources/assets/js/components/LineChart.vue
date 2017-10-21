<template>
	<canvas ref="canvas" width="700" height="600"></canvas>
</template>

<script>
	
	export default {
		name: 'line-chart',
		data() {
			return {
				chart: {},
				theChartData: {}
			};
		},

        props: {
		    'chart-data' : String
        },

        created() {
		    this.theChartData = JSON.parse(this.chartData);
        },

		mounted() {

			let ctx = this.$refs.canvas.getContext('2d');

			this.chart = new Chart(ctx, {
				type: 'line',
                data: this.theChartData,
                options: {
                    responsive: true
                }
			});
		}

	};

</script>