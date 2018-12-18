<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Form Registrasi</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>assets3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets3/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets3/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets3/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Form Registasi</h2>
                </div>
                <div class="card-body">
                    
                    <?php echo form_open('regis/register'); ?>
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>
                            <div class="form-row m-b-55">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="custom-select" name="jenis_kelamin">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option value = "Pria">Laki-Laki</option>
                                            <option value = "Perempuan">Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                            <select class="custom-select" name="goldarah">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option value = "A">A</option>
                                            <option value = "B">B</option>
                                            <option value = "AB">AB</option>
                                            <option value = "O">O</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                            <label class="label--desc">Gol.Darah</label>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">RT / RW</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="rt_rw">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                            <select class="custom-select" name="warganegara">
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                            <label class="label--desc" placeholder="Warga Negara"></label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Kel / Desa</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="kel_desa">
                                            <!-- <label class="label--desc">Nama Depan</label> -->
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="negara" placeholder="Negara">
                                            <!-- <label class="label--desc">Negara</label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Agama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="agama">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Status Perkawinan</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="custom-select" name="status_perkawinan">
                                            <option disabled="disabled" selected="selected"></option>
                                            <option value = "sudah_kawin">Sudah Kawin</option>
                                            <option value = "belum_kawin">Belum Kawin</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pendidikan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pendidikan">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pekerjaan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pekerjaan">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No.Hp</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="no_hp">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets3/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url();?>assets3/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets3/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets3/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets3/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->