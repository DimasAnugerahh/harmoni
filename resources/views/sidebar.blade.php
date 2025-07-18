<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdi/5.4.55/css/materialdesignicons.min.css">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
        <!-- inject:css -->
        {{-- <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}"> --}}
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
    </head>

    <body>
        <div class="container-scroller">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('view_dashboard')}}">
                            <i class="ti-layout-grid2 sidebar-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="ti-file sidebar-icon"></i>
                            <span class="menu-title">DATA CID</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_cid_rka')}}">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_cid_real')}}">Realisasi</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_cid_report')}}">Laporan</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#non-cid" aria-expanded="false"
                            aria-controls="non-cid">
                            <i class="ti-user sidebar-icon"></i>
                            <span class="menu-title">NON CID</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="non-cid">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_non_cid_rka')}}">RKA</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Laporan</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#PMUK" aria-expanded="false"
                            aria-controls="PMUK">
                            <i class="ti-comments sidebar-icon"></i>
                            <span class="menu-title">PUMK</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="PMUK">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/buttons.html">Mitra Binaan</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/dropdowns.html">Monitor Pengajuan </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_akun_pumk')}}">Akun</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_kas_tunai_dan_bank_view')}}">Kas Tunai dan Bank</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_jurnal_umum_view')}}">Jurnal Umum</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_laporan_buku_besar_view')}}">Laporan Buku Besar</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_laporan_neraca_saldo_view')}}">Laporan Neraca Saldo</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('view_laporan_keuangan_view')}}">Laporan Keuangan PUMK</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#social-mapping" aria-expanded="false"
                            aria-controls="social-mapping">
                            <i class="ti-wallet sidebar-icon"></i>
                            <span class="menu-title">Social Mapping</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="social-mapping">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_wilayah_social_mapping')}}">Wilayah</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_dwilayah_social_mapping')}}">Profil Wilayah</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_survey_social_mapping')}}">Data Survey</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Laporan</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/buttons.html">Wilayah</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/dropdowns.html">Profil Wilayah</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Data Survey</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Laporan</a></li>
                            </ul>
                        </div>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false"
                            aria-controls="setting">
                            <i class="ti-settings sidebar-icon"></i>
                            <span class="menu-title">Setting</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="setting">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/buttons.html">Wilayah</a></li>
                            </ul>
                        </div>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="ti-help-alt sidebar-icon"></i>
                            <span class="menu-title">Help</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Dokumentasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('view_login') }}">
                            <i class="ti-shift-right sidebar-icon"></i>
                            <span class="menu-title">Sign Out</span>
                        </a>
                    </li>

            </nav>
            {{-- <div class="content-wrapper">
                @yield('content')
            </div> --}}
        </div>
        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('js/off-canvas.js') }}"></script>
        <script src="{{ asset('js/settings.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
        <script src="{{ asset('js/todolist.js') }}"></script>
    </body>

</html>