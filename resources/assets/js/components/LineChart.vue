<template>
	<canvas ref="canvas" width="400" height="400"></canvas>
</template>

<script>
	
	export default {
		name: 'line-chart',
		data() {
			return {
				chart: {}
			};
		},


		mounted() {

			let ctx = this.$refs.canvas.getContext('2d');

			this.chart = new Chart(ctx, {
				type: 'line',
				  data: {
				    labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
				    datasets: [{
				      label: 'apples',
				      data: [12, 19, 3, 17, 6, 3, 7],
				      backgroundColor: "rgba(153,255,51,0.4)"
				    }, {
				      label: 'oranges',
				      data: [2, 29, 5, 5, 2, 3, 10],
				      backgroundColor: "rgba(255,153,0,0.4)"
				    }]
				  }
			});
		}

	};

</script>