<template>
	<div class="w-full h-12 overflow-hidden shadow-lg ">
    <nav class="align-middle">
		<ul class="list-reset flex">
  			<li class="flex-1 mr-2">
    			<router-link class="" to="/" exact>Home</router-link>
  			</li>
  		</ul>
	</nav>
	</div>
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
