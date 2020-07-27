<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description=" content="Tunas Cendekia Official Website. Tunas Cendekia Jalan Oscar Raya, Komplek Bumi Pamulang Asri Keluarahan Bambu Apus.">

	<link rel="icon" href="<?= base_url(); ?>assets/img/Logo_RA_TC_Warna1.png" type="image/png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli|Overpass|PT+Sans+Narrow|Righteous&display=swap">
	<!--fancybox-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<!-- animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">

	<title><?= @$header; ?></title>
</head>
<body>

<nav class="navigasi fixed-top navbar-expand-lg navbar-dark bg-custom shadow-lg animated fadeInDown">
	<div class="row">
		<div class="col-8 col-sm-10 nav-trace">
			<div class="container ml-3 mt-1"><!--memang sengaja dikosongkan--></div>
		</div>
		<div class="col-4 col-sm-2">
			<div class="nav-adm">
				<a href="#" title="Pencarian" data-toggle="modal" data-target=".md-pencarian" id="pencarian"><i class="fa fa-search" aria-hidden="true"></i></a>
				<a href="<?= base_url(); ?>auth" title="Login"><i class="fa fa-lock" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-1">
			<div class="col-9 col-md-11 logo">
				<img src="<?= base_url(); ?>assets/img/Logo_RA_TC_Warna.png" alt=".." class="float-left mt-sm-1 shadow-sm">
				<h3 class="mt-1">RA TUNAS CENDEKIA</h3>
				<i>educative, fun, religius</i>
			</div>
			<div class="col-3 col-md-1">
				<button class="navbar-toggler bg-toggle mt-2" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-lg-8">
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link nav-home" href="<?= base_url(); ?>home">Beranda <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>berita">Berita</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>profile">Profil</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>pengumuman">Pengumuman</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>infopsb">Informasi PSB</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>artikel">Artikel</a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>galeri">Galeri</a>
				</div>
			</div>
		</div>
	</div>
</nav>
