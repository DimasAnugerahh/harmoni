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
                                        <h4 class="card-title mt-3">Tambah Jurnal</h4>
                                        <form class="forms-sample" name="form_cid_rka" action="" method="POST">
                                            {{-- RINCIAN TRANSAKSI --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1"
                                                    class="col-form-label col-sm-3">Rincian Transaksi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Rincian Transaksi">
                                                </div>
                                            </div>

                                            {{-- Tanggal --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1"
                                                    class="col-form-label col-sm-3">Tanggal</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Timeline">
                                                </div>
                                            </div>

                                            {{-- Table input --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1"
                                                    class="col-form-label col-sm-3">Jurnal</label>
                                                <div class="col-sm-9">
                                                    <div class="table-responsive">
                                                        <table id="MyTable">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th class="text-center" style="width: 40%;">No</th>
                                                                    <th class="text-center" style="width: 30%;">Debit
                                                                    </th>
                                                                    <th class="text-center" style="width: 30%;">Kredit
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="jurnal_body">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <select id="tahun" name="akun[]"
                                                                            class="js-example-basic-single form-control">
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <input type="number" name="debit[]"
                                                                            class="form-control" placeholder="Debit">
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <input type="number" name="kredit[]"
                                                                            class="form-control" placeholder="Kredit">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <br>

                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            id="addRow">
                                                            ➕ Tambah Baris
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- hasil --}}
                                            <div class="form-group row">
                                                <label for="exampleInputUsername1"
                                                    class="col-form-label col-sm-3">Hasil</label>
                                                <div class="col-sm-9">
                                                    <div class="table-responsive">
                                                        <table id="MyTable">
                                                            <tbody id="jurnal_body">
                                                                <tr>
                                                                    {{-- <h4 style="width: 40%;">Hasil</h4> --}}
                                                                    <td style="width: 30%;" class="text-center">
                                                                        <input id="result_debit" type="number"
                                                                            class="form-control" placeholder="Debit">
                                                                    </td>
                                                                    <td style="width: 30%;" class="text-center">
                                                                        <input id="result_kredit" type="number"
                                                                            class="form-control" placeholder="Kredit">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2"><i class="ti-save-alt mr-2"></i>Simpan</button>
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

        {{-- <script src="{{asset('js/select2.js')}}"></script> --}}

        <script>
            document.addEventListener('input', function (event) {
             document.querySelectorAll('input[name="debit[]"], input[name="kredit[]"]').forEach(input => {
                input.addEventListener('change', function () {
                let resultDebit = 0;
                let resultKredit = 0;

                const debitInputs = document.querySelectorAll('input[name="debit[]"]');
                const kreditInputs = document.querySelectorAll('input[name="kredit[]"]');

                debitInputs.forEach(input => {
                const val = input.value.trim();
                    if (val !== '' && !isNaN(val)) {
                    resultDebit += parseFloat(val);
                    }
                });
                
                kreditInputs.forEach(input => {
                const val = input.value.trim();
                    if (val !== '' && !isNaN(val)) {
                    resultKredit += parseFloat(val);
                 }
                });
                
                document.getElementById('result_debit').value = resultDebit.toFixed(2);
                document.getElementById('result_kredit').value = resultKredit.toFixed(2);
               });
            });
            });
            
        </script>

        <script>
            $(document).ready(function () {
                            $('#addRow').click(function () {
                                let newRow = `
                                    <tr>
                                        <td class="text-center">
                                            <select id="tahun" name="akun[]" class="js-example-basic-single form-control">
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                        </td>
                                        <td><input type="number" name="debit[]" class="form-control" placeholder="Debit"></td>
                                        <td><input type="number" name="kredit[]" class="form-control" placeholder="Kredit"></td>
                                    </tr>`;
                                $('#jurnal_body').append(newRow);
            
                                showResult();
                            });
                        });
        </script>
    </body>

</html>