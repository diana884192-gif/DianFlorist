<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Jenis Bunga</title>

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet">

            <style>
                body{
                    background-color: lavenderblush;
                    font-family: 'seqoe UI' , sans-serif;
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
                    background-color: white;
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
                    border-radius: 8px;
                    border: none;
                    transition: 0.3s;
                    width: auto;
                    display: inline-block;
                    padding: 6px 14px;
                }
                .btn-simpan:hover{
                    background-color: hotpink;
                    color: white;
                }
                .btn-simpan:hover,
                .btn-secondary:hover{
                    transform: scale(1.03);
                    transition: 0.3s;
                }
                
            </style>
    </head>
    <body>

        <div class="container mt-5">

            <div class="box-form">

                <h2 class="judul-pink"> 🌸Tambah Jenis Bunga🌸
                </h2>

                <form action="/jenis_bunga" method="POST" enctype="multipart/form-data">
                    @csrf 

                    <div class="mb-3">

                        <label>
                            Nama Jenis Bunga 🌸
                        </label>

                        <input type="text"
                                name="nama_jenis"
                                class="form-control"
                                placeholder="Masukkan Jenis Bunga"
                                required>
                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Foto Bunga 
                        </label>

                        <input type="file"
                                name="gambar"
                                class="form-control"
                                required>
                    </div>

                        <button type="submit"
                                class="btn btn-simpan">
                                🌷 Simpan
                        </button>

                        <a href="/jenis_bunga" class="btn btn-secondary ms-2">
                            ⬅ Kembali
                        </a>
                </form>
            </div>
        </body>
    </html>