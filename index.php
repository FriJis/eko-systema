<?
	$mainFolder="/dist";
	$ver = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

	<!-- CSS INIT -->
	<link rel="stylesheet" href="<?= $mainFolder ?>/css/reset.css?ver=<?= $ver ?>">
	<link rel="stylesheet" href="<?= $mainFolder ?>/css/fonts.css?ver=<?= $ver ?>">
	<link rel="stylesheet" href="<?= $mainFolder ?>/css/framework.css?ver=<?= $ver ?>">
	<link rel="stylesheet" href="<?= $mainFolder ?>/css/noscript.css?ver=<?= $ver ?>">
	<link rel="stylesheet" href="<?= $mainFolder ?>/fontawesome/css/all.css?ver=<?= $ver ?>">

	<!-- CCS LIB -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<link rel="stylesheet" href="<?= $mainFolder ?>/css/style.css?ver=<?= $ver ?>">
	<link rel="stylesheet" href="<?= $mainFolder ?>/css/media.css?ver=<?= $ver ?>">
	<title>Document</title>
</head>
<body>
	<noscript>
		<div class="noscript">
			<div class="error">
				<img src="<?= $mainFolder ?>/img/error.png" alt="">
				<div class="h1">У вас отключен JavaScript. Наш функционал использует эту технологию!</div>
			</div>
		</div>
	</noscript>
	<header class="flex column">
		<div class="inner content flex between v-center">
			<div class="block flex column v-center j-c-left" id="first">
				<a href="" class="title flex v-center"><img src="<?= $mainFolder ?>/img/ico.svg"> ЕКО СИСТЕМС</a>
				<div class="text">сервисный центр по ремонту и обслуживанию кондиционеров, вентиляции и теплового оборудования</div>
			</div>
			<div class="block flex v-center" id="second">
				<i class="fas fa-map-marked-alt"></i>
				<div class="text flex column">
					<div>450078, РБ, г. Уфа, ул. Владивостокская, д. 25</div>
					<div>пн.-пт. с 9-00 до 18-00</div>
				</div>
			</div>
			<div class="block flex column" id="third">
				<div class="text v-center">+7 (347) 266-17-81<i class="fas fa-phone"></i></div>
				<div class="text v-center">info@eko-systema.ru<i class="far fa-envelope"></i></div>
			</div>	
		</div>
		<nav class="f-size background">
			<div class="content">
				<ul class="flex t-a-center">
					<li class="grow btn active">test</li>
					<li class="grow btn">test</li>
					<li class="grow btn">test</li>
					<li class="grow btn">test</li>
					<li class="grow btn">test</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="slider f-size background">
		<div class="inner content">
			<ul>
				<li>
					<div class="block flex column">
						<div class="h"></div>
						<div class="text"></div>
					</div>
				</li>
				<li style="background: black">
					<div class="block flex column">
						<div class="h"></div>
						<div class="text"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="diagnostics f-size">
		<div class="inner content">
			<div class="h1">Диагностика и ремонт</div>
			<p>Проведение диагностики в минимальные сроки с возможностью выезда на объект</p>
			<div class="catalog flex wrap around">
				<?for($i = 0; $i < 12; $i++){?>
				<div class="item">
					<div class="block img" style="background-image: url(/dist/img/test.jpg)">
						<div class="card flex column">
							<div class="btn h-auto">Заказать диагностику</div>
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
	<script src="<?= $mainFolder ?>/main.js?ver=<?= $ver ?>"></script>
	<script>
		new Flickity('.slider ul',{
			wrapAround: true,
			autoPlay:true
		})
	</script>
</body>
</html>