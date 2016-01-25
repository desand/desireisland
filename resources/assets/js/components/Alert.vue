<style lang="stylus">
	.Alert{
		padding: 10px;
		background: #000;
	}

	.Alert--test
		padding 10px
</style>

<template>
	<div class="Alert" v-show="show">
		<p>
			<content></content>
		</p>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				show: true
			}
		},
		ready() {
			setTimeout(() => this.show = false, 3000)
		}
	}
</script>