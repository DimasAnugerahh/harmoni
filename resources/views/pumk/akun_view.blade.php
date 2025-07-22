<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap4.css">

        <style>
            div.dataTables_wrapper div.dataTables_filter {
                float: left;
                text-align: left;
            }

            div.dataTables_wrapper div.dataTables_paginate {
                float: right;
            }

            #dt-search-0{
                height: 30px;
            }
        </style>
    </head>

    <body>
        <div class="container-scroller">
            @include('navbar')
            <div class="container-fluid page-body-wrapper">
                @include('setting_panel')
                @include('sidebar')


                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Daftar Akun</h4>
                                        <div>
                                            <a href="{{ route('create_non_cid_rka') }}"
                                                class="btn btn-sm btn-primary btn-sm"><i class="mdi mdi-plus"></i>
                                                Buka Saldo</a>
                                            <a href="{{ route('create_non_cid_rka') }}"
                                                class="btn btn-sm btn-primary btn-sm"><i class="mdi mdi-plus"></i>
                                                Buat AKun</a>
                                        </div>
                                        </p>
                                        <div class="table-responsive">
                                            <table id="MyTable" class="table table-striped">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>
                                                            No
                                                        </th>
                                                        <th>
                                                            Nama Akun
                                                        </th>
                                                        <th>
                                                            Head
                                                        </th>
                                                        <th>
                                                            Grup Akun
                                                        </th>
                                                        <th>
                                                            Aksi
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>2</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>3</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>4</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>5</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>6</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>7</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <p>8</p>
                                                        </td>
                                                        <td>
                                                            <p>[101010001] Bank BCA</p>
                                                        </td>
                                                        <td>
                                                            <p>Assets</p>
                                                        </td>
                                                        <td>
                                                            <p>[101] Current Assets</p>
                                                        </td>

                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <!-- partial -->
                </div>
            </div>
        </div>

        <!-- DataTables CSS -->
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
         --}}

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

        <!-- Popper.js (for Bootstrap dropdowns, tooltips, etc.) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Bootstrap 4 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- DataTables core -->
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>

        <!-- DataTables Bootstrap 4 integration -->
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap4.js"></script>

        <!-- Initialize DataTable -->
        <script>
            $(document).ready(function() {
                    $('#MyTable').DataTable({
                        layout: {
                        topStart: 'search',
                        topEnd: 'pageLength',
                        bottomStart: 'info',
                        bottomEnd: 'paging'
                    },
                    columnDefs: [{
                        targets: any,
                        className: 'text-center',
                    }],
                });
            });
        </script>
    </body>

</html>