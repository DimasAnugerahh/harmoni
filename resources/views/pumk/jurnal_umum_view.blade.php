<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="{{asset('vendors/select2/select2.min.css')}}">


        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">

        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            @include('navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_settings-panel.html -->
                @include('setting_panel')
                <!-- partial -->
                <!-- partial:../../partials/_sidebar.html -->
                @include('sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mt-3">Tambah Jurnal</h4>
                                    </div>

                                    {{-- body card --}}
                                    <form action="">
                                        <div class="card-header">
                                            <button type="submit" class="btn btn-sm btn-primary mr-2"><i
                                                    class="ti-plus mr-2"></i>Tambah Jurnal</button>
                                            <button type="submit" class="btn btn-sm btn-primary mr-2"><i
                                                    class="ti-plus mr-2"></i>Tambah Penyesuaian</button>

                                            <button style="float: right" type="button" class="btn btn-sm btn-primary mr-2"><i
                                                    class="ti-plus mr-2"></i>Cetak</button>
                                            <br><br>
                                            <b class="my-5">Cari Periode Waktu</b>
                                        </div>
                                        <div class="card-body">
                                            <div class="row my-0">
                                                <div class="make-container-center">
                                                    <div class="row justify-content-center align-items-end no-print">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="">Dari Tanggal</label>
                                                                <input type="date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="">Sampai Tanggal</label>
                                                                <input type="date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 d-flex align-items-center">
                                                            <div class="form-group" style=>
                                                                <button class="btn btn-outline-success btn-fw" style="padding: 6px;">Tampilkan Jurnal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </body>

</html>