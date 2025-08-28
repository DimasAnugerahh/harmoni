<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulir Pengajuan Pinjaman</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- font style --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Material Design -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">
        <style>
            .bottom-nav {
                position: fixed;
                bottom: 0;
                width: 100%;
                background: white;
                border-top: 1px solid #ddd;
                display: flex;
                align-items: center;
                justify-content: space-around;
                padding: 5px 0;
            }

            .bottom-nav a {
                text-align: center;
                font-size: 12px;
                color: #757575;
            }

            .bottom-nav a i {
                display: block;
                font-size: 20px;
            }

            body {
                background: #f8f9fa;
            }

            .form-card {
                background: #fff;
                border-radius: 12px;
                padding: 25px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
                margin-bottom: 20px;
            }

            .top-bar {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .back-btn {
                display: flex;
                align-items: center;
                font-size: 18px;
                color: #333;
                text-decoration: none;
                margin-right: 10px;
            }
            .container {
                margin-bottom: 60px; /* Memberikan ruang di bawah konten untuk navigasi bawah */
            }
        </style>
    </head>

    <body>

        <!-- Top Bar -->
        <div class="top-bar py-4">
            <a href="javascript:history.back()" class="back-btn">
                <i class="ti-arrow-left"></i>
            </a>
            <h4 class="mb-0 fw-semibold">Formulir Pengajuan Pinjaman</h4>
        </div>

        <div class="container">
            <div class="form-card">

                <form>
                    <!-- Nama -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" placeholder="Nama Depan">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" placeholder="Nama Belakang">
                        </div>
                    </div>

                    <!-- Email & Telepon -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="contoh@email.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" placeholder="0812-3456-7890">
                        </div>
                    </div>

                    <!-- Tanggal Lahir & Status -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status Pernikahan</label>
                            <input type="text" class="form-control" placeholder="Lajang / Menikah">
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control mb-2" placeholder="Alamat Jalan">
                        <input type="text" class="form-control mb-2" placeholder="Baris Alamat Jalan 2">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kota">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Provinsi">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Kode Pos">
                            </div>
                        </div>
                    </div>

                    <!-- Tujuan & Jumlah -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Tujuan Pinjaman</label>
                            <input type="text" class="form-control" placeholder="misalnya, Renovasi">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jumlah Pinjaman</label>
                            <input type="number" class="form-control" placeholder="misalnya, 5000000">
                        </div>
                    </div>

                    <!-- Pendapatan -->
                    <div class="mb-3">
                        <label class="form-label">Pendapatan Tahunan</label>
                        <input type="number" class="form-control" placeholder="misalnya, 100000000">
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn" style="background-color: #0096b1">Ajukan Pinjaman</button>
                    </div>
                </form>

            </div>
        </div>

        @include('mobile_pumk.bottom_navigation')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>