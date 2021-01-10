<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8" />
  <title>Tambah Galeri - Sistem Informasi Geografis Tempat Ibadah</title>
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
      <h1 class="display-4">Tambah Galeri</h1>
    </header>

    <!-- Tambah Data -->
    <form method="post" action="aksi/tambahgaleri_aksi.php" enctype="multipart/form-data">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tempat Ibadah</label>
        <div class="col-sm-10">
          <select class="form-control" id="sel1" name="id_tempatibadah">
            <?php
            include('config/config.php');
            $sql = "SELECT no, nama_mesjid FROM tempat_ibadah";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $no           = $row["no"];
                $nama_mesjid  = $row["nama_mesjid"];
                ?>
                <!-- Option -->
                <option value="<?php echo $no; ?>"><?php echo $nama_mesjid; ?></option>
                <?php
              }
            }
            $conn->close();
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="gambar_galeri" required>
            <label class="custom-file-label" for="customFile">Choose file</label>
            <small class="form-text text-muted">*Ukuran gambar maks. 2mb. jika lebih dari 2mb, kunjungi <a href="https://compressjpeg.com/">compressjpeg.com</a></small>
          </div>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>

    <!-- Footer -->
    <?php include('include/footer.php'); ?>

    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  </html>
