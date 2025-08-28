<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Unit Kerja PTPN</title>
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
            body {
                background: #f8f9fa;
            }

            .top-bar {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
            }

            .back-btn {
                display: flex;
                align-items: center;
                font-size: 18px;
                color: #333;
                text-decoration: none;
                margin-right: 10px;
                padding-left: 30%;
            }

            .back-btn i {
                font-size: 20px;
                margin-left: 6px;
            }

            .unit-card {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 12px 16px;
                border: 1px solid #eee;
                border-radius: 10px;
                background: #fff;
                margin-bottom: 10px;
                transition: 0.2s;
            }

            .unit-card:hover {
                background: #f1f1f1;
            }

            .unit-icon {
                font-size: 22px;
                margin-right: 12px;
                color: #febc58;
            }

            .search-bar {
                margin: 15px 0;
            }
        </style>
    </head>

    <body>
        <!-- Top Bar with Back Button -->
        <div class="top-bar d-flex align-items-center justify-content-between py-4">
            <!-- Left: Back Button -->
            <div class="flex-grow-1 d-flex justify-content-start">
                <a href="javascript:history.back()" class="back-btn">
                    <i class="ti-arrow-left"></i>
                </a>
            </div>

            <!-- Center: Title -->
            <div class="flex-grow-1 d-flex justify-content-center">
                <h4 class="mb-0 fw-semibold">Daftar Unit Kerja</h4>
            </div>

            <!-- Right: Empty (for spacing balance) -->
            <div class="flex-grow-1"></div>
        </div>

        <div class="container mt-3">

            <!-- Search -->
            <div class="search-bar">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari Unit Kerja...">
            </div>

            <!-- List Unit -->
            <div id="unitList">
                <div class="unit-card">
                    <div class="d-flex align-items-center">
                        <span class="unit-icon">🏭</span>
                        <span>Kebun Awaya (Regional 8)</span>
                    </div>
                    <span>&#8250;</span>
                </div>

                <div class="unit-card">
                    <div class="d-flex align-items-center">
                        <span class="unit-icon">🏭</span>
                        <span>Kebun Mira (Regional 8)</span>
                    </div>
                    <span>&#8250;</span>
                </div>

                <div class="unit-card">
                    <div class="d-flex align-items-center">
                        <span class="unit-icon">🏭</span>
                        <span>Kebun Awaya (Regional 8)</span>
                    </div>
                    <span>&#8250;</span>
                </div>

                <div class="unit-card">
                    <div class="d-flex align-items-center">
                        <span class="unit-icon">🏭</span>
                        <span>Kebun Beteleme (Regional 8)</span>
                    </div>
                    <span>&#8250;</span>
                </div>

                <div class="unit-card">
                    <div class="d-flex align-items-center">
                        <span class="unit-icon">🏭</span>
                        <span>Ternak Kabaru (Regional 8)</span>
                    </div>
                    <span>&#8250;</span>
                </div>
            </div>

        </div>

        <script>
            // Filter pencarian
    document.getElementById("searchInput").addEventListener("keyup", function() {
      let filter = this.value.toLowerCase();
      let units = document.querySelectorAll("#unitList .unit-card");

      units.forEach(function(unit) {
        let text = unit.innerText.toLowerCase();
        unit.style.display = text.includes(filter) ? "" : "none";
      });
    });
        </script>

    </body>

</html>