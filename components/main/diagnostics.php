<div class="diagnostics f-size">
	<div class="inner content">
		<div class="h1">Диагностика и ремонт</div>
		<p>Проведение диагностики в минимальные сроки с возможностью выезда на объект</p>
		<div class="catalog flex wrap around">
			<?
				$datas = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg'];
				foreach($datas as $data){
			?>
			<div class="item">
				<div class="block img" style="background-image: url(/dist/img/diagn/<?=$data?>)">
					<div class="card flex column">
						<div class="btn h-auto" onclick="callBackForm.switchForm()">Заказать диагностику</div>
						<div class="text">Бесплатно при согласии на ремонт</div>
					</div>
				</div>
				<div class="title flex between">
					<span>test</span><span>от 1000 руб</span>
				</div>
			</div>
			<?}?>
		</div>
	</div>
</div>