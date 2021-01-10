<!doctype html>
<html lang="en">
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
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script><script src="js/L.Control.Locate.min.js"></script>
        <script src="js/multi-style-layer.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script src="data/INDONESIA_KEC_1.js"></script>
        <script src="data/mesjid_2.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-5.804167281081419,91.19619140625],[5.987452636690408,112.73663258272084]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            map.setMaxBounds(map.getBounds());
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
        function pop_INDONESIA_KEC_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ID'] !== null ? autolinker.link(feature.properties['ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ID_Kec'] !== null ? autolinker.link(feature.properties['ID_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['xcoord'] !== null ? autolinker.link(feature.properties['xcoord'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ycoord'] !== null ? autolinker.link(feature.properties['ycoord'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kode_prop'] !== null ? autolinker.link(feature.properties['kode_prop'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kode_kab'] !== null ? autolinker.link(feature.properties['kode_kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_INDONESIA_KEC_1_0() {
            return {
                pane: 'pane_INDONESIA_KEC_1',
                interactive: true,
            }
        }
        function style_INDONESIA_KEC_1_1() {
            return {
                pane: 'pane_INDONESIA_KEC_1',
                opacity: 1,
                color: 'rgba(128,62,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_INDONESIA_KEC_1');
        map.getPane('pane_INDONESIA_KEC_1').style.zIndex = 401;
        map.getPane('pane_INDONESIA_KEC_1').style['mix-blend-mode'] = 'normal';
        var layer_INDONESIA_KEC_1 = new L.geoJson.multiStyle(json_INDONESIA_KEC_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_INDONESIA_KEC_1',
            layerName: 'layer_INDONESIA_KEC_1',
            pane: 'pane_INDONESIA_KEC_1',
            onEachFeature: pop_INDONESIA_KEC_1,
            styles: [style_INDONESIA_KEC_1_0,style_INDONESIA_KEC_1_1,]
        });
        bounds_group.addLayer(layer_INDONESIA_KEC_1);
        map.addLayer(layer_INDONESIA_KEC_1);
        function pop_mesjid_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NO'] !== null ? autolinker.link(feature.properties['NO'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Mesji</th>\
                        <td>' + (feature.properties['Nama_Mesji'] !== null ? autolinker.link(feature.properties['Nama_Mesji'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">y</th>\
                        <td>' + (feature.properties['y'] !== null ? autolinker.link(feature.properties['y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">x</th>\
                        <td>' + (feature.properties['x'] !== null ? autolinker.link(feature.properties['x'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_mesjid_2_0() {
            return {
                pane: 'pane_mesjid_2',
        rotationAngle: -0.00872665,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/place_of_worship_islamic3.svg',
            iconSize: [19.00000000000001, 19.00000000000001]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_mesjid_2');
        map.getPane('pane_mesjid_2').style.zIndex = 402;
        map.getPane('pane_mesjid_2').style['mix-blend-mode'] = 'normal';
        var layer_mesjid_2 = new L.geoJson(json_mesjid_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_mesjid_2',
            layerName: 'layer_mesjid_2',
            pane: 'pane_mesjid_2',
            onEachFeature: pop_mesjid_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_mesjid_2_0(feature));
            },
        });
        var cluster_mesjid_2 = new L.MarkerClusterGroup({showCoverageOnHover: false,
            spiderfyDistanceMultiplier: 2});
        cluster_mesjid_2.addLayer(layer_mesjid_2);

        bounds_group.addLayer(layer_mesjid_2);
        cluster_mesjid_2.addTo(map);
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
        L.control.layers(baseMaps,{'<img src="legend/mesjid_2.png" /> mesjid': cluster_mesjid_2,'<img src="legend/INDONESIA_KEC_1.png" /> INDONESIA_KEC': layer_INDONESIA_KEC_1,"OpenStreetMap": layer_OpenStreetMap_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_mesjid_2.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Nama_Mesji'] !== null?String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['Nama_Mesji']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_mesjid_2'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        map.addControl(new L.Control.Search({
            layer: cluster_mesjid_2,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Nama_Mesji'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer_mesjid_2]);
        map.on("zoomend", function(){
            resetLabels([layer_mesjid_2]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_mesjid_2]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_mesjid_2]);
        });
        </script>
    </body>
</html>
