<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pelanggan</title>

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet">
    </head>

    <body>

        <div class="container mt-5">

            <div class="card shadow mx-auto"
                style="max-width: 450px;">

                <div class=" card-body p-4y">

                    <h1 class="judul-pink">👤Edit Pelanggan👤</h1>
                    <p class="subjudul">
    🌸 Yuk edit data pelanggan kesayangan 🌸
    <br>
    💖 Biar tetap rapi dan cantik 💖
</p>

                    <form action="/pelanggan/{{ $pelanggan->id }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="text-center">

                            <div class="mb-3">
                                <label class="form-label">Nama Pelanggan</label>
                            <input type="text" 
                                name="nama" 
                                class="form-control"
                                value="{{ $pelanggan->nama }}">
                            </div>

                        <br><br>
                        
                        <div class="mb-3">

                            <label>No HP</label><br>
                            <input type="text" name="no_hp"    
                                class="form-control"
                                value="{{ $pelanggan->no_hp }}">
                        </div>
                        <br><br>

                        <button type="submit" class="btn btn-simpan"> 🔁 Update</button>

                        <a href="/pelanggan" class="btn btn-secondary mt-2 w-100"> ⬅ Kembali </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>