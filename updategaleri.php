<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8" />
  <title>Update Galeri - Sistem Informasi Geografis Tempat Ibadah</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
  <!-- OpenLayers primary-->
  <link rel="stylesheet" href="https://openlayers.org/en/latest/css/ol.css" />
  <script type="text/javascript" src="https://openlayers.org/en/latest/build/ol.js"></script>
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>


  <!-- OpenLayers Features -->
  <!-- OpenLayers LayerSwitcher -->
  <link rel="stylesheet" href="css/ol3-layerswitcher.css" />
  <link rel="stylesheet" href="css/fungsiweb.css" />

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>
<body>

  <!-- Navigation -->
  <?php include('include/navigation.php'); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Tambah Data -->
    <header class="my-4">
      <h1 class="display-4">Update Data</h1>
    </header>

    <!-- Update Data -->
    <?php
    include('config/config.php');
    $id_galeri = $_GET['id_galeri'];
    $data = mysqli_query($conn, "SELECT *, nama_mesjid
      FROM galeri
      INNER JOIN tempat_ibadah ON galeri.id_tempatibadah = tempat_ibadah.no
      WHERE id_galeri = '$id_galeri'");
      while ($info = mysqli_fetch_array($data)) {
        ?>

        <form method="post" action="aksi/updategaleri_aksi.php" enctype="multipart/form-data">
          <div class="form-group row">
            <!-- hidden primary key -->

            <input type="hidden" class="form-control" name="id_galeri" value="<?php echo $info['id_galeri']; ?>">

            <label class="col-sm-2 col-form-label">Tempat Ibadah</label>
            <div class="col-sm-10">
              <p class="text-primary"><?php echo $info['nama_mesjid']; ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_galeri" required >
                <label class="custom-file-label" for="customFile">Choose file</label>
                <small class="form-text text-muted">*Ukuran gambar maks. 2mb. jika lebih dari 2mb, kunjungi <a href="https://compressjpeg.com/">compressjpeg.com</a></small>
              </div>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-success">Perbarui</button>
        </form>

        <?php
      }
      ?>


      <!-- Footer -->
      <?php include('include/footer.php'); ?>

      <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>
