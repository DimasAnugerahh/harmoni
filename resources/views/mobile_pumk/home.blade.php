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
                <img style="width: 40%" src="{{asset('images/pumk.svg')}}" alt="">
            </div>

            <!-- Banner -->
            <div class="card mb-3">
                <div class="card-body d-flex">
                    <div>
                        <p class="font-weight-bold mb-1">Mulai untung dengan daftar kemitraan petani</p>
                        <a href="#" class="btn btn-sm btn-detail-pumk">Lihat Detail</a>
                    </div>
                    <img loading="lazy" src="https://via.placeholder.com/80" alt="Banner" class="ml-auto">
                </div>
            </div>

            <!-- Fitur -->
            <p class="font-weight-bold mb-2">PTPN Group</p>
            <div class="text-center mb-2 slick-slider">
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/1.jpg') }}" alt="PTPN III">
                    </div>
                    <div class="label-slider">
                        <p>PTPN III</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="PTPN I">
                    </div>
                    <div class="label-slider">
                        <p>PTPN I</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="PTPN IV">
                    </div>
                    <div class="label-slider">
                        <p>PTPN IV</p>
                    </div>
                </div>
                <div>
                    <div class="icon-circle mb-2">
                        <img loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50%;"
                            src="{{ asset('images/samples/300x300/2.jpg') }}" alt="PT SGN">
                    </div>
                    <div class="label-slider">
                        <p>SGN</p>
                    </div>
                </div>
            </div>

            <!-- Mitra -->
            <div class="text-center mb-3">
                <a class="text-success-pumk" id="toggleMore">Lihat Semua <i class="ti-angle-down"></i></a>
                <div style="height: 1px; background-color: #ccc; width: 100%; margin: 1rem 0;"></div>
            </div>

            <div class="row text-center my-2 fitur-item">
                <div class="col-6 col-md-3 mb-3">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/1.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Artikel</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 fitur-item">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/2.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Daftar Unit Kerja PTPN</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 fitur-item">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/3.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Pengajuan Pinjaman</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 fitur-item">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/4.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Pinjaman Saya</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 d-none fitur-item">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/5.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Pinjaman Saya</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 d-none fitur-item">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/6.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Pinjaman Saya</p>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 d-none fitur-item">
                    <div class="card card-partner p-2 h-100">
                        <img loading="lazy" src="{{asset('images/samples/300x300/7.jpg')}}" alt="Logo" class="img-fluid">
                        <p class="mt-2 mb-0">Pinjaman Saya</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bottom-nav">
            <a href="#"><i class="ti-home home-navigate-active-pumk"></i>Beranda</a>
            <a href="#"><i class="ti-layout-grid3"></i>Fitur</a>
            <a href="#"><i class="ti-headphone-alt"></i>CS</a>
            <a href="#"><i class="ti-user"></i>Profil</a>
        </div>

        <script>
            document.getElementById('toggleMore').addEventListener('click', function (e) {
                    e.preventDefault();
                    const fiturItems = document.querySelectorAll('.fitur-item');
                    const toggleBtn = document.getElementById('toggleMore');
                    let showingMore = false;
            
                    fiturItems.forEach((item, index) => {
                        if (index > 3) {
                            item.classList.toggle('d-none');
                            if (!item.classList.contains('d-none')) {
                                showingMore = true;
                            }
                        }
                    });
            
                    toggleBtn.innerHTML = showingMore
                    ? `<b>Tampilkan lebih sedikit <i class="ti-angle-up"></i></b>`
                    : `<b>Lihat Semua <i class="ti-angle-down"></i></b>`;   
                });
            
                // Inisialisasi: pastikan hanya 4 pertama yang tampil
                document.querySelectorAll('.fitur-item').forEach((item, index) => {
                    if (index > 3) item.classList.add('d-none');
                });
        </script>

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