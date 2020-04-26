<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

	<!-- CSS INIT -->
	<link rel="stylesheet" href="<?= $mainFolder ?>/fontawesome/css/all.css?ver=<?= $ver ?>">

	<!-- WEBPACK -->
	<link rel="stylesheet" href="<?= $mainFolder ?>/main.css?ver=<?= $ver ?>">

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
	<?template('header')?>
	<?page()?>
	<?template('form')?>
	<?template('footer')?>
	<script src="<?= $mainFolder ?>/main.js?ver=<?= $ver ?>"></script>
</body>
</html>