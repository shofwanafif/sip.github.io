<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin SIP</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets4/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url();?>assets4/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>assets4/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url();?>assets4/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo base_url();?>assets4/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url();?>assets4/js/Lightweight-Chart/cssCharts.css">
</head>
<body>
    <div id="wrapper">
         <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="<?php echo base_url()?>index.php/Dashboardadmin"><i class="large material-icons">track_changes</i> <strong>SIP</strong></a>

		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"class="nav-item nav-link active" href="<?= base_url()."controller/profil"?>"><?php echo $this->session->userdata('ses_nama')?></i> 
                        <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="<?php echo base_url('Login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
  <li>
                                <div>
                                    <strong> Afif </strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
	   <!--/. NAV TOP  -->
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                  <li>
                      <a class="waves-effect waves-dark" href="<?php echo base_url()?>index.php/Dashboardadmin"><i class="fa fa-desktop"></i> Dashboard Admin</a>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>index.php/Buattim" class="waves-effect waves-dark"><i class="fa fa-table"></i> Buat Tim</a>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>index.php/Verif" class="waves-effect waves-dark"><i class="fa fa-edit"></i> Verifikasi </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>index.php/Infor" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Informasi Kegiatan </a>
                  </li>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
			  <div class="header">
                        <h1 class="page-header">
                            Informasi Kegiatan
                        </h1>
						<ol class="breadcrumb"></ol>

		</div>

            <div id="page-inner">

            <div class="row">
                <div class="col-md-4 col-sm-4">
                   <div class="card green">
						<div class="card-content black-text">
						  <span class="card-title">Waspada Status</span>
						  <p>Status ini menandakan bahwa tim harus selalu stand-bye dalam hal apapun</p>
						</div>
						<div class="card-action">
						</div>
					  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                   <div class="card yellow ">
						<div class="card-content">
						  <span class="card-title">Siaga Status</span>
						  <p>Status ini menandakan bahwa tim harus selalu siaga dan tanggap</p>
						</div>
						<div class="card-action">
						</div>
					  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                        <div class="card red">
						<div class="card-content white-text">
						  <span class="card-title">Awas Status</span>
						  <p>Status ini menandakan bahwa tim harus mengambil aksi tindakan secara cepat dan tepat</p>
						</div>
						<div class="card-action">
						</div>
					  </div>
                </div>
            </div>
                   <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="https://www.tagar.id/Asset/uploads/680036-jateng-kirim-relawan-ke-palu.jpeg">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Tim Relawan Bencana Gempa<i class="material-icons right">more_vert</i></span>
						  <p><a href="#">info lebih lengkap</a></p>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Liputan 6<i class="material-icons right">close</i></span>
						  <p>Korban luka berat dan luka ringan jumlahnya 10.679 orang, dengan rincian 2.549 luka berat dan 8.130 luka ringan.
                "Korban hilang 671 orang, pengungsi 82.775 jiwa dengan rincian 74.044 jiwa di 112 titik di Sulawesi Tengah dan 8.731 jiwa di luar Sulteng," sebutnya.
                Sampai saat ini, tim SAR gabungan masih terus bekerja, mencari dan mengevakuasi korban gempa-tsunami Palu dan sekitarnya. Ia berharap, semua korban bencana gempa dan tsunami dapat segera ditemukan.
                Reporter: Nur Habibie.
              </p>
						</div>
					  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                     <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="https://img-k.okeinfo.net/content/2016/06/19/512/1419261/kendal-terendam-banjir-hingga-1-meter-tim-sar-evakuasi-warga-aehZQgTTq0.jpg">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Tim Relawan Bencana Banjir<i class="material-icons right">more_vert</i></span>
						  <p><a href="#">Info Lebih Lengkap</a></p>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Okezone<i class="material-icons right">close</i></span>
						  <p>Banjir di Kabupaten Kendal, Jawa Tengah yang terus meninggi memaksa Tim SAR dari BPBD Kendal mengevakuasi warga. Ketinggian air sudah mencapai dada orang dewasa dan ratusan rumah terendam.
                Perahu karet Tim SAR BPBD Kabupaten Kendal, menembus pemukiman warga yang terendam banjir hingga ketinggian 1 hingga 2 meter. Warga, terutama ibu-ibu dan anak-anak mulai dievakuasi Tim SAR menuju lokasi yang lebih tinggi.
                Meski sebagian sudah dievakuasi menuju posko yang berada di Jalan Pantura, namun sejumlah warga masih ada yang enggan mengungsi.
  Menurut seorang warga, Ahmad Sunardi, banjir seperti ini sudah pernah dialamidan warga memilih bertahan untuk menjaga barang berharga miliknya di rumah.
  Ketinggian air paling parah terjadi di Kelurahan Ketapang dan Candiroto yang mencapai dada orang dewasa.
  Sejumlah kendaraan dan mobil juga ikut terendam banjir, karena tidak sempat diselamatkan mengingat air mulai masuk ke pemukiman saat warga menyiapkan hidangan sahur.
  Tim SAR sendiri harus bolak-balik masuk ke pemukiman warga, yang terendam untuk mengevakuasi warga. Sedangkan dapur umum dan posko penanganan banjir sudah didirikan di Jalur Pantura-Ketapang, Kendal.
  Selain merendam ratusan rumah di lima kecamatan, banjir juga merendam Puskesmas Brangsong. Sejumlah pasien bertahan dan belum dievakuasi, sementara air terus mengalir merendam puskesmas yang berada di Jalur Pantura itu</p>
						</div>
					  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                        <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://s.republika.co.id/uploads/images/inpicture_slide/tim-sar-mengevakuasi-jenazah-yang-tertimbun-tanah-longsor-di-_150330173446-602.jpg">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Tim Relawan Longsor <i class="material-icons right">more_vert</i></span>
						  <p><a href="#">Info Lebih Lengkap</a></p>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Tempo News<i class="material-icons right">close</i></span>
						  <p>
                Badan Nasional Penanggulangan Bencana (BNPB) mencatat sedikitnya 24 warga tewas dan 26 lainnya hilang akibat bencana banjir dan longsor yang terjadi di Jawa Tengah pada Sabtu siang, 18 Juni 2016. "Saat ini 26 orang yang hilang masih dalam pencarian," kata Kepala Pusat Data Informasi dan Humas BNPB Sutopo Purwo Nugroho melalui rilis media pada Minggu, 19 Juni 2016.
 Sutopo mengatakan, akibat kejadian tersebut, puluhan rumah rusak karena tertimbun longsor dan ribuan rumah terendam banjir. Bencana ini terjadi merata di 16 kabupaten di Jawa Tengah, yakni Purworejo, Banjarnegara, Kendal, Sragen, Purbalingga, Banyumas, Sukoharjo, Kebumen, Wonosobo, Pemalang, Klaten, Magelang, Wonogiri, Cilacap, Karanganyar, dan Kota Solo.
