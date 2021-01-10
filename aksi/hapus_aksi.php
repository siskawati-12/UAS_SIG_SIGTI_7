<?php
include('../config/config.php');

$popup='';

if (isset($_GET['no'])) {
  $no = $_GET['no'];
  $delete = $conn->query("DELETE FROM `tempat_ibadah` WHERE `no` = $no");
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
window.location.href='../data.php';
</script>
";
?>
