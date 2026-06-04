<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Jenis Bunga</title>

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet">
    </head>
    <body>

        <div class="container mt-5">

            <h2 class="text-center bm-4"
                style="color: deeppink;"> 🌸Tambah Jenis Bunga🌸
            </h2>

            <a href="/jenis_bunga" class="btn btn-secondary mb-3">
                Kembali
            </a>

            <form action="/jenis_bunga" method="POST">
                @csrf 

                <div class="mb-3">

                    <label class="form-label">
                        Nama Jenis Bunga
                    </label>

                    <input type="text"
                            name="nama_jenis"
                            class="form-control"
                            placeholder="Masukkan Jenis Bunga"
                            required>
                </div>

                <button type="submit"
                        class="btn text-white"
                        style="background-color: hotpink;">
                </button>

            </form>
        </div>
    </body>
</html>