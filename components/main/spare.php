<div class="spare f-size">
	<div class="content">
		<div class="h1">Использование фирменный запчастей</div>
		<ul>
			<?for($i = 0; $i < 10; $i++){?>
			<li><img src="/dist/img/testSpare.png"></li>
			<?}?>
		</ul>
	</div>
</div>

<script>
	var slider = document.querySelector('.spare ul');
	new Flickity(slider,{
			wrapAround: true,
			autoPlay:true
		});
</script>
