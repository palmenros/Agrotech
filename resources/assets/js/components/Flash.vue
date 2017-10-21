<template>
	
	<div :class="flashClasses">
		<p> <b> {{ type }} </b> {{ message }} </p>
	</div>

</template>

<script>
		
	export default {
		name: 'flash',
		data() {
			return {
				visible: false,
				type: 'Éxito',
				message: '',
				timeout: {}
			};
		},

		props: {
			'content' : String
		},

		computed: {
			flashClasses() {
				return [
					'flash',
					{
						'visible' : this.visible,
						'success' : this.type === 'Éxito',
						'alert' : this.type === 'Alerta',
						'error' : this.type === 'Error' 
					}
				];
			}
		},

		methods: {

			flash(message, type = null) {
				if(type) {
					this.type = type;
				}

				this.message = message,
				this.visible = true;

				clearTimeout(this.timeout);
				this.hide();
			},

			hide() {
				this.timeout = setTimeout(() => {
					this.visible = false;
				}, 6000);
			}

		},

		created() {
			if(this.content) {
				this.flash(this.content);
			}

			window.events.$on('flash', (message, type) => {
				this.flash(message, type);
			});
		}

	};

</script>

<style lang="scss">

	$distance: 30px;

	.flash {
		position: fixed;
		right: $distance;
		bottom: $distance;
		padding: 30px;
		border-radius: 3px;
		z-index: 200;
		transform: translateY($distance + 100px);
		transition: transform ease 0.3s;

		&.visible {
			transform: translateY(0);
		}

		@media(max-width: 500px) {
			left: $distance;
		}
	
		&.success {
			background: rgba(172, 229, 203, 0.95);
			border: 1px solid rgba(180, 238, 212, 1);
		}

		&.error {
			background: rgba(245, 67, 54, 0.9);
			border: 1px solid rgba(245, 67, 54, 0.9);
		}

		&.alert {
			background: rgba(251, 177, 72, 0.9);
			border: 1px solid rgba(254, 162, 31, 0.9);
		}

		b {
			margin-right: 5px;
		}
	}
	
</style>