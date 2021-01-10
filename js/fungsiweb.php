<script type="text/javascript">

//Checklist "Semua"
var semua = new ol.layer.Vector({
  title: 'Semua',
  visible: true, //Awal Check
  source: new ol.source.Vector({
    format: new ol.format.GeoJSON(),
    url: 'togeojson/kecamatan.php?kecamatan=semua'
  }),
  style:new ol.style.Style({
    image: new ol.style.Icon(({
      anchor: [0.5, 46],
      anchorXUnits: 'fraction',
      anchorYUnits: 'pixels',
      src: 'images/star.png'
    }))
  })
});
//-----------------------------------------------------------------------------
//Map
var map = new ol.Map({
  target: 'map',
  layers: [
    new ol.layer.Group({
      'title': 'Tipe Peta',
      layers: [
        new ol.layer.Group({
          title: 'Air dan Daratan',
          type: 'base',
          combine: true,
          visible: false,
          layers: [
            new ol.layer.Tile({
              source: new ol.source.Stamen({
                layer: 'watercolor'
              })
            }),
            new ol.layer.Tile({
              source: new ol.source.Stamen({
                layer: 'terrain-labels'
              })
            })
          ]
        }),
        new ol.layer.Tile({
          title: 'Standar/OSM',
          type: 'base',
          visible: true,
          source: new ol.source.OSM()
        })
      ]
    }),
    new ol.layer.Group({
      title: 'Kecamatan',
      layers: [
        //urutan nya dari bawah ke atas

        <?php

        include('config/config.php');//koneksi ke database

        $sql = "SELECT DISTINCT `kecamatan` FROM `tempat_ibadah`"; //tampilan nama2 kecamatan
        $hasil = $conn->query($sql);
        if($hasil->num_rows > 0){ //jika hasilnya lebih dari 0
          while($row = $hasil->fetch_assoc()){ //tampilkan datanya menggunakan variabel row
            ?>
            //Checklist selain "semua"
            new ol.layer.Vector({
              title:  ' <?php echo $row['kecamatan'] ?> ',
              visible: false, //tidak terCheck
              source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: 'togeojson/kecamatan.php?kecamatan=<?php echo $row['kecamatan'] ?>'
              }),
              style:new ol.style.Style({
                image: new ol.style.Icon(({
                  anchor: [0.5, 46],
                  anchorXUnits: 'fraction',
                  anchorYUnits: 'pixels',
                  src: 'images/star.png'
                }))
              })
            }),
            <?php
          }
        }

        ?>
        //Checklist jika semua kecamatan
        semua //panggil variabel "semua" di line paling atas
      ]
    })
  ],
  view: new ol.View({ //lokasi awal peta
    center: ol.proj.fromLonLat([101.447777, 0.507068]),
    zoom: 12
  })
});

//LayerSwitcher-----------------------------------------------------------------
var layerSwitcher = new ol.control.LayerSwitcher({
  tipLabel: 'Legenda' // Optional label for button
});
map.addControl(layerSwitcher);

//FullScreen--------------------------------------------------------------------
var fullscreen = new ol.control.FullScreen();
map.addControl(fullscreen);

//Pop Up------------------------------------------------------------------------
var container = document.getElementById('popup'),
content_element = document.getElementById('popup-content'),
closer = document.getElementById('popup-closer');

closer.onclick = function() {
  overlay.setPosition(undefined);
  closer.blur();
  return false;
}

var overlay = new ol.Overlay({
  element: container,
  autoPan: true,
  effset: [0, -10]
});
map.addOverlay(overlay);

map.on('click', function(evt) {
  var feature = map.forEachFeatureAtPixel(evt.pixel,
    function(feature, layer) {
      return feature;
    });
    if (feature) {
      var geometry = feature.getGeometry();
      var coord = geometry.getCoordinates();

      var content = '<table>'+
      '<tr>'+
      '<td rowspan=2><img class="" src="images/uploads/' + feature.get('gambar') + '" height="100" width="100" alt=""></td>'+
      '<td><h5>' + feature.get('nama_mesjid') + '</h5></td>'+
      '</tr>'+
      '<tr>'+
      '<td>' + feature.get('alamat') + ', ' + feature.get('kelurahan') + ', ' + feature.get('kecamatan') + feature.get('kota') + feature.get('provinsi') +', Riau, Indonesia</td>'+
      '</tr>'+
      '</table>'+
      '<a  class="btn btn-info float-right" href="lihatdata.php?no=' + feature.get('no') + '">Lihat</a>';
      
      content_element.innerHTML = content;
      overlay.setPosition(coord);

      console.info(feature.getProperties());

    }
  });

  map.on('pointermove', function(e) {
    if (e.dragging) {
      return;
    }
    var pixel = map.getEventPixel(e.originalEvent);
    var hit = map.hasFeatureAtPixel(pixel);

    map.getTarget().style.cursor = hit ? 'pointer' : '';

  });

</script>
