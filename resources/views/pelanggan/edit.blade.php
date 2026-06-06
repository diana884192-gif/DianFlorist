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

                <div class=" card-bod p-4y">

                    <h2 class="text-center mb-4"
                        style="color: deeppink;">👤Edit Pelanggan👤</h2>

                    <form action="/pelanggan/{{ $pelanggan->id }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="text-enter">

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

                        <button type="submit" class="btn btn-success">Update</button>

                        <a href="/pelanggan" class="btn btn-secondary">Kembali </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>