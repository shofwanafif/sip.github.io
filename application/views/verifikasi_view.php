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
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw" class="nav-item nav-link active" href="<?= base_url()."controller/profil"?>"><?php echo $this->session->userdata('ses_nama')?></i>
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
                             Halaman Verifikasi
                        </h1>
						<ol class="breadcrumb"></ol>

		</div>

            <div id="page-inner">
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">

	 </div>
              <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-action">
                            Kirim Pemberitahuan Email
                        </div>
                        <div class="card-content">
                         	<form class="col s12">
								  <div class="row">
									<div class="input-field col s6">
									  <i class="material-icons prefix">account_circle</i>
									  <input id="icon_prefix" type="text" class="validate">
									  <label for="icon_prefix">Nama</label>
									</div>
									<div class="input-field col s6">
									  <i class="material-icons prefix">phone</i>
									  <input id="icon_telephone" type="tel" class="validate">
									  <label for="icon_telephone">Nomor Telpon</label>
									</div>
								  </div>
								</form>

								<form class="col s12">
								  <div class="row">
									<div class="input-field col s12">
									  <input id="email" type="email" class="validate">
									  <label for="email" data-error="wrong" data-success="right">Email</label>
									</div>
								  </div>
								</form>

								  <form class="col s12">
							  <div class="row">
								<div class="input-field col s12">
								  <textarea id="textarea1" class="materialize-textarea"></textarea>
								  <label for="textarea1" placeholder="Password" >Pesan</label>
								</div>
							  </div>

                <form class="col s12">
              <div class="row">
              <div class="input-field col s12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-danger">Reset</button>
              </div>
              </div>

							</form>
							  </form>

							<div class="clearBoth"></div>
							</div>
							</div>
							</div>
							 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-action">
                            Tinjau Ulang (Cross Check)
                        </div>
                        <div class="card-content">

								  <form action="#">
                    <p>
                      <input type="checkbox" class="filled-in" id="filled-in-box" />
                      <label for="filled-in-box">Kelengkapan Biodata</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="filled-in-box2"  />
                      <label for="filled-in-box2">Email Valid</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="filled-in-box3"  />
                      <label for="filled-in-box3">Nomor Telepon Valid</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="filled-in-box4"  />
                      <label for="filled-in-box4">Pesan Valid</label>
                    </p>

                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- /.col-lg-12 -->
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


</body>

</html>
