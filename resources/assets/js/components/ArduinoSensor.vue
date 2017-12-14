<template>
	<span>
		{{ sensorData }}
	</span>
</template>

<script>
	export default {
		name: 'arduino-sensor',
		data() {
			return {
				sensorData: 0,
				dataRaw: 0
			}
		},
		props: {
			'sensorId' : String
		},
		mounted() {
			io.$on('sensorData', data => {
				if(data.id == this.sensorId){
					this.dataRaw = data.data;
				}
			});

			setInterval(()=>{
				this.sensorData = this.dataRaw;
			}, 500);
		}
	}
</script>