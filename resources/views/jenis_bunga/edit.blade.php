<!DOCTYPE html>
<html>
    <head>
        <title>Edit Jenis Bunga</title>

        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">

        <style>
            body{
                background-color: lavenderblush;
                font-family: 'segoe UI' , sans-serif;
            }
            .judul-pink{
                color: deeppink;
                font-weight: bold;
                text-align: center;
                margin-top: 20px;
            }
            .subjudul{
                text-align: center;
                color: gray;
                margin-top: bottom: 20px;
            }
            .box-form{
                background-color: seashell;
                max-width: 450px;
                margin: 30px auto;
                padding: 25px;
                border-radius: 20px;
                box-shadow: 0 4px 15px lightpink
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
                width: auto;
                border-radius: 8px;
                border: none;
                transition: 0.3s;
                padding: 6px 14px;
                display: inline-block;
            }
            .btn-simpan:hover{
                background: hotpink;
                tranform: scale(1.05);
            }
        </style>
    </head>
    <body>
        <div class="box-form">
            <h2 class="judul-pink"> 🌸Edit Jenis Bunga🌸</h2>
            <form action="/jenis_bunga/{{ $jenis_bunga->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 text-center">

                    <label class="form-label d-block"> Foto Saat Ini</label>

                    <img src="/images/jenis_bunga/{{ $jenis_bunga->gambar }}" width="120" style="border-radius:10px;">
                </div>
        
                <div class="mb-3">
                    <label class="form-label">
                    Nama Jenis Bunga 💐
                    </label>
                    <input type="text" name="nama_jenis" class="form-control" value="{{ $jenis_bunga->nama_jenis }}" required>
                </div>

                <div class="mb-3">
                    <label> Ganti Foto (opsional)</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <button type="submit" class="btn btn-simpan">
                    🔁 Update
                </button>

                <a href="/jenis_bunga" class="btn btn-secondary ms-2">
                    ⬅ Kembali
                </a>
            </form>
        </div>
    </body>
</html>