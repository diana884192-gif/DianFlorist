<!DOCTYPE html>
<html>
<head>
    <title>DianFlorist Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: 'Lora', serif;
            margin: 0;

            background-image: linear-gradient(
                rgba(255,240,245,0.72),
                rgba(225,240,245,0.72)
            ),
            url('/images/bunga-pink.jpeg');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .app-layout{
            display: flex;
        }

        .sidebar{
            width: 250px;
            min-height: 100vh;
            background: lavenderblush;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar a{
            display: block;
            padding: 12px;
            text-decoration: none;
            color: black;
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .sidebar a:hover{
            background: mistyrose;
            color: deeppink;
        }

        .content{
            flex: 1;
            padding: 25px;
        }

        .judul-pink{
            color: deeppink;
            font-weight: bold;
            text-align: center;
        }

        .subjudul{
            text-align: center;
            color: darkmagenta;
            margin-bottom: 25px;
        }

        .banner{
            background: linear-gradient(135deg, hotpink, deeppink);
            color: white;
            padding: 40px;
            border-radius: 25px;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(255,105,180,0.3);
        }

        .banner h2{
            font-weight: bold;
        }

        .banner p{
            margin-bottom: 0;
        }

        .stat-card{
            background: lavenderblush;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: 0.3s;
            height: 100%;
        }

        .stat-card:hover{
            transform: translateY(-8px);
        }

        .icon{
            font-size: 40px;
        }

        .stat-card h5{
            color: deeppink;
            font-weight: bold;
            margin-top: 10px;
        }

        .stat-card h2{
            color: hotpink;
            font-weight: bold;
            font-size: 40px;
        }

        .footer-text{
            text-align: center;
            margin-top: 30px;
            color: gray;
        }
        .benner-bunga{
            margin-bottom: 25px;
        }
        .benner-bunga img{
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 25px;
            box-shadow: 0 5px 20px rgba(225,105,180,0.3);
        }
    </style>
</head>

<body>

<div class="app-layout">

    <div class="sidebar">

        <h3 class="text-center mb-4" style="color: deeppink;">
            🌸 DianFlorist
        </h3>

        <a href="/">🏠 Dashboard</a>
        <a href="/produk">🌸 Produk</a>
        <a href="/pelanggan">👤 Pelanggan</a>
        <a href="/jenis_bunga">💐 Jenis Bunga</a>
        <a href="/pesanan">🛒 Pesanan</a>
        <a href="/pembayaran">💳 Pembayaran</a>

    </div>

    <div class="content">

        <h1 class="judul-pink">
            🌷 Selamat Datang di DianFlorist 🌷
        </h1>

        <p class="subjudul">
            Sistem Informasi Penjualan dan Pemesanan Bunga
        </p>

        <div class="benner-bunga">
            <img src="images/benner-bunga.jpeg"
                alt="Bunga DianFlorist">
        </div>

        <div class="banner">
            <h2>🌸 Toko Bunga DianFlorist 🌸</h2>
            <p>
                Menyediakan berbagai bunga cantik untuk hadiah,
                dekorasi, dan momen spesial Anda 💖
            </p>
        </div>

        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="icon">🌸</div>
                    <h5>Produk</h5>
                    <h2>{{ $totalProduk }}</h2>
                    <small>Total Produk Bunga</small>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="icon">👤</div>
                    <h5>Pelanggan</h5>
                    <h2>{{ $totalPelanggan }}</h2>
                    <small>Total Pelanggan</small>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="icon">🛒</div>
                    <h5>Pesanan</h5>
                    <h2>{{ $totalPesanan }}</h2>
                    <small>Total Pesanan</small>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="icon">💳</div>
                    <h5>Pembayaran</h5>
                    <h2>{{ $totalPembayaran }}</h2>
                    <small>Total Pembayaran</small>
                </div>
            </div>

        </div>

        <div class="footer-text">
            🌷 Terima kasih telah menggunakan DianFlorist 🌷
        </div>

    </div>

</div>

</body>
</html>