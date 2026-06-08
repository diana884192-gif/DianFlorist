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
            margin-top: 30px;
        }
        .subjudul{
            text-align: center;
            color: gray;
            margin-bottom: 20px;
        }
         .box-form{
            background-color: seadhell;
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
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 10px;
            border: 1px solid pink;
            outline: none;
        }
        input:focus{
            border:2px sold hotpink;
        }.btn-simpan:hover{
            background-color: hotpink;
        }
        
    </style>
    <body>

<h2 style="color: pink; text-align:center;">🌺Tambah Produk DianFlorist🌺</h2>

<div style="text-align: center;">

<form method="POST" action="/produk">
    @csrf

    <label>Nama Produk</label><br>
    <input type="text" name="nama_produk"><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>

</div>