<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

	<!-- CSS INIT -->
	<link rel="stylesheet" href="<?= $mainFolder ?>/fontawesome/css/all.css?ver=<?= $ver ?>">

	<!-- WEBPACK -->
	<link rel="stylesheet" href="<?= $mainFolder ?>/app.css?ver=<?= $ver ?>">
	<script src="<?= $mainFolder ?>/main.js?ver=<?= $ver ?>"></script>

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
	<div>
		<header class="flex column">
			<div class="inner content flex between v-center column-960 t-a-center-960">
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
					<ul class="flex t-a-center column-960">
						<li class="grow btn active">Главная</li>
						<li class="grow btn">Каталог</li>
						<li class="grow btn">Комплектующие</li>
						<li class="grow btn">Диагностика</li>
						<li class="grow btn">Сертификаты</li>
						<li class="grow btn">Контакты</li>
					</ul>
				</div>
			</nav>
		</header>
		<?template('main')?>
		<footer class="f-size">
			<div class="content"></div>
		</footer>
	</div>
</body>
</html>