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
                                        <h4 class="card-title">Striped Table</h4>
                                        <p class="card-description">
                                            Add class <code>.table-striped</code>
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
                                                        <th>
                                                            Aksi
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
                                                        <td>
                                                            <button type="button" class="btn btn-outline-danger btn-icon-text">
                                                                <i class="ti-trash btn-icon-prepend"></i>
                                                                Delete
                                                            </button>
                                                            <button type="button" class="btn btn-outline-success btn-icon-text">
                                                                <i class="ti-pencil-alt btn-icon-prepend"></i>
                                                                Edit
                                                            </button>
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