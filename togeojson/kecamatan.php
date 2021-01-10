<?php
$con = mysqli_connect("localhost","root","","gisibadah");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_GET['kecamatan'])) {

  $kec = $_GET['kecamatan'];

  if ($kec != "semua") { //jika $kec bukan sama dengan "semua"
    $sql = "SELECT * FROM tempat_ibadah WHERE kecamatan = '".$kec."' ";
    $rs = $con->query($sql);
    if (!$rs) {
      echo 'An SQL error occured.\n';
      exit;
    }
    $geojson = array (
      'type'  => 'FeatureCollection',
      'features'  => array()
    );
    while ($row = mysqli_fetch_row($rs)) {
      $properties = $row;
      unset($properties[$row[5]]); //x
      unset($properties[$row[6]]); //y
      $feature = array(
        'type'  => 'Feature',
        'geometry' => array(
          'type' => 'Point',
          'coordinates' => array(
            (float)$row[6], //y
            (float)$row[5] //x
          )
        ),
        //'properties' => $properties
        'properties' => array(
          'no' => $row[0],
          'nama_mesjid' => $row[1],
          'alamat' => $row[2],
          'kelurahan' => $row[3],
          'kecamatan' => $row[4],
          'x' => (float)$row[5], //x
          'y' => (float)$row[6], //y
          'gambar' => $row[7]
        )
      );
      array_push($geojson['features'], $feature);
    }
    header('Content-type: application/json');
    echo json_encode($geojson, JSON_PRETTY_PRINT);

    $con = NULL;
  } else { //jika $kec sama dengan "semua"
    $sql = 'SELECT * FROM tempat_ibadah ';
    $rs = $con->query($sql);
    if (!$rs) {
      echo 'An SQL error occured.\n';
      exit;
    }
    $geojson = array (
      'type'  => 'FeatureCollection',
      'features'  => array()
    );
    while ($row = mysqli_fetch_row($rs)) {
      $properties = $row;
      unset($properties[$row[5]]); //x
      unset($properties[$row[6]]); //y
      $feature = array(
        'type'  => 'Feature',
        'geometry' => array(
          'type' => 'Point',
          'coordinates' => array(
            (float)$row[6], //y
            (float)$row[5] //x
          )
        ),
        //'properties' => $properties
        'properties' => array(
          'no' => $row[0],
          'nama_mesjid' => $row[1],
          'alamat' => $row[2],
          'kelurahan' => $row[3],
          'kecamatan' => $row[4],
          'x' => (float)$row[5], //x
          'y' => (float)$row[6], //y
          'gambar' => $row[7]
        )
      );
      array_push($geojson['features'], $feature);
    }
    header('Content-type: application/json');
    echo json_encode($geojson, JSON_PRETTY_PRINT);

    $con = NULL;
  }
}

?>
