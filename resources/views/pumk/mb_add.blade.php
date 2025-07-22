<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CID-RKA | Harmoni</title>

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
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('view_cid_rka')}}" class="btn btn-light"><i
                                                class="ti-angle-left mr-2"></i>Kembali</a>
                                        <button type="submit" class="btn btn-primary mr-2"><i
                                                class="ti-save-alt mr-2"></i>Submit</button>

                                        <h4 class="card-title mt-3">Tambah Data Mitra Binaan
                                        </h4>
                                        <p class="card-description">
                                            Tambah Data Mitra Binaan
                                        </p>
                                        <form class="forms-sample" name="form_cid_rka" action="" method="POST">
                                            {{-- tahun --}}
                                            <div class="form-group row">
                                                <label for="tahun" class="col-form-label col-sm-3">Tahun</label>
                                                <div class="col-sm-9">
                                                    <select id="tahun" class="js-example-basic-single w-100">
                                                        <option value="AL">2020</option>
                                                        <option value="WY">2021</option>
                                                        <option value="AM">2022</option>
                                                        <option value="CA">2023</option>
                                                        <option value="RU">2024</option>
                                                    </select>
                                                </div>
                                            </div>


                                            {{-- regional --}}
                                            <div class="form-group row">
                                                <label class="col-form-label col-sm-3">Regional</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100">
                                                        <option value="AL">regional 1</option>
                                                        <option value="WY">regional 2</option>
                                                        <option value="AM">regional 3</option>
                                                        <option value="CA">regional 4</option>
                                                        <option value="RU">regional 5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- pilar --}}
                                            <div class="form-group row">
                                                <label class="col-form-label col-sm-3">Pilar</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100">
                                                        <option value="AL">pilar 1</option>
                                                        <option value="WY">pilar 2</option>
                                                        <option value="AM">pilar 3</option>
                                                        <option value="CA">pilar 4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- TPB --}}
                                            <div class="form-group row">
                                                <label class="col-form-label col-sm-3">TPB</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100">
                                                        <option value="AL">TPB 1</option>
                                                        <option value="WY">TPB 2</option>
                                                        <option value="AM">TPB 3</option>
                                                        <option value="CA">TPB 4</option>
                                                        <option value="CA">TPB 5</option>
                                                        <option value="CA">TPB 6</option>
                                                        <option value="CA">TPB 7</option>
                                                        <option value="CA">TPB 8</option>
                                                        <option value="CA">TPB 9</option>
                                                        <option value="CA">TPB 10</option>
                                                        <option value="CA">TPB 11</option>
                                                        <option value="CA">TPB 12</option>
                                                        <option value="CA">TPB 13</option>
                                                        <option value="CA">TPB 14</option>
                                                        <option value="CA">TPB 15</option>
                                                        <option value="CA">TPB 16</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- Nama Program --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1" class="col-form-label col-sm-3">Nama
                                                    Program</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Username">
                                                </div>
                                            </div>

                                            {{-- Deskripsi --}}
                                            <div class="form-group row">
                                                <label for="exampleTextarea1"
                                                    class="col-form-label col-sm-3">Deskripsi Program</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="exampleTextarea1"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>

                                            {{-- Tujuan Program --}}
                                            <div class="form-group row">
                                                <label for="exampleTextarea1"
                                                    class="col-form-label col-sm-3">Tujuan Program</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" id="exampleTextarea1"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>

                                            {{-- skema --}}
                                            <div class="form-group row">
                                                <label class="col-form-label col-sm-3">Skema Program</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100">
                                                        <option value="AL">Hibah</option>
                                                        <option value="WY">Bantuan</option>
                                                        <option value="AM">Pelatihan</option>
                                                        <option value="CA">Pendampingan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- timeline --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1"
                                                    class="col-form-label col-sm-3">Timeline</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Timeline">
                                                </div>
                                            </div>

                                            {{-- estimasi --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1"
                                                    class="col-form-label col-sm-3">Estimasi</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp</span>
                                                        </div>
                                                        <input type="number" class="form-control" placeholder="Estimasi"
                                                            aria-label="Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">CSV</label>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                                                        Tidak
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                                        Ya
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>

        <script src="{{asset('vendors/select2/select2.min.js')}}"></script>

        <script src="{{asset('js/file-upload.js')}}"></script>

        <script src="{{asset('js/typeahead.js')}}"></script>

        <script src="{{asset('js/select2.js')}}"></script>
        <!-- End custom js for this page-->
    </body>

</html>