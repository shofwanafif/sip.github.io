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
    <!-- Morris Chart Style-->
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
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw" class="nav-item nav-link active" href="<?= base_url()."controller/profil"?>"><?php echo $this->session->userdata('ses_nama')?></i>  
                    <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="<?php echo base_url('Login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li>
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
                                    <strong>Afif</strong>
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
                                    <strong>Afif</strong>
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

		<div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Dashboard Admin
                        </h1>
						<ol class="breadcrumb">
					</ol>

		</div>
            <div id="page-inner">

			<div class="dashboard-cards">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">

						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image red">
						<i class="material-icons dp48">equalizer</i>
						</div>
						<div class="card-stacked red">
						<div class="card-content">
						<h3>1,326 Pengunjung</h3>
						</div>
						<div class="card-action">
						<strong>Pengunjung Website SIP</strong>
						</div>
						</div>
						</div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">

                      <div class="card horizontal cardIcon waves-effect waves-dark">
                        <div class="card-image blue">
                        <i class="material-icons dp48">supervisor_account</i>
                        </div>
                        <div class="card-stacked blue">
                        <div class="card-content">
                        <h3>536 Relawan</h3>
                        </div>
                        <div class="card-action">
                        <strong>Relawan Laki-Laki </strong>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">

							<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image green">
						<i class="material-icons dp48">supervisor_account</i>
						</div>
						<div class="card-stacked green">
						<div class="card-content">
						<h3>329 Relawan</h3>
						</div>
						<div class="card-action">
						<strong>Relawan Perempuan </strong>
						</div>
						</div>
						</div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">

					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image orange">
						<i class="material-icons dp48">supervisor_account</i>
						</div>
						<div class="card-stacked orange">
						<div class="card-content">
						<h3>50 Tim</h3>
						</div>
						<div class="card-action">
						<strong>Tim yang Telah Terbentuk</strong>
						</div>
						</div>
						</div>

                    </div>
                </div>
			   </div>
				<!-- /. ROW  -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="cirStats">
						  	<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="card-panel text-center">
											<h4>Task Admin</h4>
											<div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
											</div>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="card-panel text-center">
											<h4>Belum Registrasi</h4>
											<div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
											</div>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="card-panel text-center">
											<h4>Belum Verifikasi</h4>
											<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
											</div>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="card-panel text-center">
											<h4>Update Informasi</h4>
											<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
											</div>
										</div>
								</div>
							</div>
						</div>
						</div><!--/.row-->
						                <!-- /. ROW  -->





                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
						<div class="card"><div class="card-action">
					  <b>Tasks Panel Admin</b>
					</div>
					<div class="card-image">
					  <div class="collection">
						  <a href="<?php echo base_url()?>index.php/Dashboardadmin" class="collection-item">Verifikasi Anggota Baru<span class="new badge red" data-badge-caption="belum">150</span></a>
						  <a href="#!" class="collection-item">Update Jadwal Pelatihan<span class="new badge red" data-badge-caption="belum">3</span></a>
              <a href="#!" class="collection-item">Update Tim<span class="new badge red" data-badge-caption="belum">14</span></a>
              <a href="#!" class="collection-item">Update Jadwal Sharing Motivation <span class="new badge red" data-badge-caption="belum">2</span></a>
              <a href="#!" class="collection-item">Update List Kebutuhan Anggota<span class="new badge red" data-badge-caption="belum">27</span></a>
						</div>
					</div>
					</div>


                </div>
                <!-- /. ROW  -->
			   <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a href="<?php echo base_url()?>index.php/Dashboardadmin" class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
      <li><a href="<?php echo base_url()?>index.php/post" class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    </ul>
  </div>
</div>
				<footer><p>Created by <i class="fa fa-love"></i><a>Alkariim</a>
</p>


				</footer>
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


</body>

</html>
