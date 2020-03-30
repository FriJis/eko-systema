<div class="form__page" id="form">
	<div class="callback" :class="{active: active}" @click="switchForm">
		<div class="block">
			
		</div>
	</div>
</div>

<script>
	window.callBackForm = new Vue({
		el:'#form',
		data()
		{
			return {
				active: 0
			}
		},
		methods:
		{
			switchForm()
			{
				console.log('ok')
				this.active = !this.active
			}
		}
	})
</script>