<!DOCTYPE html>
<html>
    <head>
        <title>Edit Jenis Bunga</title>

        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    </head>
    <body>
        
        <div class="container mt-5">

            <div class="card shadow mx-auto"
                style="max-width: 500px;">

                <div class="card-body">

                    <h2 class="text-center mb-4"
                        style="color: deeppink;"> 🌸Edit Jenis Bunga🌸
                    </h2>

                    <form action="/jenis_bunga/{{ $jenis_bunga->id }}"
                        method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">
                                Nama Jenis Bunga 
                            </label>

                            <input type="text"
                                    name="nama_jenis"
                                    class="form-control"
                                    value="{{ $jenis_bunga->nama_jenis }}">
                        </div>

                            <button type="submit"
                                class="btn btn-primary">
                                Update
                            </button>

                            <a href="/jenis_bunga"
                                class="btn btn-secondary">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>