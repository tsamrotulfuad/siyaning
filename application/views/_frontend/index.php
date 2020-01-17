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
		 <h1>Visi & Misi</h1>
		 <br>
		 <h4 style="text-align: left;">Visi :</h4>
		 <p class="text-justify">Terwujudnya keluarga yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlaq dan berbudi luhur, sehat, sejahtera, maju dan mandiri, kesetaraan dan keadilan gender serta kesadaran hukum dan lingkungan.</p>
		 <h4 style="text-align: left;">Misi :</h4>
		 <p class="text-justify">1.	Meningkatkan mental spiritual, perilaku hidup dengan menghayati dan mengamalkan Pancasila serta meningkatkan pelaksanaan hak dan kewajiban sesuai dengan Hak Asasi Manusia (HAM), demokrasi, meningkatkan kesetiakawanan sosial dan kegotongroyongan serta pembentukan watak bangsa yang selaras, serasi dan seimbang.</p>
		 <p class="text-justify">2.	Meningkatkan pendidikan dan ketrampilan yang diperlukan dan upaya mencerdaskan kehidupan bangsa serta pendapatan keluarga.</p>
		 <p class="text-justify">3.	Meningkatkan kualitas dan kuantitas pangan keluarga serta upaya Peningkatan   pemanfaatan pekarangan melalui Halaman Asri, Teratur, Indah dan Nyaman  (HATINYA) PKK dan perumahan serta Tata Laksana Rumah Tangga yang sehat.</p>
		<hr class="featurette-divider">
			<h2 style="text-align: center;">LANGIT JINGGA :</h2><br>
			<p class="text-justify">Posyandu Kemuning merupakan pemenang lomba posyandu di tingkat Kota Pasuruan dimana telah memiliki inovasi kegiatan posyandu pada bulan Januari 2018 yang disebut dengan Langit Jingga (LANGkah bersama tanganI 2T Jauhkan stuntING dan peninGkatan status gizi pada balitA). Inovasi tersebut kami angkat karena angka N/S pada posyandu tersebut masih cukup kecil. Harapan kami dengan adanya inovasi tersebut terdapat kenaikan paling tidak N/S sehingga seluruh balita berada dalam posisi yang aman.</p>
			<p class="text-justify">Melihat dari capaian tersebut kami Kader Posyandu Kemuning bersama dengan petugas kesehatan mempunyai ide bagaimana caranya agar berat badan balita dapat naik. Terbentuklah inovasi yang kami sebut dengan LANGIT JINGGA (LANGkah bersama tanganI 2T Jauhkan stuntING dan peninGkatan status gizi pada balitA). Adapun proses dari Langit Jingga kami mengusung konsep ‘door to door’ dimulai dari sehari setelah posyandu secara bergantian kami datangi balita yang memiliki masalah gizi di rumahnya masing-masing.
			Hal pertama yang kami lakukan saat datang ke rumah balita yang bermasalah gizi adalah menyapa dan melakukan recall terhadap makanan yang dikonsumsi sehari sebelum kunjungan kami. Saat itulah kami menanyakan masalah apa yang dihadapi oleh ibu tersebut terutama tentang pemberian makanan pada anak bayi dan balita, kami berusaha untuk memecahkan masalah yang dihadapi oleh seorang ibu tersebut. Namun jika kami tidak dapat memecahkan masalah tersebut maka kami akan meminta bantuan dari petugas kesehatan.  Kami juga melakukan penimbangan ulang berat badan bertujuan memastikan berat badan awal. Setelah itu kami mengadakan demo masak.
			individual di rumah ibu tersebut dengan bahan seadanya yang telah dimiliki oleh ibu tersebut, makanan tersbut baik komposisi dan cara memasaknya kami dapatkan dari pelatihan yang telah kami dapat dari petugas gizi puskesmas.Setelah itu kami akan melakukan kunjungan ulang seminggu kemudian, jika kenaikan berat badan yang diharapkan  telah tercapai maka kami akanmenyelesaikan kunjungan kami.  Segala bentuk kegiatan pada inovasi tersebut telah kami dokumentasikan. </p>
		<hr class="featurette-divider">
 	</div>

  <section class="section-feature">
      <div class="container">
				<h2 style="text-align: center;">Lainnya :</h2>
				<br>
        <div class="row">

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?= base_url("assets/inovasi.png"); ?>" class="img-fluid" alt="prestasi">
              <div class="card-body text-center">
                <h6>Program Inovasi</h6>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?= base_url("assets/prestasi.png"); ?>" class="img-fluid" alt="prestasi">
              <div class="card-body text-center">
                <h6>Prestasi</h6>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?= base_url("assets/mombaby.png"); ?>" class="img-fluid" alt="konsultasi">
              <div class="card-body text-center">
                <h6>Layanan Konsultasi Ibu & Anak</h6>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
