<div class="slider f-size background">
	<div class="inner content">
		<ul>
			<?for($i = 0; $i < 12; $i++){?>
			<li class="img" style="background-image: url(/dist/img/test.jpg)">
				<div class="block flex column">
					<div class="h"></div>
					<div class="text"></div>
				</div>
			</li>
			<?}?>
		</ul>
	</div>
</div>

<script>
	try {
		new Flickity('.slider ul',{
			wrapAround: true,
			autoPlay:true
		})	
	} catch{}
	
</script>