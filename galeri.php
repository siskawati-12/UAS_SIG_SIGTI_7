<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8" />
  <title>Galeri - Sistem Informasi Geografis Tempat Ibadah</title>
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

    <!-- Tambah Galeri  -->
    <header class="jumbotron my-3">
      <h1 class="display-4">Galeri</h1>
      <p class="lead">Gambar Tambahan Sesuai Tempat Ibadah</p>
      <a href="tambahgaleri.php" class="btn btn-primary btn-lg">Tambah data</a>
      <a href="" class="btn btn-primary btn-lg">Refresh</a>
    </header>

    <!-- Search Bar -->
    <!--
    <div class="active-purple-3 active-purple-4 mb-4">
    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
  </div> -->

  <!-- Data -->
  <div class="row text-center">
    <!-- ambil data  -->
    <?php
    include('config/config.php');

    $sql = "SELECT id_galeri, id_tempatibadah,gambar_galeri, nama_mesjid, alamat, kelurahan, kecamatan
    FROM galeri
    INNER JOIN tempat_ibadah ON galeri.id_tempatibadah = tempat_ibadah.no
    ORDER BY id_tempatibadah";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      //output
      while($row = $result->fetch_assoc()) {
        $id_galeri        = $row["id_galeri"];
        $id_tempatibadah  = $row["id_tempatibadah"];
        $gambar_galeri    = 'images/uploads/'.$row["gambar_galeri"];
        $nama_mesjid      = $row["nama_mesjid"];
        $alamat           = $row["alamat"];
        $kelurahan        = $row["kelurahan"];
        $kecamatan        = $row["kecamatan"];
        ?>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="<?php echo $gambar_galeri; ?>" height="150" width="500" alt=""><!-- 500x325 default dari template -->
            <div class="card-body">
              <h5 class="card-title"><?php echo $nama_mesjid; ?></h5>
              <p class="card-text"><?php echo $alamat . ", " . $kelurahan . ", " . $kecamatan; ?></p>
            </div>
            <div class="card-footer">
              <a href="updategaleri.php?id_galeri=<?php echo $id_galeri; ?>" class="btn btn-warning">Ubah</a>
              <a href="aksi/hapusgaleri_aksi.php?id_galeri=<?php echo $id_galeri ?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>

        <?php
      }
    } else {
      echo "Tidak Ada Data";
    }

    $conn->close();

    ?>

  </div>

  <!-- Footer -->
  <?php include('include/footer.php'); ?>

  <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
