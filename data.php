<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8" />
  <title>Data - Sistem Informasi Geografis Tempat Ibadah</title>
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
    <header class="jumbotron my-3">
      <h1 class="display-4">Data Tempat Ibadah</h1>
      <p class="lead">Daftar Tempat Ibadah yang Telah Disimpan dalam Database.</p>
        <a href="tambahdata.php" class="btn btn-primary btn-lg">Tambah data</a>
        <a href="" class="btn btn-primary btn-lg">Refresh</a>
        <div class="d-flex row">
          <div class="card-body card-block">
              <!-- Cari by Keyword -->
              <?php //die($_GET['search']); ?>
              <form class="col-md-4 row" method="GET">
                  <input style="text-align: left;" type="text" name="search" class="form-control col-10" placeholder="Masukkan Nama Tempat Ibadah" value="<?php 
                      if(isset($_GET['search'])) echo $_GET['search'];?>">    
                          <div class="col-sm-3 col-lg-2">
                              <button type="submit" class="btn btn-primary">Cari</button>
                          </div>
              </form>
          </div>
      </div>
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

      
      if (isset($_GET['search']) != null) {
        $cari = $_GET['search'];
        $sql = "SELECT * FROM tempat_ibadah WHERE nama_mesjid LIKE '%$cari%'";
      } else {
        $sql = "SELECT * FROM tempat_ibadah";
      }
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
        //output
        while($row = $result->fetch_assoc()) {
          $primarykey   = $row["no"];
          $nama_mesjid  = $row["nama_mesjid"];
          $alamat       = $row["alamat"];
          $kelurahan    = $row["kelurahan"];
          $kecamatan    = $row["kecamatan"];
          $kota         = $row["kota"];
          $provinsi     = $row["provinsi"];
          $imageURL     = 'images/uploads/'.$row["gambar"];
          ?>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img class="card-img-top" src="<?php echo $imageURL; ?>" height="150" width="500" alt=""><!-- 500x325 default dari template -->
              <div class="card-body">
                <h5 class="card-title"><?php echo $nama_mesjid; ?></h5>
                <p class="card-text"><?php echo $alamat . ", " . $kelurahan . ", " . $kecamatan . ", " . $kota . ", " . $provinsi; ?></p>
              </div>
              <div class="card-footer">
                <a href="lihatdata.php?no=<?php echo $primarykey; ?>" class="btn btn-info">Lihat</a>
                <a href="updatedata.php?no=<?php echo $primarykey; ?>" class="btn btn-warning">Ubah</a>
                <a href="aksi/hapus_aksi.php?no=<?php echo $primarykey ?>" class="btn btn-danger">Hapus</a>
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
  
