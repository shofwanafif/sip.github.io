<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<!DOCTYPE html>
<html>
<head>
    <title>SIP Alkariim</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free singlepage web template created by GraphBerry">
    <meta name="keywords" content="HTML5, Bootstrap 3, CSS3, javascript, PHP, Responsive, Mobile">
    <meta name="author" content="GraphBerry.com"/>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>

	<header id="header">

		<!-- Section title -->
		<h1 class="sr-only">SIP | Home page</h1>

		<nav class="navbar navbar-default navbar-fixed-top">
		  <!-- Section title -->
		  <h1 class="sr-only">Main navigation</h1>

		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand smoothScroll" href="#home">
		        <img alt="Modus" src="<?php echo base_url();?>assets/img/alkariim.png">
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="main-navbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a class="smoothScroll" href="#home">Beranda<span class="sr-only">(current)</span></a></li>
		        <li><a class="smoothScroll" href="#services">Pelayanan</a></li>
		        <li><a class="smoothScroll" href="#clients">Mitra</a></li>
		        <li><a class="smoothScroll" href="#contact">Kontak</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>

	</header>

	<main>

		<section id="home">

			<!-- Section title -->
			<h1 class="sr-only">Home section</h1>

			<div class="overlay"></div>

			<div class="home-content">

				<div class="container">

					<div class="row">

						<div class="col-md-8 col-md-offset-2">

							<span class="h5">Pembentukan/Pengelolaan/Tim/SiagaBencana</span class="h5">

							<h4 class="h1">Selamat Datang di SIP</h4>

							<div class="cta-container">

								<button class="btn btn-primary" onclick="window.location.href='<?php echo base_url()?>index.php/Regis'">Reg. Relawan</button>

								<button class="btn btn-primary" onclick="window.location.href='<?php echo base_url()?>index.php/Login'">Login Relawan </button>

                				<button class="btn btn-primary"  onclick="window.location.href='<?php echo base_url()?>index.php/Login'">Login Admin</button>

							</div>

						</div>

					</div>

				</div>

			</div>

			<a id="down-icon" class="down-icon smoothScroll" href="#history">
				<img class="down-arrow" src="<?php echo base_url();?>assets/img/svg/down_icon.svg" alt="Down arrow">
			</a>

		</section>

		<section id="history">

			<!-- Section title -->
			<h1 class="sr-only">History section</h1>

			<div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2">

						<div class="history-content">

							<h2 class="section-title">Seputar Sistem Informasi Pengelolaan Tim (SIP)</h2>

							<p>SIP adalah sebuah sistem informasi sekaligus aplikasi pengelolan tim penanggulangan krisis bencana alam.
                SIP dimaksudkan untuk mempermudah tugas kepala dinas dalam mengelola tim serta ketersediaan tenaga
                kesehatan di lokasi bencana. Dengan SIP, diharapkan kerja kepala dinas dalam menanggulangi krisis
                bencana bisa lebih cepat, sehingga krisis kesehatan saat bencana dapat diatasi dengan cepat dan tepat</p>

						</div>

					</div>

				</div>

			</div>

		</section>


		<section id="services">

			<!-- Section title -->
			<h1 class="sr-only">Services section</h1>

			<div class="container">

				<div class="row">

					<div class="col-md-4">

						<div class="service">
							<figure>
								<img src="<?php echo base_url();?>assets/img/svg/services/idea.svg" alt="Idea image">
								<div class="separator"></div>
								<figcaption><h5>Ide</h5></figcaption>
							</figure>
							<p>Kami berusaha menuangkan ide dan kreativitas kami dalam keterampilan
                membuat aplikasi berbasis website agar dapat menjadi
                solusi pemungkin teknologi informasi di bidang sistem informasi
                siap tanggap penanggulangan bencana. </p>
						</div>

					</div>

					<div class="col-md-4">

						<div class="service">
							<figure>
								<img src="<?php echo base_url();?>assets/img/svg/services/work.svg" alt="Work image">
								<div class="separator"></div>
								<figcaption><h5>Loyalitas</h5></figcaption>
							</figure>
							<p>Dalam era pembangunan digital, sistem informasi kami diharapkan dapat
                menjadi partner yang loyal terhadap solusi pemungkin teknologi informasi
                khususnya di bidang siap tanggap penanggulangan bencana. </p>
						</div>

					</div>

					<div class="col-md-4">

						<div class="service">
							<figure>
								<img src="<?php echo base_url();?>assets/img/svg/services/deliver.svg" alt="Deliver image">
								<div class="separator"></div>
								<figcaption><h5>Solusi IT</h5></figcaption>
							</figure>
							<p>Alkariim bakti untuk negeri berusaha membuat aplikasi berbasis IT di
              bidang siap tanggap penanggulangan bencana yang diharapkan dapat menjadi
              salah satu solusi pemungkin teknologi informasi</p>
						</div>

					</div>

				</div>

			</div>

		</section>

		<section id="clients">

			<!-- Section title -->
			<h1 class="sr-only">Clients section</h1>

			<div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2">

						<div class="clients-content">

							<h2 class="section-title">Mitra Kerja Alkariim</h2>

							<blockquote>
								<p>“Alhamdulillah sejauh ini menjadi pencapaian yang luar biasa bagi kami karena kami telah
                  melakukan mitra kerja dengan berbagai instansi dinas di Indonesia untuk
                  membantu kelancaran sistem informasi pengelolan tim (SIP)”</p>
								<footer><cite title="Mr. alkariim">SIP Founders</cite></footer>
							</blockquote>

						</div>

					</div>

				</div>

        <div style="text-align: center;">
          <body>
              <img src="<?php echo base_url();?>assets/img/svg/mitra/bnpb.png" class="img-thumbnail"  width="125" height="200">
              <img src="<?php echo base_url();?>assets/img/svg/mitra/basarnas.png" class="img-thumbnail"  width="100" height="300">
              <img src="<?php echo base_url();?>assets/img/svg/mitra/bmkg.png" class="img-thumbnail"  width="125" height="300">
              <img src="<?php echo base_url();?>assets/img/svg/mitra/kemenkes.png" class="img-thumbnail"  width="260" height="215">
          </body>
        </div>

		</section>

		<section id="contact">

			<!-- Section title -->
			<h1 class="sr-only">Contact section</h1>

			<div class="container">

				<div class="row">

					<div class="col-md-6">

						<div id="about-subsection" class="contact-subsection">

							<h2 class="sub-section-title">Tentang Kami</h2>

							<p>Alkariim adalah sebuah kelompok developer pengembang aplikasi berbasis
                website yang beranggotakan Ahmad Shofwan Afif, Adinda Welldan Al Irsyad,
                dan Abdul Muis. Pada project tahun ini kami berkesempatan untuk mengembangkan
                sebuah sistem yaitu sistem informasi pengelolaan tim. Sebagai developer yang
                memiliki experience di bidang IT maka kami berdedikasi untuk menjadi developer
                yang berwawasan luas dan berinsan ULIL ALBAB. Apablia terdapat KRITIK dan SARAN
                silahkan kirim lewat kolom "HUBUNGI KAMI"</p>

						</div>

					</div>

					<div class="col-md-6">

						<div id="form-subsection" class="contact-subsection">

							<h2 class="sub-section-title">Hubungi Kami</h2>

							<form>

								<div class="form-group">
									<label class="email-label" for="Email">Email</label>
									<input type="email" class="form-control" id="Email">
								</div>

								<div class="form-group">
								    <label class="message-label" for="Message">Pesan</label>
								  	<textarea class="form-control" id="Message" rows="2"></textarea>
								</div>

							  	<button type="submit" class="btn btn-default pull-right">Kirim</button>

							</form>

						</div>

					</div>

				</div>

			</div>

		</section>

	</main>

	<footer id="footer">

		<!-- Section title -->
		<h1 class="sr-only">Footer section</h1>

		<div class="container">

			<div class="row">

				<div class="col-sm-6">
					<small class="copyright">Created by <i class="fa fa-copyright"></i><a> Alkariim </a>

				</div>

				<div class="col-sm-6">
					<ul class="social-list">
						<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>

		</div>

	</footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/smooth-scroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.mq.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/slick.min.js"></script>

	<!-- Latest compiled and minified JavaScript Bootstrap-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Custom JS -->
	<script src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>
</html>
