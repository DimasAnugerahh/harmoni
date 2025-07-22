<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CID-Realisasi | Harmoni</title>
    </head>

    <body>
        <div class="container-scroller">
            {{-- navbar --}}
            @include('navbar')
            {{-- setting panel --}}
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_settings-panel.html -->
                
                @include('setting_panel')

                {{-- sidebar --}}
                @include('sidebar')

                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Realisasi Program TJSL NON CID</h4>
                                        <p class="card-description">
                                            Data Realisasi Program TJSL NON CID
                                            <div class="row">
                                            <div class="col-md-6 mb-4 stretch-card transparent">
                                            <div class="card card-tale">
                                                <div class="card-body">
                                                <p class="mb-4">Program Berjalan</p>
                                                <p class="fs-30 mb-2">85 Program</p>
                                                <p>85.00% (100 Program)</p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-4 stretch-card transparent">
                                            <div class="card card-dark-blue">
                                                <div class="card-body">
                                                <p class="mb-4">Realisasi Anggaran</p>
                                                <p class="fs-30 mb-2">Rp.650.000.000 </p>
                                                <p>65.00% ( RKA Rp.1.000.000.000)</p>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                            <div>
                                                <a href="{{ route('create_non_cid_real') }}" class="btn btn-primary btn-sm"><i class="mdi mdi-plus"></i> Tambah Data </a>
                                            </div>
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            User
                                                        </th>
                                                        <th>
                                                            First name
                                                        </th>
                                                        <th>
                                                            Progress
                                                        </th>
                                                        <th>
                                                            Amount
                                                        </th>
                                                        <th>
                                                            Deadline
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face1.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            Herman Beck
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 25%" aria-valuenow="25"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $ 77.99
                                                        </td>
                                                        <td>
                                                            May 15, 2015
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face2.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            Messsy Adam
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 75%" aria-valuenow="75"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $245.30
                                                        </td>
                                                        <td>
                                                            July 1, 2015
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face3.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            John Richards
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 90%" aria-valuenow="90"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $138.00
                                                        </td>
                                                        <td>
                                                            Apr 12, 2015
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face4.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            Peter Meggik
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 50%" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $ 77.99
                                                        </td>
                                                        <td>
                                                            May 15, 2015
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face5.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            Edward
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 35%" aria-valuenow="35"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $ 160.25
                                                        </td>
                                                        <td>
                                                            May 03, 2015
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face6.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            John Doe
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: 65%" aria-valuenow="65"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $ 123.21
                                                        </td>
                                                        <td>
                                                            April 05, 2015
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1">
                                                            <img src="../../images/faces/face7.jpg" alt="image" />
                                                        </td>
                                                        <td>
                                                            Henry Tom
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 20%" aria-valuenow="20"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $ 150.00
                                                        </td>
                                                        <td>
                                                            June 16, 2015
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
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </body>

</html>