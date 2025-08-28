<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Harmoni - Mobile PUMK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                font-family: 'Ubuntu', sans-serif;
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
            }

            .back-btn i {
                font-size: 20px;
                margin-right: 6px;
            }

            .article-card {
                background: white;
                border-radius: 10px;
                padding: 16px;
                margin-bottom: 15px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                transition: all 0.2s ease-in-out;
                min-height: 120px;
                /* lebih tinggi untuk judul & isi */
            }

            .article-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            }

            .article-title {
                font-weight: 600;
                font-size: 16px;
                margin-bottom: 6px;
                color: #333;
            }

            .article-excerpt {
                font-size: 14px;
                color: #666;
                line-height: 1.4;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                /* tampilkan max 3 baris isi */
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .article-footer {
                font-size: 12px;
                color: #999;
                margin-top: 10px;
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

            .bottom-nav a {
                text-align: center;
                font-size: 12px;
                color: #757575;
            }

            .bottom-nav a i {
                display: block;
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container py-4">
            <!-- Top Bar with Back Button -->
            <div class="top-bar d-flex align-items-center justify-content-between">
                <!-- Left: Back Button -->
                <div class="flex-grow-1 d-flex justify-content-start">
                    <a href="javascript:history.back()" class="back-btn">
                        <i class="ti-arrow-left"></i>
                    </a>
                </div>

                <!-- Center: Title -->
                <div class="flex-grow-1 d-flex justify-content-center">
                    <h4 class="mb-0 fw-semibold">Daftar Artikel</h4>
                </div>

                <!-- Right: Empty (for spacing balance) -->
                <div class="flex-grow-1"></div>
            </div>

            @php
            $articles = [
            [
            'title' => 'Pentingnya UMKM dalam Ekonomi Nasional',
            'excerpt' => 'UMKM memiliki peranan besar dalam mendukung pertumbuhan ekonomi nasional. Artikel ini membahas
            bagaimana kontribusi UMKM...',
            'date' => '28 Agustus 2025'
            ],
            [
            'title' => 'Digitalisasi UMKM di Era Industri 4.0',
            'excerpt' => 'Transformasi digital menjadi kunci utama dalam meningkatkan daya saing UMKM. Simak bagaimana
            teknologi membantu UMKM...',
            'date' => '20 Agustus 2025'
            ],
            [
            'title' => 'Strategi PUMK untuk Menghadapi Tantangan Global',
            'excerpt' => 'Dalam menghadapi persaingan global, PUMK perlu memiliki strategi yang tepat agar tetap
            bertahan dan berkembang...',
            'date' => '15 Agustus 2025'
            ],
            ];
            @endphp

            @foreach ($articles as $article)
            <div class="article-card">
                <div class="article-title">{{ $article['title'] }}</div>
                <div class="article-excerpt">{{ $article['excerpt'] }}</div>
                <div class="article-footer">📅 {{ $article['date'] }}</div>
            </div>
            @endforeach
        </div>

        <!-- Bottom Navigation -->
        @include('mobile_sm.bottom_navigation')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>