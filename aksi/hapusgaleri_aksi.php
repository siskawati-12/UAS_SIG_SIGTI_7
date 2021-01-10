<?php
include('../config/config.php');

$popup='';

if (isset($_GET['id_galeri'])) {
  $id_galeri = $_GET['id_galeri'];
  $delete = $conn->query("DELETE FROM `galeri` WHERE `id_galeri` = $id_galeri");
  if ($delete) {
    $popup = 'Data Berhasil Dihapus';
  } else {
    $popup = 'Data Gagal Dihapus';
  }
  $conn->close();
} else {
  $popup = 'Data Tidak Diketahui';
}
echo "
<script type='text/javascript'>
alert('$popup');
window.location.href='../galeri.php';
</script>
";
?>
