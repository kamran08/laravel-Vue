<template>
	<div>
		<h1>this is home page from home vue page</h1>
		<p>{{msg}}</p>
	</div>
</template>


<script>
	export default {
		data(){
			return {
				msg: ''
			}
		},
		async created(){
			const res = await this.callApi('get', '/app/get/some-data-from-laravel')
			if(res.status===200){
				this.msg=res.data.msg
			}
		}
	}
</script>
