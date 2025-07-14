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
                        <a class="nav-link" href="index.html">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">DATA CID</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_cid_rka')}}">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#non-cid" aria-expanded="false" aria-controls="non-cid">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">NON CID</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="non-cid">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('view_non_cid_rka')}}">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#PMUK" aria-expanded="false" aria-controls="PMUK">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">PUMK</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="PMUK">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#social-mapping" aria-expanded="false"
                            aria-controls="social-mapping">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Social Mapping</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="social-mapping">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Setting</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="setting">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <br>
                    <br>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#my-account" aria-expanded="false"
                            aria-controls="my-account">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">My Account</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="my-account">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">RKA</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Input
                                        Realisasi</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="../../pages/ui-features/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Sign Out</span>
                        </a>
                    </li>
                    <br>
                    <br>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Help</span>
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