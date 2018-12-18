<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>


    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
          <?php echo form_open('Buattim/update') ?>
              <div class="form-group">
                <label for="text">id</label>
                <input type="text" name="id" class="form-control" value="<?php echo $buattim_view->id_relawan ?>" placeholder="Masukkan id" required>
              </div>
			  <div class="form-group">
                <label for="text">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $buattim_view->nama ?>" placeholder="Masukkan Nama Relawan" required>
              </div>

              <div class="form-group">
                <label for="text">Specialis</label>
                <input type="text" name="specialis" class="form-control" value="<?php echo $buattim_view->specialis ?>" placeholder="Masukkan specialis" required>
              </div>

              <div class="form-group">
                <label for="text">Tim</label>
                <input type="text" name="tim" value="<?php echo $buattim_view->tim ?>" class="form-control" required >
              </div>
			  
              <button href="<?php echo base_url()?>index.php/Buattim/update" type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>