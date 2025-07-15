<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard | Harmoni</title>

        {{-- chart.js --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f0f2f5;
                /* Light grey background */
                overflow-x: hidden;
                /* Prevent horizontal scroll */
            }

            iframe {
                width: 100%;
                height: 100%;
                border: none;
            }

            /* Content Area Styling - now takes full width and has adjusted padding */
            .content {
                flex-grow: 1;
                padding: 30px;
                /* Increased padding for overall content */
                display: flex;
                flex-direction: column;
                /* width: 100%; */
                /* Ensure content takes full width */
            }

            /* Dashboard Cards */
            .card-custom {
                background: #fff;
                border-radius: 15px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                padding: 20px;
                margin-bottom: 15px;
                transition: all 0.3s ease;
            }

            .card-custom:hover {
                transform: translateY(-3px);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            }

            .welcome-banner {
                background: linear-gradient(to right, #4CAF50, #8BC34A);
                /* Green gradient */
                color: #fff;
                padding: 30px;
                border-radius: 15px;
                margin-bottom: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                overflow: hidden;
                position: relative;
            }

            .welcome-banner h3 {
                font-weight: 600;
                margin-bottom: 5px;
            }

            .welcome-banner p {
                font-size: 14px;
                opacity: 0.9;
            }

            .welcome-banner .banner-image {
                position: absolute;
                right: 0;
                bottom: 0;
                height: 100%;
                /* Adjust as needed */
                opacity: 0.8;
            }

            .data-cards .col-md-3 {
                padding: 0 7.5px;
                /* Adjust padding for spacing */
            }

            .data-card {
                text-align: center;
                padding: 20px 10px;
            }

            .data-card h4 {
                font-size: 2.5rem;
                font-weight: 700;
                color: #333;
                margin-bottom: 5px;
            }

            .data-card p {
                font-size: 0.85rem;
                color: #777;
                margin-bottom: 0;
            }

            .data-card .progress-indicator {
                height: 5px;
                background-color: #e0e0e0;
                border-radius: 5px;
                margin-top: 10px;
                overflow: hidden;
            }

            .data-card .progress-indicator div {
                height: 100%;
                background: linear-gradient(to right, #4CAF50, #8BC34A);
                border-radius: 5px;
            }

            /* Charts Section */
            .chart-container {
                height: 250px;
                /* Fixed height for charts */
                display: flex;
                justify-content: center;
                align-items: center;
                color: #ccc;
                /* Placeholder text color */
                font-size: 1.2rem;
                background-color: #f8f9fa;
                border-radius: 10px;
                margin-top: 15px;
            }

            /* Feature Section */
            .feature-item {
                text-align: center;
                padding: 15px;
            }

            .feature-item .icon-circle {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                background-color: #e8f5e9;
                /* Light green */
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 10px;
            }

            .feature-item .icon-circle .ti {
                font-size: 24px;
                color: #4CAF50;
            }

            .feature-item p {
                font-size: 14px;
                color: #555;
                font-weight: 500;
            }

            /* Program List */
            .program-list ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .program-list li {
                display: flex;
                align-items: center;
                padding: 10px 0;
                border-bottom: 1px solid #eee;
            }

            .program-list li:last-child {
                border-bottom: none;
            }

            .program-list li .program-icon {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: #e0e0e0;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
                font-size: 14px;
                font-weight: 600;
                color: #666;
            }

            .program-list li .program-details {
                flex-grow: 1;
            }

            .program-list li .program-details h6 {
                margin-bottom: 2px;
                font-size: 15px;
                font-weight: 500;
                color: #333;
            }

            .program-list li .program-details p {
                font-size: 12px;
                color: #888;
                margin-bottom: 0;
            }

            /* Map Placeholder */
            .map-placeholder {
                background-color: #e0e0e0;
                /* Light grey for map */
                height: 400px;
                border-radius: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.2rem;
                color: #666;
                margin-top: 15px;
                overflow: hidden;
                position: relative;
            }

            .map-placeholder img {
                /* width: 100%; */
                height: 100%;
                object-fit: cover;
            }

            /* Event Section */
            .event-card {
                background: linear-gradient(to right, #4CAF50, #8BC34A);
                /* Green gradient */
                color: #fff;
                padding: 20px;
                border-radius: 15px;
                text-align: center;
                margin-bottom: 15px;
                box-shadow: 0 4px 10px rgba(76, 175, 80, 0.3);
            }

            .event-card h5 {
                font-weight: 600;
                margin-bottom: 5px;
            }

            .event-card p {
                font-size: 14px;
                opacity: 0.9;
                margin-bottom: 0;
            }

            /* General Utility Classes */
            .section-title {
                font-size: 18px;
                font-weight: 600;
                color: #333;
                margin-bottom: 15px;
            }

            .text-muted-small {
                font-size: 0.75rem;
                color: #999;
            }

            #chartCanvasBar {
                height: 100%;
                /* width: 100%; */
            }

            #donutChartCanvas {
                height: 100%;
                /* width: 100%; */
            }

            /* Responsive adjustments */
            @media (max-width: 767.98px) {
                .content {
                    padding: 15px;
                    /* Reduce padding on smaller screens */
                }

                .welcome-banner {
                    padding: 20px;
                }

                .welcome-banner .banner-image {
                    height: 80%;
                }

                .data-cards .col-md-3 {
                    padding: 0 5px;
                    margin-bottom: 10px;
                }

                .card-custom {
                    margin-bottom: 10px;
                }
            }
        </style>


    </head>

    <body>
        <div class="container-scroller">
            @include('navbar')
            <div class="container-fluid page-body-wrapper">
                @include('sidebar')
                <!-- Page Content -->
                <div class="main-panel">
                    <div class="content">
                        <!-- Welcome Banner -->
                        <div class="welcome-banner">
                            <div>
                                <h3>Selamat datang di aplikasi</h3>
                                <h2>HARMONI</h2>
                            </div>
                            <!-- Placeholder for the banner image -->
                            <img src="https://placehold.co/200x100/4CAF50/FFFFFF?text=Banner+Image" alt="Banner Image"
                                class="banner-image d-none d-md-block">
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="startDate">Dari Tanggal</label>
                                <input type="date" class="form-control" id="startDate" name="start_date">
                            </div>
                            <div class="col-md-6">
                                <label for="endDate">Sampai Tanggal</label>
                                <input type="date" class="form-control" id="endDate" name="end_date">
                            </div>
                        </div>
                        <!-- Data Cards Section -->
                        <div class="row data-cards mb-4">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card-custom data-card">
                                    <p class="text-muted-small">Program Terealisasi</p>
                                    <h4>36</h4>
                                    <p><i>Program</i></p>
                                    <div class="progress-indicator">
                                        <div style="width: 40%;"></div>
                                    </div>
                                    <p class="text-muted-small mt-2">40% terhadap RKA</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card-custom data-card">
                                    <p class="text-muted-small">Realisasi CID</p>
                                    <h4>65</h4>
                                    <p><i>Milyar</i></p>
                                    <div class="progress-indicator">
                                        <div style="width: 55%;"></div>
                                    </div>
                                    <p class="text-muted-small mt-2">55% terhadap RKA</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card-custom data-card">
                                    <p class="text-muted-small">Realisasi non CID</p>
                                    <h4>23</h4>
                                    <p><i>Milyar</i></p>
                                    <div class="progress-indicator">
                                        <div style="width: 80%;"></div>
                                    </div>
                                    <p class="text-muted-small mt-2">80% terhadap RKA</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card-custom data-card">
                                    <p class="text-muted-small">Total Penyaluran PUMK</p>
                                    <h4>78</h4>
                                    <p><i>Milyar</i></p>
                                    <div class="progress-indicator">
                                        <div style="width: 75%;"></div>
                                    </div>
                                    <p class="text-muted-small mt-2">75% terhadap RKA</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Data Charts -->
                                <div class="card-custom">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="section-title mb-0">Data TJSL</h5>
                                        <span class="text-muted-small">SD XXXX</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="chart-container">
                                                <!-- Placeholder for Bar Chart -->
                                                {{-- <img src="https://placehold.co/300x250/f8f9fa/cccccc?text=Bar+Chart"
                                                alt="Bar Chart" class="img-fluid"> --}}
                                                <canvas id="barChartCanvas"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="chart-container">
                                                <!-- Placeholder for Donut Chart -->
                                                {{-- <img src="https://placehold.co/250x250/f8f9fa/cccccc?text=Donut+Chart"
                                                alt="Donut Chart" class="img-fluid"> --}}
                                                <canvas id="donutChartCanvas"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Map Section -->
                                <div class="card-custom mt-4">
                                    <h5 class="section-title">Map Sosial Mapping</h5>
                                    <div class="map-placeholder">
                                        <!-- Placeholder for Map -->
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1219.011760876501!2d119.43412881905908!3d-5.135845009056531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd4ed0033803%3A0x1392ea295a39d087!2sPT%20Perkebunan%20Nusantara%20XIV!5e1!3m2!1sid!2sid!4v1752484756809!5m2!1sid!2sid"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <!-- Feature Section -->
                                <div class="card-custom mb-4">
                                    <h5 class="section-title">Fitur</h5>
                                    <div class="row text-center">
                                        <div class="col-4 feature-item">
                                            <div class="icon-circle"><i class="ti ti-receipt"></i></div>
                                            <p>Laporan</p>
                                        </div>
                                        <div class="col-4 feature-item">
                                            <div class="icon-circle"><i class="ti ti-agenda"></i></div>
                                            <p>Agenda</p>
                                        </div>
                                        <div class="col-4 feature-item">
                                            <div class="icon-circle"><i class="ti ti-image"></i></div>
                                            <p>Galeri</p>
                                        </div>
                                        <div class="col-4 feature-item">
                                            <div class="icon-circle"><i class="ti ti-bell"></i></div>
                                            <p>Notifikasi</p>
                                        </div>
                                        <div class="col-4 feature-item">
                                            <div class="icon-circle"><i class="ti ti-settings"></i></div>
                                            <p>Pengaturan</p>
                                        </div>
                                        <div class="col-4 feature-item">
                                            <div class="icon-circle"><i class="ti ti-search"></i></div>
                                            <p>Pencarian</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Program List Section -->
                                <div class="card-custom mb-4 program-list">
                                    <h5 class="section-title">Program</h5>
                                    <p class="text-muted-small">LIST PROGRAM</p>
                                    <ul>
                                        <li>
                                            <div class="program-icon">1</div>
                                            <div class="program-details">
                                                <h6>Program 1</h6>
                                                <p>Deskripsi singkat program 1</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="program-icon">2</div>
                                            <div class="program-details">
                                                <h6>Program 2</h6>
                                                <p>Deskripsi singkat program 2</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="program-icon">3</div>
                                            <div class="program-details">
                                                <h6>Program 3</h6>
                                                <p>Deskripsi singkat program 3</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="program-icon">4</div>
                                            <div class="program-details">
                                                <h6>Program 4</h6>
                                                <p>Deskripsi singkat program 4</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Event Section -->
                                <div class="card-custom event-card">
                                    <h5 class="section-title text-white">Event</h5>
                                    <p>Upcoming Event: Harmoni Fest 2025</p>
                                    <p class="text-muted-small text-white-50">Tanggal: 20 Juli 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap JS, Popper.js, and jQuery -->
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                    xintegrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                    xintegrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
                    xintegrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8eOxu9+oY"
                    crossorigin="anonymous">
                </script>
                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

                <script>
                    // No specific JS needed for sidebar/navbar toggles anymore
                        var ctxBar = document.getElementById('barChartCanvas').getContext('2d');
                        var barChart = new Chart(ctxBar, {
                            type: 'bar',
                            data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                                datasets: [{
                                    label: 'Data',
                                    data: [12, 19, 3, 5, 2, 3],
                                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
            
                        var ctxDonut = document.getElementById('donutChartCanvas').getContext('2d');
                        var donutChart = new Chart(ctxDonut, {
                            type: 'doughnut',
                            data: {
                                labels: ['Red', 'Blue', 'Yellow'],
                                datasets: [{
                                    data: [300, 50, 100],
                                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                                    hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });

                        //var map = L.map('map').setView([-6.200000, 106.816666], 10);
                        var map = L.map('map').setView([-2.5489, 118.0149], 5);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap contributors'
                        }).addTo(map);
                        
                        // Example marker
                        L.marker([-5.135845, 119.4341288]).addTo(map)
                        .bindPopup('Makassar')
                        .openPopup();
                        
                </script>

            </div>
        </div>
    </body>

</html>