Dari catatan BNPB, saat ini korban terbanyak berasal dari Kabupaten Purworejo. Longsor yang terjadi di daerah itu mengakibatkan sebelas orang meninggal. Adapun 26 orang yang belum ditemukan diduga tertimbun longsor.
Menurut Sutopo, bencana banjir dan longsor ini terjadi merata di 30 desa dan 16 kecamatan. Di Desa Karangrejo, Kecamatan Loano, sembilan orang meninggal karena tertimbun longsor. Bahkan saat ini diketahui ada lima orang yang masih tertimbun tanah.
Longsor juga terjadi di Desa Donorati, Kecamatan Purworejo. Di sana, 15 orang hilang. Di Desa Pacekalan, satu orang meninggal dan empat orang hilang. Adapun di Desa Pacekelan, satu orang meninggal; dan di Desa Jelog, Kecamatan Kaligesing, dua orang hilang. Kejadian ini juga menyebabkan puluhan rumah tertimbun longsor.
Luapan banjir di Sungai Bogowonto, Kabupaten Purworejo, mengakibatkan empat orang meninggal dan dua orang hilang. Di Kabupaten Kebumen, banjir bandang dan longsor di beberapa tempat juga menyebabkan tujuh orang meninggal. Puluhan rumah rusak berat dan ratusan rumah terendam banjir.
Longsor juga terjadi di Kabupaten Banjarnegara yang menyebabkan enam orang meninggal. Saat ini petugas penyelamat gabungan sedang mendata dan mengevakuasi warga di 16 kabupaten dan kota. Termasuk melakukan pencarian korban hilang yang tertimbun longsor di beberapa wilayah.
Penanganan darurat masih dilakukan Badan Penanggulangan Bencana Daerah (BPBD) dibantu unsur terkait dari TNI, Polri, Basarnas, PMI, Tagana, SKPD, Rapi, Orari, Senkom Polri, Sarda, Pramuka, MDMC, Fatayat, Ukhuwah Sescue, NGO, relawan, dan masyarakat. Tim Reaksi Cepat BNPB saat ini terbagi dalam lima grup yang tersebar di Jawa Tengah untuk mendampingi BPBD.
            </p>
						</div>
					  </div>
                </div>
            </div>
                    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-action">
                            Informasi Manajemen Tim
                        </div>
                        <div class="card-content">
							 <ul class="collapsible" data-collapsible="accordion">
								<li>
								  <div class="collapsible-header"><i class="material-icons">event</i>Pelatihan Rutin</div>
								  <div class="collapsible-body"><p> Latihan Rutin Bertujuan untuk membangun chemistry
                    antara sesama anggota tim agar tim terbentuk dan solid
                  </p></div>
								</li>
                <li>
								  <div class="collapsible-header"><i class="material-icons">assignment</i>Sharing Motivation</div>
								  <div class="collapsible-body"><p> Sharing Motivation Bertujuan untuk memberikan motivasi terhadap
                    tim agar dapat meningkatkan semagnat dalam bekerja
                  </p></div>
								</li>
                <li>
								  <div class="collapsible-header"><i class="material-icons">list</i>List Kebutuhan</div>
								  <div class="collapsible-body"><p> List Kebutuhan Bertujuan untuk membangun chemistry
                    antara sesama anggota tim agar tim terbentuk dan solid
                  </p></div>
								</li>
                <li>
								  <div class="collapsible-header"><i class="material-icons">send</i>Tebar Kebaikan</div>
								  <div class="collapsible-body"><p> Tebar Kebaikan Bertujuan untuk meningkatkan amal dan pahala
                    sehingga dapat bermanfaat bagi sesama bukan hanya individu belaka
                  </p></div>
								</li>
                <li>
								  <div class="collapsible-header"><i class="material-icons">help</i>Solving The Problem</div>
								  <div class="collapsible-body"><p> Solving The Problem Bertujuan untuk meningkatkan kekompakan
                    tim dalam mencari solusi dari sebuah permasalahan yang tim
                  </p></div>
								</li>
							  </ul>

                            </div>
                        </div>
                    </div>
                

                    <!-- /. ROW  -->
				<footer><p>Created by <i class="fa fa-love"></i><a>Alkariim</a>
</p></footer>
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url();?>assets4/js/jquery-1.10.2.js"></script>

	<!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>assets4/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url();?>assets4/materialize/js/materialize.min.js"></script>

    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>assets4/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?php echo base_url();?>assets4/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets4/js/morris/morris.js"></script>


	<script src="<?php echo base_url();?>assets4/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets4/js/easypiechart-data.js"></script>

	 <script src="<?php echo base_url();?>assets4/js/Lightweight-Chart/jquery.chart.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets4/js/custom-scripts.js"></script>
	<script>
	$(document).ready(function(){
	 $('ul.tabs').tabs();
		$('.collapsible').collapsible({
		  accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		  onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
		  onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
		}
	  );
	});
	</script>


</body>

</html>
