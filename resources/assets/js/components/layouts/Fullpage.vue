<style lang="stylus">
	.Fullpage--success
		background green
</style>

<template>
	 <div id="{{ name }}" v-show="show">
	    <slot></slot>
	</div>
</template>

<script lang="babel">
	import 'fullpage.js/jquery.fullPage.js';
	import $ from 'jquery';
	export default {
		props:{
			show: {
				type: Boolean,
				default: true
			},
			size: Number,
			normalScrollElements: {
				type: Array,
				default: null
			},
			name: {
				type: String,
				required: true
			},
			allowScrolling: {
				type: Boolean,
				default: true
			},
			slideSelector: {
				type: String,
				default: '.slide'
			}
		},
		methods: {
			dismiss: function dismiss() {
				alert('hi');
			},
		},
		computed: {
			alertState() {
				return !this.state || this.state === `default` ? `alert-success` : `alert-${this.state}`
			},
		},
		ready() {
			$('#'+this.name).fullpage({
				normalScrollElements: this.normalScrollElements !== null ? this.normalScrollElements.join(',') : this.normalScrollElements,
				slideSelector: this.slideSelector
			});
			$.fn.fullpage.setAllowScrolling(this.allowScrolling);
			//$.fn.fullpage.moveSectionDown();
			//setTimeout(() => this.show = true, 3000);
		}
	}
</script>