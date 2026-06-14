<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pelanggan</title>

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet">
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
                    margin-bottom: 20px;
                }
                .box-form{
                    background-color: seashell;
                    max-width: 480px;
                    margin: auto;
                    padding: 15px;
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
                    background-color: deeppink;
                    color: white;
                }
                .btn-kembali{
                    background-color: orchid;
                    color: white;
                    width: 100%;
                }
                .btn-kembali:hover{
                    background-color: mediumorchid;
                    color: white;
                }
            </style>
    </head>

    <body>

        <div class="container mt-5">

            

                <div class=" card-body p-4">

                    <h1 class="text-center judul-pink"> 🌸 Edit Pelanggan 🌸 </h1>
                    <p class="text-center subjudul"> 🌸 Yuk edit data pelanggan kesayangan 🌸
                    <br>
                        💖 Biar tetap rapi dan cantik 💖</p>

                        <div class="box-form">

                        <form action="/pelanggan/{{ $pelanggan->id }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="text-center">

                                <div class="mb-3">
                                    <label class="form-label"> 🌷 Nama Pelanggan</label>
                                <input type="text" 
                                    name="nama" 
                                    class="form-control"
                                    value="{{ $pelanggan->nama }}">
                                </div>
                            
                            <div class="mb-3">

                                <label> 💖 No HP</label><br>
                                <input type="text" name="no_hp"    
                                    class="form-control"
                                    value="{{ $pelanggan->no_hp }}">
                            </div>

                            <button type="submit" class="btn btn-simpan"> 💖 Update Pelanggan </button>

                            <a href="/pelanggan" class="btn btn-kembali mt-2"> ⬅ Kembali </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </body>
    </html>