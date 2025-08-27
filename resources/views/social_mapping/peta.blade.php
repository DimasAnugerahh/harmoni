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
                                        <script src="{{asset('js/maps.js')}}"></script>
    </body>

</html>