<?php
include('../config/config.php');

$popup = '';

$targetDir = "../images/uploads/"; //tempat penyimpanan gambar yang diUPLOAD
$gambar_galeri = basename($_FILES["gambar_galeri"]["name"]); //ambil nama dan tipe gambar
$targetFilePath = $targetDir . $gambar_galeri;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);//ambil tipe gambar dari gambar yang diupload

if (isset($_POST["submit"])) {

  $id_tempatibadah = $_POST['id_tempatibadah'];
  //format gambar yang diterima
  $allowTypes = array('jpg','png','jpeg');
  if (in_array($fileType, $allowTypes)) {
    if (move_uploaded_file($_FILES["gambar_galeri"]["tmp_name"], $targetFilePath)) { //max 2MB foto yang di upload
      //insert Data into database
      $insert = $conn->query("INSERT INTO `galeri` (`id_tempatibadah`, `gambar_galeri`) VALUES ('".$id_tempatibadah."', '".$gambar_galeri."')");
      if ($insert) {
        $popup = "Galeri Berhasil Disimpan";
      } else {
        $popup = "Galeri Gagal Disimpan";
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
window.location.href='../galeri.php';
</script>
";
?>
