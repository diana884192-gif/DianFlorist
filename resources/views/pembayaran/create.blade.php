<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Pembayaran</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>

    <body class="bg-light">

        <div class="card mx-auto mt-5 shadow" style="max-width:500px;">

            <div class="card-body">

                <h2 class="text-center mb-4" style="color: deeppink;">💳Form Pembayaran💳</h2>

                <form method="POST" action="/pembayaran">
                    @csrf

                    <div class="mb-3">
                        <label>🛒Pesanan</label>
                        
                        <select name="pesanan_id" class="form-control">
                            @foreach($pesanan as $p)

                            <option value="{{ $p->id }}"> Pesanan #{{ $p->id }} </option>
                            @endforeach
                        </select>
                    </div>

                        <div class="mb-3">
                            <label>💰 Metode Pembayaran</label>
                            <input type="text" name="metode_pembayaran" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label> 📋 Status Pembayaran</label>
                            <input type="text" name="status_pembayaran" class="form-control">
                        </div>

                        <button type="submit" class="btntext-white w-100" style="background-color: hotpink;">
                            🌸 Simpan Pembayaran 
                        </button>
                </form>
            </div>
        </div>
    </body>
</html>