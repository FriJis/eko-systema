<div class="diagnostics f-size">
	<div class="inner content">
		<div class="h1"><?=$h1?></div>
		<p><?=$text?></p>
		<div class="catalog flex wrap around">
			<?
				foreach($arr as $data){
			?>
			<div class="item">
				<div class="block img" style="background-image: url(/dist/img/diagn/<?=$data['img']?>)">
					<div class="card flex column">
						<div class="btn styles blue h-auto" callback-form>Заказать диагностику</div>
						<div class="text">Бесплатно при согласии на ремонт</div>
					</div>
				</div>
				<div class="title flex between">
					<span class="t"><?=$data['title']?></span><span>от <?=$data['cena']?> руб</span>
				</div>
			</div>
			<?}?>
		</div>
	</div>
</div>