<?php
include('../config/config.php');

$popup = '';

$targetDir = "../images/uploads/"; //tempat penyimpanan gambar yang diUPLOAD
$gambar = basename($_FILES["gambar"]["name"]); //ambil nama dan tipe gambar
$targetFilePath = $targetDir . $gambar;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);//ambil tipe gambar dari gambar yang diupload

if (isset($_POST["submit"])) {

  $no           = $_POST['no'];
  $nama_mesjid  = $_POST['nama_mesjid'];
  $alamat       = $_POST['alamat'];
  $kelurahan    = $_POST['kelurahan'];
  $kecamatan    = $_POST['kecamatan'];
  $kota         = $_POST['kota'];
  $provinsi     = $_POST['provinsi'];

  //format gambar yang diterima
  $allowTypes = array('jpg','png','jpeg');
  if (in_array($fileType, $allowTypes)) {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath)) { //max 2MB foto yang di upload
     
      //insert Data into database
      $insert = $conn->query("UPDATE `tempat_ibadah` SET `nama_mesjid`='$nama_mesjid', `alamat`='$alamat'
        , `kelurahan`='$kelurahan', `kecamatan`='$kecamatan', `kota`='$kota', `provinsi`='$provinsi', `gambar`='$gambar'
        WHERE `no`=$no");
        if ($insert) {
          $popup = "Data Berhasil Diperharui";
        } else {
          $popup = "Data Gagal Diperharui";
        }
        $conn->close();
      } else {
        $popup = "Maaf, Gambar Yang Diupload Maks.2MB.";
      }
    } else {
      $popup = 'Maaf, Hanya Format File JPG, PNG, JPEG yang Diterima.';
    }
  } else {
    $popup = 'Harap Masukan Filenya.';
  }
  echo "
  <script type='text/javascript'>
  alert('$popup');
  window.location.href='../data.php';
  </script>
  ";
  ?>
