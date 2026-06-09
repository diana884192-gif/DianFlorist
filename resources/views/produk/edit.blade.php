<!DOCTYPE html>
<html>
    <head> 
        <title> Edit Produk</title>

        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
            <style>
        body{
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
    </head>
    <body>
        
        <h2 class="judul-pink"> 🌺Edit Produk DianFlorist 🌺 </h2>
        <p class="subjudul">🌷Perbarui data produk bunga favoritmu 🌷</p>
        <div class="box-form">

            <form action="/produk/{{ $produk->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label><br>
                    <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label><br>
                    <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" required>
                </div>

                <button type="submit" class="btn btn-simpan" >  🔁 Update Produk </button>

                <a href="/produk" class="btn btn-secondary w-100 mt-2"> ⬅ Kembali </a>
                </form>
            </div>
        </div>
    </body>
</html>