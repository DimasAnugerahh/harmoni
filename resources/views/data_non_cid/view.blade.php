<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CID-RKA | Harmoni</title>
    </head>

    <body>
        <div class="container-scroller">
            {{-- navbar --}}
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="../../images/logo.svg"
                            class="mr-2" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                            src="../../images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                    <span class="input-group-text" id="search">
                                        <i class="icon-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="navbar-search-input"
                                    placeholder="Search now" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="icon-bell mx-0"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="ti-info-alt mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="ti-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="ti-user mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="../../images/faces/face28.jpg" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-flex">
                            <a class="nav-link" href="#">
                                <i class="icon-ellipsis"></i>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            {{-- setting panel --}}
            <div class="container-fluid page-body-wrapper">
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
                                        <h4 class="card-title">Data Rencana Kerja dan Anggaran Program NON-CID</h4>
                                        <p class="card-description">
                                            Data Rencana Kerja dan Anggaran Program NON-CID
                                        <div>
                                            <a href="{{ route('view_create_non-cid_rka') }}"
                                                class="btn btn-sm btn-primary btn-sm"><i class="mdi mdi-plus"></i>
                                                Tambah
                                                Data</a>
                                        </div>
                                        </p>
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
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-info btn-icon-text">
                                                                <i class="ti-eye btn-icon-prepend"></i>
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-sm btn-outline-danger btn-icon-text">
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
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </body>

</html>