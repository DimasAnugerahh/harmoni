<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Skydash Admin</title>

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
                                        <h4 class="card-title">Profile Wilayah</h4>
                                        <p class="card-description">
                                        <a href="#" class="btn btn-primary btn-sm"><i class="mdi mdi-plus"></i> Tambah Data </a>
                                        </p>
                                        <div class="table-responsive">
                                            <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="text-center">
                                                    <tr>
                                                        <th>
                                                            No
                                                        </th>
                                                        <th>
                                                            Tahun
                                                        </th>
                                                        <th>
                                                            Regional
                                                        </th>
                                                        <th>
                                                            Nama Program
                                                        </th>
                                                        <th>
                                                            Progress
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td class="py-1">
                                                            {{-- <img src="../../images/faces/face1.jpg" alt="image" /> --}}
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>

                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 25%" aria-valuenow="25"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-danger">Pending</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
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
                                                            {{-- <img src="../../images/faces/face2.jpg" alt="image" /> --}}
                                                            <p>2</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 75%" aria-valuenow="75"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-danger">Pending</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
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
                                                            {{-- <img src="../../images/faces/face3.jpg" alt="image" /> --}}
                                                            <p>3</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 90%" aria-valuenow="90"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-danger">Pending</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
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
                                                            {{-- <img src="../../images/faces/face4.jpg" alt="image" /> --}}
                                                            <p>4</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 50%" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-danger">Pending</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
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
                                                            {{-- <img src="../../images/faces/face5.jpg" alt="image" /> --}}
                                                            <p>5</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 35%" aria-valuenow="35"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-danger">Pending</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
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
                                                            {{-- <img src="../../images/faces/face6.jpg" alt="image" /> --}}
                                                            <p>6</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: 65%" aria-valuenow="65"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-warning">Sedang Diproses</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
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
                                                            {{-- <img src="../../images/faces/face7.jpg" alt="image" /> --}}
                                                            <p>7</p>
                                                        </td>
                                                        <td>
                                                            <p>2020</p>
                                                        </td>
                                                        <td>
                                                            <p>Regional 1</p>
                                                        </td>
                                                        <td>
                                                            <p>Program 1</p>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 20%" aria-valuenow="20"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <label class="badge badge-success">Selesai</label>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-sm btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-outline-success btn-icon-text">
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
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </body>
</html>