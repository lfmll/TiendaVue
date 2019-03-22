<template>
	<section>
		<div class="row">
			<products-card-component v-bind:product="product" v-for="product in products">
			</products-card-component>			
		</div>		
	</section>
</template>

<script>
	export default{
		data(){
			return {
				name: 'Producto Componente',
				products: [
					{title: 'Curso Laravel', price: 200, description: 'desarrollo web'},
					{title: 'Curso Android', price: 300, description: 'desarrollo mobil'}
				]
			}
		}
	}
</script>