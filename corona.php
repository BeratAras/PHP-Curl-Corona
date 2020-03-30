<!DOCTYPE html>
<html>
<head>
	<title>Corona İstatistik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="corona.css">
</head>
<body>
	<?php require('curl.php'); ?>
	<div class="container-fluid">
	<div class="card-group">
	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">Dünya</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title text-dark"><?php echo $dunyavaka[0] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $dunyaolum[0][1] ?></p>
			<p class="card-text text-left text-success">Tedavi: 83.160</p>
		</div>
	</div>

	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">Türkiye</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title"><?php echo $TurkiyeVaka[1][2] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $TurkiyeOlum[1][3] ?></p>
			<p class="card-text text-left text-success">Tedavi: <?php echo $TurkiyeIyılesme[1][43]?> </p>
		</div>
	</div>

	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">Çin</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title"><?php echo $CinVaka[0][1] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $CinOlum[0][1] ?></p>
			<p class="card-text text-left text-success">Tedavi: <?php echo $CinIyılesme[0][1] ?></p>
		</div>
	</div>

	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">İtalya</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title"><?php echo $ItalyaVaka[0][2] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $ItalyaOlum[0][2] ?></p>
			<p class="card-text text-left text-success">Tedavi: <?php echo $ItalyaIyılesme[0][2] ?></p>
		</div>
	</div>

	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">Amerika Birleşik Devletleri</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title"><?php echo $ABDVaka[0][8] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $ABDOlum[0][8] ?></p>
			<p class="card-text text-left text-success">Tedavi: <?php echo $ABDIyılesme[0][8] ?></p>
		</div>
	</div>

	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">İran</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title"><?php echo $IranVaka[0][3] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $IranOlum[0][3] ?></p>
			<p class="card-text text-left text-success">Tedavi: <?php echo $IranIyılesme[0][3] ?></p>
		</div>
	</div>

	<div class="card border-dark mb-3 text-center" style="max-width: 18rem;">
		<div class="card-header">Fransa</div>
		<div class="card-body text-dark">
			<h5 class="card-title">Toplam Vaka:</h5>
			<h1 class="card-title"><?php echo $FransaVaka[0][5] ?></h1>
			<p class="card-text text-left">Ölüm: <?php echo $FransaOlum[0][5] ?></p>
			<p class="card-text text-left text-success">Tedavi: <?php echo $IranVaka[0][5] ?></p>
		</div>
	</div>

</div>
</div>
</body>
</html>