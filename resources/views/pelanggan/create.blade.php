<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Pelanggan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                background-color: lavenderblush;
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
                margin-top: 20px;
            }
            .box-form{
                background-color: seashell;
                max-width: 500px;
                margin: auto;
                padding: 25px;
                border-radius: 20px;
                box-shadow: 0 4px 15px lightpink;
            }
            label{
                color: deeppink;
                font-weight: bold;
            }
            input{
                border-radius: 10px !important;
            }
            .btn-simpan{
                background-color: hotpink;
                color: white;
                width: 100%;
            }
            .btn-simpan:hover{
                background-color: hotpink;
                color: white;
            }
        </style>
    </head>
 
    <body>
        <h1 class="text-center judul-pink"> 👤 Tambah Pelanggan 👤</h1>
            <p class="subjudul"> 🌷 Selamat datang pelanggan baru DianFlorist 🌷
            <br>
                💖 Semoga harimu seindah bunga yang bermekaran 💖 </p>

                <div class="box-form">
                    <form action="/pelanggan" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Nama</label><br>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>No HP</label><br>
                            <input type="text" name="no_hp" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-simpan"> 💖 Simpan Pelanggan </button>
                    </form>
                </body>
        </html>
