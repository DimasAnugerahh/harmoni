<!DOCTYPE html>
<html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target Survey</title>

    <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Material Design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/themify-icons@0.1.2/css/themify-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
      .bottom-nav a {
        text-align: center;
        font-size: 12px;
        color: #757575;
      }

      .bottom-nav a i {
        display: block;
        font-size: 20px;
      }

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

      .top-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3%;
      }

      .back-btn {
        display: flex;
        align-items: center;
        font-size: 18px;
        color: #333;
        text-decoration: none;
        margin-right: 10px;
        margin-left: 5%;
      }

      .back-btn i {
        font-size: 20px;
        margin-right: 6px;
      }

      .container {
        font-family: Arial, sans-serif;
        /* background: #f5f5f5; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-top: 2%; */
        height: 80vh;
      }

      .card {
        background: #fff;
        border-radius: 16px;
        padding: 20px;
        width: 320px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .card h3 {
        margin-bottom: 16px;
        font-weight: bold;
      }

      .target-box {
        background: linear-gradient(135deg, #febc58, #f7a42a);
        border-radius: 12px;
        color: #fff;
        padding: 16px;
        margin-bottom: 20px;
      }

      .target-box h1 {
        font-size: 48px;
        margin: 0;
      }

      .charts {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
      }

      .chart-container {
        width: 100px;
        text-align: center;
      }

      .chart-container canvas {
        width: 100px !important;
        height: 100px !important;
      }

      .btn {
        background: linear-gradient(135deg, #febc58, #f7a42a);
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
      }

      .btn:hover {
        opacity: 0.85;
      }
    </style>
  </head>

  <body>

    <div class="top-bar d-flex align-items-center justify-content-between">
      <!-- Left: Back Button -->
      <div class="flex-grow-1 d-flex justify-content-start">
        <a href="javascript:history.back()" class="back-btn">
          <i class="ti-arrow-left"></i>
        </a>
      </div>

      <!-- Center: Title -->
      <div class="flex-grow-1 d-flex justify-content-center">
        <h4 class="mb-0 fw-semibold">Target Survey</h4>
      </div>

      <!-- Right: Empty (for spacing balance) -->
      <div class="flex-grow-1"></div>
    </div>
    <div class="container">

      <div class="card">
        <h3>Target Survey</h3>

        <div class="target-box">
          <div>Target Survey Tahun 2025</div>
          <h1>100</h1>
          <div>Data</div>
        </div>

        <div class="charts">
          <div class="chart-container">
            <canvas id="chartGov"></canvas>
            <div>Pemerintah</div>
          </div>
          <div class="chart-container">
            <canvas id="chartNonGov"></canvas>
            <div>Non Pemerintah</div>
          </div>
        </div>

        <button class="btn">Lihat Detail</button>
      </div>

      <!-- Bottom Navigation -->
    </div>
    @include('mobile_sm.bottom_navigation')
    <script>
      // Pemerintah Chart (65%)
    new Chart(document.getElementById("chartGov"), {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [65, 35],
          backgroundColor: ['#febc58', '#eee']
        }]
      },
      options: {
        cutout: '70%',
        plugins: {
          legend: { display: false },
          tooltip: { enabled: false }
        }
      },
      plugins: [{
        id: 'text-center',
        beforeDraw: chart => {
          const {ctx, width, height} = chart;
          ctx.restore();
          ctx.font = "bold 16px Arial";
          ctx.fillStyle = "#333";
          ctx.textAlign = "center";
          ctx.textBaseline = "middle";
          ctx.fillText("65%", width / 2, height / 2);
          ctx.save();
        }
      }]
    });

    // Non Pemerintah Chart (35%)
    new Chart(document.getElementById("chartNonGov"), {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [35, 65],
          backgroundColor: ['#febc58', '#eee']
        }]
      },
      options: {
        cutout: '70%',
        plugins: {
          legend: { display: false },
          tooltip: { enabled: false }
        }
      },
      plugins: [{
        id: 'text-center',
        beforeDraw: chart => {
          const {ctx, width, height} = chart;
          ctx.restore();
          ctx.font = "bold 16px Arial";
          ctx.fillStyle = "#333";
          ctx.textAlign = "center";
          ctx.textBaseline = "middle";
          ctx.fillText("35%", width / 2, height / 2);
          ctx.save();
        }
      }]
    });
    </script>

  </body>

</html>