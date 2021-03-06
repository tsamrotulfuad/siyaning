<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Pelayanan Posyandu Kemuning</title>
	<link rel="icon" href="<?= base_url("assets/"); ?>logo/favicon.ico" type="image/gif">
	<!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url("assets/frontend"); ?>/font-awesome/css/font-awesome.min.css" />
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<!-- Custom styles for this template -->
    <link href="<?= base_url("assets/frontend/"); ?>dist/css/jumbotron.css" rel="stylesheet">
</head>
<body>
<!-- Just an image -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ffffff;">
  <div class="container">
  <a class="navbar-brand" href="#">
    <img src="<?= base_url("assets/"); ?>logo_atas.png" width="125" height="45" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("home"); ?>">Beranda</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="<?= base_url("home/profil"); ?>">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("home/kegiatan"); ?>">Kegiatan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("home/programkerja"); ?>">Program Kerja</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url("home/hubungikami"); ?>">Hubungi Kami</a>
      </li>
    </ul>

  </div>
</nav>

<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
						<div class="carousel-inner">
	            <div class="carousel-item active">
	              <img src="<?= base_url("assets/cover1.jpg"); ?>" class="img-fluid" alt="Responsive image">
	            </div>
	            <div class="carousel-item">
	              <img src="<?= base_url("assets/cover2.jpeg"); ?>" class="img-fluid" alt="Responsive image">
	            </div>
	            <div class="carousel-item">
		            <img src="<?= base_url("assets/cover3.jpeg"); ?>" class="img-fluid" alt="Responsive image">
	            </div>
							<div class="carousel-item">
		            <img src="<?= base_url("assets/cover4.jpeg"); ?>" class="img-fluid" alt="Responsive image">
	            </div>
							<div class="carousel-item">
		            <img src="<?= base_url("assets/cover5.jpeg"); ?>" class="img-fluid" alt="Responsive image">
	            </div>
	          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

  <div class="container marketing">
    <div class="starter-template">
      <h1>KEGIATAN KESEKRETARIATAN TP. PKK KELURAHAN</h1>
      <br>
      <br>
      <h4 style="text-align: center;">KELEMBAGAAN :</h4>
      <br>
      <p class="text-justify">1.	Mengikuti Rapat Koordinasi dan Sosialisasi Program Kerja PKK.</p>
      <p class="text-justify">2.	Mengadakan Rapat Koordinasi Program Kerja   TP PKK Kelurahan Gadingrejo.</p>
      <p class="text-justify">3.	Mengikuti Pencanangan Hari Kesatuan Gerak PKK-KB-Kesehatan.</p>
      <p class="text-justify">4.	Mengikuti Gebyar Hari Kesatuan Gerak PKK-KB-Kesehatan.</p>
      <br>
      <h4 style="text-align: center;">ADMINISTRASI UMUM :</h4>
      <br>
      <p class="text-justify">1.	Mengadakan Pembinaan Administrasi PKK.</p>
      <p class="text-justify">2.	Mengikuti Rakor Pembinaan Administrasi PKK Tingkat Kota Pasuruan.</p>
      <p class="text-justify">3.	Mengadakan Lomba 10 Program Pokok PKK Tingkat Kelurahan Gadingrejo.</p>
      <p class="text-justify">4.	Mengadakan Pembinaan Administrasi PKK Kelurahan Kelompok PKK RW, RT dan Dasa Wisma terkait Lomba 10 Program Pokok PKK Tingkat Kota Pasuruan.</p>
      <p class="text-justify">5.	Membuat Laporan Kegiatan Tahunan selama 1 tahun ke TP PKK Kota Pasuruan.</p>
      <br>
      <h4 style="text-align: center;">HUMAS :</h4>
      <br>
      <p class="text-justify">1.	Mendokumentasikan kegiatan TP PKK Kelurahan  Gadingrejo.</p>
      <p class="text-justify">2.	Menginformasikan kegiatan TP PKK Kelurahan  Gadingrejo.</p>
     <hr class="featurette-divider">
      <div class="starter-template">
        <h1>FOTO KEGIATAN</h1>
      </div>
        <img src="<?= base_url("assets/senamkondang.jpg"); ?>"><br>
        (Kegiatan Senam Kondang)
      <br><br><br>
        <img src="<?= base_url("assets/membuattas.jpg"); ?>"><br>
        (Kegiatan Membuat Tas)
     <hr class="featurette-divider">
     <div class="starter-template">
       <h1>BIDANG UMUM</h1>
     </div>
       <img src="<?= base_url("assets/koordinasi1.jpg"); ?>"><br>
     <br><br><br>
       <img src="<?= base_url("assets/koordinasi2.jpg"); ?>"><br>

   </div>
  </div>
  <hr class="featurette-divider">
</main>
<footer class="text-muted">
  <div class="container">
    <p>&copy; 2019 Sistem Pelayanan Posyandu Kemuning </p>
  </div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
