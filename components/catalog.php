<div class="catalog">
	<?template('main/diagnostics', [
		'h1' =>	'Диагностика и ремонт',
		'text' => 'Проведение диагностики в минимальные сроки с возможностью выезда на объект' ,
		'arr' => [
			['img' => '1.jpg', 'title' => 'Бытовые кондиционеры', 'cena' => '1000'],
			['img' => '2.jpg', 'title' => 'Промышленные кондиционеры', 'cena' => '2500'],
			['img' => '3.jpg', 'title' => 'Вентиляторы', 'cena' => '400'],
			['img' => '4.jpg', 'title' => 'Приточно-вытяжные установки', 'cena' => '1500'],
			['img' => '5.jpg', 'title' => 'Чиллеры и насосные станции', 'cena' => '800'],
			['img' => '6.jpg', 'title' => 'Тепловые завесы', 'cena' => '800']
		]
	])?>

	<?template('components/callback')?>
	<?template('catalog/howToWork')?>
</div>