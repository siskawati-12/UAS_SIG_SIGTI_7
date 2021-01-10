<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css"><link rel="stylesheet" href="css/L.Control.Locate.min.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/MarkerCluster.css">
        <link rel="stylesheet" href="css/MarkerCluster.Default.css">
        <link rel="stylesheet" href="css/leaflet-search.css">
        <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
         <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
  <title>Beranda - Sistem Informasi Geografis Tempat Ibadah</title>
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

    <div id="map">
    </header>
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script><script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="data/Kecamatan_Surabaya_1.js"></script>
        <script src="data/Muslim_4.js"></script>
        <script src="data/Hindu_3.js"></script>
        <script src="data/Christian_2.js"></script>
        <script>
         var map = L.map('map', {
            zoomControl:true, maxZoom:20, minZoom:1
        }).fitBounds([[-7.274109861487072,112.69142417600042],[-7.228336321169729,112.744671753179]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'feet',
            secondaryLengthUnit: 'miles',
            primaryAreaUnit: 'sqfeet',
            secondaryAreaUnit: 'sqmiles'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 20,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
        function pop_Kecamatan_Surabaya_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['@id'] !== null ? autolinker.link(feature.properties['@id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['admin_level'] !== null ? autolinker.link(feature.properties['admin_level'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['type'] !== null ? autolinker.link(feature.properties['type'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['boundary'] !== null ? autolinker.link(feature.properties['boundary'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['is_in:city'] !== null ? autolinker.link(feature.properties['is_in:city'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['is_in:province'] !== null ? autolinker.link(feature.properties['is_in:province'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['source'] !== null ? autolinker.link(feature.properties['source'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Kecamatan_Surabaya_1_0(feature) {
            switch(String(feature.properties['name'])) {
                default:
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(223,63,45,1.0)',
                interactive: false,
            }
                    break;
                case 'Asemrowo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(86,224,239,1.0)',
                interactive: false,
            }
                    break;
                case 'Benowo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(55,80,222,1.0)',
                interactive: false,
            }
                    break;
                case 'Bubutan':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(217,105,178,1.0)',
                interactive: false,
            }
                    break;
                case 'Bulak':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(116,216,171,1.0)',
                interactive: false,
            }
                    break;
                case 'Dukuh Pakis':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,187,143,1.0)',
                interactive: false,
            }
                    break;
                case 'Gayungan':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(100,200,33,1.0)',
                interactive: false,
            }
                    break;
                case 'Genteng':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(191,229,134,1.0)',
                interactive: false,
            }
                    break;
                case 'Gubeng':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,73,119,1.0)',
                interactive: false,
            }
                    break;
                case 'Gunung Anyar':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(97,224,191,1.0)',
                interactive: false,
            }
                    break;
                case 'Jambangan':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(49,133,211,1.0)',
                interactive: false,
            }
                    break;
                case 'Karang Pilang':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,201,50,1.0)',
                interactive: false,
            }
                    break;
                case 'Kenjeran':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(169,114,205,1.0)',
                interactive: false,
            }
                    break;
                case 'Krembangan':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,109,119,1.0)',
                interactive: false,
            }
                    break;
                case 'Lakarsantri':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(141,220,122,1.0)',
                interactive: false,
            }
                    break;
                case 'Mulyorejo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,83,216,1.0)',
                interactive: false,
            }
                    break;
                case 'Pabean Cantian':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(205,103,62,1.0)',
                interactive: false,
            }
                    break;
                case 'Pakal':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(47,214,75,1.0)',
                interactive: false,
            }
                    break;
                case 'Rungkut':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(30,231,27,1.0)',
                interactive: false,
            }
                    break;
                case 'Sambikerep':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(195,226,83,1.0)',
                interactive: false,
            }
                    break;
                case 'Sawahan':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(117,198,233,1.0)',
                interactive: false,
            }
                    break;
                case 'Semampir':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,118,174,1.0)',
                interactive: false,
            }
                    break;
                case 'Simokerto':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(211,161,61,1.0)',
                interactive: false,
            }
                    break;
                case 'Sukolilo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(23,202,187,1.0)',
                interactive: false,
            }
                    break;
                case 'Sukomanunggal':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(216,21,184,1.0)',
                interactive: false,
            }
                    break;
                case 'Tambaksari':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(206,212,16,1.0)',
                interactive: false,
            }
                    break;
                case 'Tandes':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(123,54,219,1.0)',
                interactive: false,
            }
                    break;
                case 'Tegalsari':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,234,104,1.0)',
                interactive: false,
            }
                    break;
                case 'Tenggilis Mejoyo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,125,227,1.0)',
                interactive: false,
            }
                    break;
                case 'Wiyung':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(52,47,206,1.0)',
                interactive: false,
            }
                    break;
                case 'Wonocolo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(81,43,204,1.0)',
                interactive: false,
            }
                    break;
                case 'Wonokromo':
                    return {
                pane: 'pane_Kecamatan_Surabaya_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(55,109,217,1.0)',
                interactive: false,
            }
                    break;
            }
        }
        map.createPane('pane_Kecamatan_Surabaya_1');
        map.getPane('pane_Kecamatan_Surabaya_1').style.zIndex = 401;
        map.getPane('pane_Kecamatan_Surabaya_1').style['mix-blend-mode'] = 'normal';
        var layer_Kecamatan_Surabaya_1 = new L.geoJson(json_Kecamatan_Surabaya_1, {
            attribution: '',
            interactive: false,
            dataVar: 'json_Kecamatan_Surabaya_1',
            layerName: 'layer_Kecamatan_Surabaya_1',
            pane: 'pane_Kecamatan_Surabaya_1',
            onEachFeature: pop_Kecamatan_Surabaya_1,
            style: style_Kecamatan_Surabaya_1_0,
        });
        bounds_group.addLayer(layer_Kecamatan_Surabaya_1);
        map.addLayer(layer_Kecamatan_Surabaya_1);
        function pop_Christian_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong>AGAMA</strong><br />' + (feature.properties['religion'] !== null ? autolinker.link(feature.properties['religion'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>NAMA</strong><br />' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>ALAMAT LENGKAP</strong><br />' + (feature.properties['addr:full'] !== null ? autolinker.link(feature.properties['addr:full'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>KAPASITAS</strong><br />' + (feature.properties['capacity:persons'] !== null ? autolinker.link(feature.properties['capacity:persons'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>TINGKAT BANGUNAN</strong><br />' + (feature.properties['building:levels'] !== null ? autolinker.link(feature.properties['building:levels'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Christian_2_0() {
            return {
                pane: 'pane_Christian_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/place_of_worship_christian3.svg',
            iconSize: [22.799999999999997, 22.799999999999997]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_Christian_2');
        map.getPane('pane_Christian_2').style.zIndex = 402;
        map.getPane('pane_Christian_2').style['mix-blend-mode'] = 'normal';
        var layer_Christian_2 = new L.geoJson(json_Christian_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Christian_2',
            layerName: 'layer_Christian_2',
            pane: 'pane_Christian_2',
            onEachFeature: pop_Christian_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_Christian_2_0(feature));
            },
        });
        var cluster_Christian_2 = new L.MarkerClusterGroup({showCoverageOnHover: false,
            spiderfyDistanceMultiplier: 2});
        cluster_Christian_2.addLayer(layer_Christian_2);

        bounds_group.addLayer(layer_Christian_2);
        cluster_Christian_2.addTo(map);
        function pop_Hindu_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong>AGAMA</strong><br />' + (feature.properties['religion'] !== null ? autolinker.link(feature.properties['religion'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>NAMA</strong><br />' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>ALAMAT LENGKAP</strong><br />' + (feature.properties['addr:full'] !== null ? autolinker.link(feature.properties['addr:full'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>KAPASITAS</strong><br />' + (feature.properties['capacity:persons'] !== null ? autolinker.link(feature.properties['capacity:persons'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>TINGKAT BANGUNAN</strong><br />' + (feature.properties['building:levels'] !== null ? autolinker.link(feature.properties['building:levels'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Hindu_3_0() {
            return {
                pane: 'pane_Hindu_3',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/place_of_worship_hindu3.svg',
            iconSize: [21.279999999999998, 21.279999999999998]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_Hindu_3');
        map.getPane('pane_Hindu_3').style.zIndex = 403;
        map.getPane('pane_Hindu_3').style['mix-blend-mode'] = 'normal';
        var layer_Hindu_3 = new L.geoJson(json_Hindu_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Hindu_3',
            layerName: 'layer_Hindu_3',
            pane: 'pane_Hindu_3',
            onEachFeature: pop_Hindu_3,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_Hindu_3_0(feature));
            },
        });
        bounds_group.addLayer(layer_Hindu_3);
        map.addLayer(layer_Hindu_3);
        function pop_Muslim_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong>AGAMA</strong><br />' + (feature.properties['religion'] !== null ? autolinker.link(feature.properties['religion'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>NAMA</strong><br />' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>ALAMAT LENGKAP</strong><br />' + (feature.properties['addr:full'] !== null ? autolinker.link(feature.properties['addr:full'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>KAPASITAS</strong><br />' + (feature.properties['capacity:persons'] !== null ? autolinker.link(feature.properties['capacity:persons'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>TINGKAT BANGUNAN</strong><br />' + (feature.properties['building:levels'] !== null ? autolinker.link(feature.properties['building:levels'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Muslim_4_0() {
            return {
                pane: 'pane_Muslim_4',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/place_of_worship_islamic3.svg',
            iconSize: [24.320000000000014, 24.320000000000014]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_Muslim_4');
        map.getPane('pane_Muslim_4').style.zIndex = 404;
        map.getPane('pane_Muslim_4').style['mix-blend-mode'] = 'normal';
        var layer_Muslim_4 = new L.geoJson(json_Muslim_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Muslim_4',
            layerName: 'layer_Muslim_4',
            pane: 'pane_Muslim_4',
            onEachFeature: pop_Muslim_4,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_Muslim_4_0(feature));
            },
        });
        var cluster_Muslim_4 = new L.MarkerClusterGroup({showCoverageOnHover: false,
            spiderfyDistanceMultiplier: 2});
        cluster_Muslim_4.addLayer(layer_Muslim_4);

        bounds_group.addLayer(layer_Muslim_4);
        cluster_Muslim_4.addTo(map);
            var title = new L.Control();
            title.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info');
                this.update();
                return this._div;
            };
            title.update = function () {
                this._div.innerHTML = '<h2> (offline)</h2>';
            };
            title.addTo(map);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/Muslim_2.png" /> Muslim': cluster_Muslim_4,'<img src="legend/Hindu_3.png" /> Hindu': layer_Hindu_3,'<img src="legend/Christian_2.png" /> Christian': cluster_Christian_2,'Kecamatan_Surabaya<br /><table><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_0.png" /></td><td></td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Asemrowo1.png" /></td><td>Asemrowo</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Benowo2.png" /></td><td>Benowo</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Bubutan3.png" /></td><td>Bubutan</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Bulak4.png" /></td><td>Bulak</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_DukuhPakis5.png" /></td><td>Dukuh Pakis</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Gayungan6.png" /></td><td>Gayungan</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Genteng7.png" /></td><td>Genteng</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Gubeng8.png" /></td><td>Gubeng</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_GunungAnyar9.png" /></td><td>Gunung Anyar</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Jambangan10.png" /></td><td>Jambangan</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_KarangPilang11.png" /></td><td>Karang Pilang</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Kenjeran12.png" /></td><td>Kenjeran</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Krembangan13.png" /></td><td>Krembangan</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Lakarsantri14.png" /></td><td>Lakarsantri</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Mulyorejo15.png" /></td><td>Mulyorejo</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_PabeanCantian16.png" /></td><td>Pabean Cantian</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Pakal17.png" /></td><td>Pakal</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Rungkut18.png" /></td><td>Rungkut</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Sambikerep19.png" /></td><td>Sambikerep</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Sawahan20.png" /></td><td>Sawahan</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Semampir21.png" /></td><td>Semampir</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Simokerto22.png" /></td><td>Simokerto</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Sukolilo23.png" /></td><td>Sukolilo</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Sukomanunggal24.png" /></td><td>Sukomanunggal</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Tambaksari25.png" /></td><td>Tambaksari</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Tandes26.png" /></td><td>Tandes</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Tegalsari27.png" /></td><td>Tegalsari</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_TenggilisMejoyo28.png" /></td><td>Tenggilis Mejoyo</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Wiyung29.png" /></td><td>Wiyung</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Wonocolo30.png" /></td><td>Wonocolo</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_Surabaya_1_Wonokromo31.png" /></td><td>Wonokromo</td></tr></table>': layer_Kecamatan_Surabaya_1,"OpenStreetMap": layer_OpenStreetMap_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_Kecamatan_Surabaya_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['name'] !== null?String('<div style="color: #000000; font-size: 10pt; font-weight: bold; font-family: \'Calibri\', sans-serif;">' + layer.feature.properties['name']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Kecamatan_Surabaya_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_Kecamatan_Surabaya_1]);
        map.on("zoomend", function(){
            resetLabels([layer_Kecamatan_Surabaya_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_Kecamatan_Surabaya_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_Kecamatan_Surabaya_1]);
        });
        </script>

    <!-- Footer -->
    <?php include('include/footer.php'); ?>

  </body>
  </html>
