<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Harmoni - Tani Organik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">

        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Material Design -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">

        <!-- Slick Carousel -->
        <!-- Slick CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

        <style>
            body {
                background-color: #f8f9fa;
                font-size: 14px;
            }

            /* .list-mitra .row {
                padding-left: -100px;
                padding-right: -100px;
            } */

            .active {
                background: #00796b !important;
                border-radius: 50%;
                color: white;
                padding: 10px;
            }

            .logo-text {
                font-weight: 600;
                font-size: 18px;
            }

            .logo-sub {
                font-size: 12px;
                color: gray;
                margin-top: -5px;
            }

            /* .slider-item {
                display: flex;
                flex-direction: column;
                align-items: center;
            } */

            .icon-circle {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background-color: #e0f2f1;
                align-items: center;
                justify-content: center;
                margin: auto;
                overflow: hidden;
                margin: 20px;
            }

            .icon-circle i {
                font-size: 24px;
                color: #00796b;
            }

            .card-partner img {
                max-width: 40px;
                margin-bottom: 5px;
            }

            .card {
                border-radius: 10%;
            }

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

            .slick-slider {
                /* padding: 0 30px 0 0; */
                overflow: hidden;
            }

            .label-slider {
                /* border: solid 1px black; */
                /* background: red; */
                color: var(--2, #000);
                text-align: center;
                font-family: Lato;
                font-size: 12px;
                font-style: normal;
                font-weight: 500;
                line-height: normal;
                margin-top: 8px;
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

        <div class="container pt-3 pb-5">
            <!-- Header -->
            <div class="text-center mb-3">
                <img src="{{asset('images/logo.svg')}}" alt="">
            </div>

            <!-- Banner -->
            <div class="card mb-3">
                <div class="card-body d-flex">
                    <div>
                        <p class="font-weight-bold mb-1">Mulai untung dengan daftar kemitraan petani</p>
                        <a href="#" class="btn btn-sm btn-success">Lihat Detail</a>
                    </div>
                    <img loading="lazy" src="https://via.placeholder.com/80" alt="Banner" class="ml-auto">
                </div>
            </div>

            <!-- Panduan Bertani -->
            <p class="font-weight-bold mb-2">Panduan Bertani</p>
            <div class="text-center mb-2 slick-slider">
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/1.jpg') }}" alt="Panduan Bertani">
                    </div>
                    <div class="label-slider">
                        <p>Kalbu Petani</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="Panduan Bertani">
                    </div>
                    <div class="label-slider">
                        <p>Kalbu Petani</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="Panduan Bertani">
                    </div>
                    <div class="label-slider">
                        <p>Kalbu Petani</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="Panduan Bertani">
                    </div>
                    <div class="label-slider">
                        <p>Kalbu Petani</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="Panduan Bertani">
                    </div>
                    <div class="label-slider">
                        <p>Kalbu Petani</p>
                    </div>
                </div>
            </div>

            <!-- Mitra -->
            <div class="d-flex justify-content-between align-items-center mb-2">
                <p class="font-weight-bold mb-0">Agros bekerja sama dengan</p>
                <a href="#" class="text-success p">Lihat Semua</a>
            </div>
            <div class="d-flex justrify-content-around mt-2">
                <div class="col-4 text-center">
                    <div class="card card-partner p-2">
                        <img loading="lazy" src="images/samples/300x300/2.jpg" alt="Logo">
                        <p>Aditya</p>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="card card-partner p-2">
                        <img loading="lazy" src="images/samples/300x300/4.jpg" alt="Logo">
                        <p>AGROAN</p>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="card card-partner p-2">
                        <img loading="lazy" src="images/samples/300x300/5.jpg" alt="Logo">
                        <p>Agromas</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <a href="#"><i class="ti-home home-navigate-active"></i>Beranda</a>
            <a href="#"><i class="ti-search"></i>Cari</a>
            <a href="#"><i class="ti-comment-alt"></i>Chat</a>
            <a href="#"><i class="ti-user"></i>Profil</a>
        </div>

        <!-- Scripts -->
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('js/slick.js')}}"></script>
        {{-- <script src="{{asset('js/slick.min.js')}}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>

</html>