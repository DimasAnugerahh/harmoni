<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Leaflet Marker Cluster</title>

        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


        <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="" />

        <!-- Marker Cluster CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.5.3/dist/MarkerCluster.Default.css" />

        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

        <!-- Marker Cluster JS -->
        <script src="https://unpkg.com/leaflet.markercluster@1.5.3/dist/leaflet.markercluster.js"></script>

        <!-- Themify Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">

        <!-- Material Design -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">

        <style>
            html,
            body {
                height: 100%;
            }

            .maps{
                height: 73%;
            }

            #map {
                width: 100%;
                height: 100%;
                border: 1px solid #AAA;
            }

            .bottom-nav {
                position: fixed;
                bottom: 0;
                width: 100%;
                height: 10%;
                /* ✅ fixed height */
                background: white;
                border-top: 1px solid #ddd;
                display: flex;
                align-items: center;
                justify-content: space-around;
            }

            .bottom-nav a {
                text-align: center;
                font-size: 12px;
                color: #757575;
            }

            .bottom-nav a i {
                display: block;
                font-size: 20px;
            }

            .back-btn {
                display: flex;
                align-items: center;
                font-size: 18px;
                color: #333;
                text-decoration: none;
                margin-right: 10px;
            }

            .back-btn i {
                font-size: 20px;
                margin-right: 6px;
            }

            .top-bar {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <div class="container py-4">
            <div class="top-bar d-flex align-items-center justify-content-between">
                <!-- Left: Back Button -->
                <div class="flex-grow-1 d-flex justify-content-start">
                    <a href="javascript:history.back()" class="back-btn">
                        <i class="ti-arrow-left"></i>
                    </a>
                </div>

                <!-- Center: Title -->
                <div class="flex-grow-1 d-flex justify-content-center">
                    <h4 class="mb-0 fw-semibold">Peta Social Mapping</h4>
                </div>

                <!-- Right: Empty (for spacing balance) -->
                <div class="flex-grow-1"></div>
            </div>
        </div>


        <div class="maps">
            <div id="map"></div>
        </div>

        <!-- Bottom Navigation -->
        @include('mobile_sm.bottom_navigation')

        <script src="{{asset('js/maps.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>