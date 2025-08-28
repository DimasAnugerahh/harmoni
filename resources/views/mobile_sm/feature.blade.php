<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Harmoni - Mobile PUMK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">

        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- font style --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">

        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Material Design -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">

        <style>
            .bottom-nav {
                position: fixed;
                bottom: 0;
                width: 100%;
                background: white;
                border-top: 1px solid #ddd;
                display: flex;
                align-items: center;
                justify-content: space-around;
                padding: 5px 0;
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
        </style>
    </head>

    <body>
        <div class="container py-4">
            <h4 class="text-center fw-semibold mb-3">Fitur</h4>

            <div class="bg-white p-3 rounded shadow-sm">
                <p class="fw-semibold mb-3">Semua Fitur</p>

                @php
                $mitras = [
                ['url'=>'view_mobilesm_article','logo' => 'images/koran.png', 'name' => 'Artikel'],
                ['url'=>'view_mobilesm_article','logo' => 'images/buildings.png', 'name' => 'Daftar Unit Kerja PTPN'],
                ['url'=>'view_mobilesm_article','logo' => 'images/maps.png', 'name' => 'Peta Social Mapping'],
                ['url'=>'view_mobilesm_article','logo' => 'images/survey-target.png', 'name' => 'Target survey'],
                ['url'=>'view_mobilesm_article','logo' => 'images/survey.png', 'name' => 'survey'],
                ];
                @endphp

                <div class="list-group">
                    @foreach ($mitras as $mitra)
                    <a href="{{route($mitra['url'])}}"
                        class="list-group-item list-group-item-action d-flex align-items-center justify-content-between mt-2 rounded">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($mitra['logo']) }}" alt="{{ $mitra['name'] }}" class="me-3"
                                    style="height: 32px; width: 32px; object-fit: contain;">
                                <span class="ml-3 text-dark">{{ $mitra['name'] }}</span>
                            </div>
                        <span class="text-secondary">&gt;</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        {{-- <div class="bottom-nav">
            <a href="#"><i class="ti-home"></i>Beranda</a>
            <a href="#"><i class="ti-layout-grid3 home-navigate-active-pumk"></i>Fitur</a>
            <a href="#"><i class="ti-headphone-alt"></i>CS</a>
            <a href="#"><i class="ti-user"></i>Profil</a>
        </div> --}}

        @include('mobile_sm.bottom_navigation')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>