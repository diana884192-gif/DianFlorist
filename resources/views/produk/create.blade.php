<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Produk - DianFlorist</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>

    <style>
        .body{
            background-color: lavenderblush;
            font-family: 'segoe UI', sans-serif;
        }
        .judul-pink{
            color: deeppink;
            font-weight: bold;
            text-align: center;
            margin-top: 40px;
        }
        .subjudul{
            text-align: center;
            color: gray;
            margin-bottom: 20px;
        }
         .box-form{
            background-color: seashell;
            max-width: 450px;
            margin: auto;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 4px 15px lightpink;
        }
        label{
            font-weight: bold;
            color: deeppink;
        }
        input{
            border-radius: 10px !important;
        }
        .btn-simpan{
            background-color: deeppink;
            color: white;
            width: 100%;
            border-radius: 10px;
        }
        .btn-simpan:hover{
            background-color: hotpink;
            color: white;
        }  
    </style>
    <body>

    <h2 style="color: pink; text-align:center;">🌺Tambah Produk DianFlorist🌺</h2>
    <p class="subjudul">Isi data produk bunga dengan lengkap yaaa 🌸</p>  

    <div class="box-form">  

    <form method="POST" action="/produk">
        @csrf
        
        <div class="mb-3">
            <label>Nama Produk</label><br>
            <input type="text" name="nama_produk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label><br>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Stok</label><br>
            <input type="number" name="stok" class="form-control" required>
        </div>

            <button type="submit" class="btn btn-simpan"> 💾 Simpan Produk </button>
    </form>

    </div>