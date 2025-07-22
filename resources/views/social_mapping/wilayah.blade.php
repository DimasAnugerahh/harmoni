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
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [110.576195, -7.660215]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Batujamus (PTPN IX – Karanganyar)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [109.019409, -7.713578]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Warnasari (PTPN IX – Cilacap)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [109.008233, -7.439152]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Kawung (PTPN IX – Cilacap)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [109.449445, -7.662344]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Krumbut (PTPN IX – Banyumas)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [109.680919, -6.849946]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Blimbing (PTPN IX – Pekalongan)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [109.783482, -6.980133]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Siluwok (PTPN IX – Batang)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [110.010482, -6.866498]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Merbuh (PTPN IX – Kendal)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [110.661744, -6.224741]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Balong (PTPN IX – Jepara)</p>"
                                                        }
                                                    },
                                                        {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [110.384063, -7.010623]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Sukamangli (PTPN IX – Kendal)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [110.444288, -6.999232]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Getas (PTPN IX – Semarang)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [110.482541, -7.027263]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Ngobo (PTPN IX – Semarang)</p>"
                                                        }
                                                    },
                                                    {
                                                        "type": "Feature",
                                                        "geometry": {
                                                            "type": "Point",
                                                            "coordinates": [111.024560, -6.794857]
                                                        },
                                                        "properties": {
                                                            "popupContent": "<p>Kebun Jollong (PTPN IX – Pati)</p>"
                                                        }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [99.508889, 2.905]  // 99°30'32" E, 2°54'18" N
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>Sei Silau Estate (PTPN III – Asahan, Sumut)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [99.501389, 2.868661]  // 99°30'4.98" E, 2°52'3.18" N
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>Pulau Mandi Estate (PTPN III – Asahan, Sumut)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [99.430, 2.910389]  // 99°25'50.8" E, 2°54'37.4" N
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>Ambalutu Estate (PTPN III – Asahan, Sumut)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [99.419, 2.884722]  // 99°25'8" E, 2°53'5" N
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>Huta Padang Estate (PTPN III – Asahan, Sumut)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [99.161667, 3.122222]  // 99°09'38.7" E, 3°07'09.8" N
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>Dolok Ilir Estate (PTPN IV – Simalungun, Sumut)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [99.199, 3.100556]  // 99°11'56" E, 3°06'02" N
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>Laras Estate (PTPN IV – Simalungun, Sumut)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [113.363, -8.135] },
                                                    "properties": { "popupContent": "<p>Kebun Djatiroto (PTPN XI – Lumajang)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [114.343, -7.726] },
                                                    "properties": { "popupContent": "<p>Kebun Kendenglembu (PTPN XII – Banyuwangi)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [113.619, -7.436] },
                                                    "properties": { "popupContent": "<p>Kebun Sukosari (PTPN XI – Bondowoso)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [112.699, -7.755] },
                                                    "properties": { "popupContent": "<p>Kebun Glenmore (PTPN XII – Banyuwangi)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [103.082371, -3.054989]
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>PTPN VII – Unit Sungai Lengi (Muara Enim, Sumsel)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": {
                                                        "type": "Point",
                                                        "coordinates": [104.460000, -2.990000]
                                                    },
                                                    "properties": {
                                                        "popupContent": "<p>PTPN VII – Kebun Betung (Palembang-Sekayu, Sumsel)</p>"
                                                    }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [107.6191, -6.9175] },
                                                    "properties": { "popupContent": "<p>Kebun Cibodas (PTPN VIII – Cianjur, Jabar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [106.7417, -6.5990] },
                                                    "properties": { "popupContent": "<p>Kebun Sukabumi (PTPN VIII – Sukabumi, Jabar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [107.7239, -6.9235] },
                                                    "properties": { "popupContent": "<p>Kebun Tempur (PTPN VIII – Bandung, Jabar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [109.3333, 0.0000] },
                                                    "properties": { "popupContent": "<p>Kebun Danau Salak (PTPN XIII – Pontianak, Kalbar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [109.3333, 0.0500] },
                                                    "properties": { "popupContent": "<p>Kebun Kumai (PTPN XIII – Kumai, Kalbar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [109.3000, -0.0500] },
                                                    "properties": { "popupContent": "<p>Kebun Batulicin (PTPN XIII – Batulicin, Kalbar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [109.5000, -0.1000] },
                                                    "properties": { "popupContent": "<p>Kebun Pelaihari (PTPN XIII – Pelaihari, Kalbar)</p>" }
                                                    },
                                                    {
                                                    "type": "Feature",
                                                    "geometry": { "type": "Point", "coordinates": [109.4500, 0.0100] },
                                                    "properties": { "popupContent": "<p>Kebun Pamukan (PTPN XIII – Pamukan, Kalbar)</p>" }
                                                    }
                                                ]
                                            };

                                            var markers = L.markerClusterGroup();

                                            geojsonData.features.forEach(feature => {
                                                const coords = feature.geometry.coordinates;
                                                const popupContent = feature.properties.popupContent;
                                                const marker = L.marker([coords[1], coords[0]]).bindPopup(popupContent);
                                                markers.addLayer(marker);
                                            });

                                            map.addLayer(markers);
                                        </script>
    </body>

</html>