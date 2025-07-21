<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Leaflet Marker Cluster</title>

        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />

        <!-- Marker Cluster CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />

        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

        <!-- Marker Cluster JS -->
        <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>

        <style>
            #map {
                width: 100%;
                height: 600px;
                border: 1px solid #AAA;
            }
        </style>
    </head>

    <body>
        <div class="container-scroller">
            {{-- navbar --}}
            @include('navbar')
            {{-- setting panel --}}
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_settings-panel.html -->
                @include('setting_panel')

                {{-- sidebar --}}
                @include('sidebar')

                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Peta Kondisi Sosial</h4>
                                        {{-- <div class="map-placeholder">
                                                <!-- Placeholder for Map -->
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1219.011760876501!2d119.43412881905908!3d-5.135845009056531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd4ed0033803%3A0x1392ea295a39d087!2sPT%20Perkebunan%20Nusantara%20XIV!5e1!3m2!1sid!2sid!4v1752484756809!5m2!1sid!2sid"
                                                    style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div> --}}

                                        <h3>Peta Kondisi Sosial</h3>
                                        <div id="map"></div>

        <script>
            const map = L.map('map').setView([-1.449157, 121.854558], 5);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            const geojsonData = {
                "type": "FeatureCollection",
                "features": [
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [119.4345067,-5.1361493]
                        },
                        "properties": {
                            "popupContent": "Kantor Regional 8 PTPN 1"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [119.605531,-5.291201]
                        },
                        "properties": {
                            "popupContent": "Kebun Takalar"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [120.8149204, -2.5631286]
                        },
                        "properties": {
                            "popupContent": "kebun Tarengge"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [120.7881781, -2.5251552]
                        },
                        "properties": {
                            "popupContent": `<p>- kebun Tomoni</p>
                                            <p>- luas: 000</p>`
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [119.6477950, -5.2445673]
                        },
                        "properties": {
                            "popupContent": `<p>- kebun Lanna Gowa</p>
                                            <p>- luas: 000</p>`
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [119.5031032, -5.3950136]
                        },
                        "properties": {
                            "popupContent": `<p>- kebun Moncongkomba</p>
                                            <p>- luas: 000</p>`
                        }
                    },
                ]
            };

            const markers = L.markerClusterGroup({
                iconCreateFunction: function (cluster) {
                const count = cluster.getChildCount();

                let color = 'green';
                if (count > 2 && count <= 4) color = 'orange';
                else if (count > 5) color = 'red'; 

                return L.divIcon({
                    html: `<div style="background-color:${color}; border-radius:50%; width:40px; height:40px; display:flex; align-items:center; justify-content:center; color:white; font-weight:bold;">${count}</div>`,
                    className: 'custom-cluster',
                    iconSize: [40, 40]
                });
                }
            });

            const greenIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
                shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            const redIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
                shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            geojsonData.features.forEach(feature => {
                const coords = feature.geometry.coordinates;
                const popupContent = feature.properties.popupContent;
                console.log("Popup Content:", popupContent);
                if (popupContent.includes('Regional')) {
                    var marker = L.marker([coords[1], coords[0]],{icon:redIcon}).bindPopup(popupContent);
                }else{
                    var marker = L.marker([coords[1], coords[0]],{icon:greenIcon}).bindPopup(popupContent);
                }
                markers.addLayer(marker);
            });

            map.addLayer(markers);
            </script>
    </body>

</html>