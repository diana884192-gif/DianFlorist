<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pembayaran</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="card mx-auto mt-5 shadow" style="max-width:500px">

            <div class="card-body">

            <h2 class="text-center mb-4" style="color: deeppink;"> ✏ Edit Pembayaran </h2>

            <form method="POST" action="/pembayaran/{{ $data->id }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label> 🛒pesanan</label>
                    <select name="pesanan_id" class="form-control">
                        @foreach($pesanan as $p)
                        <option value="{{ $p->id }}" {{ $data->pesanan_id == $p->id ? 'selected' : '' }}>
                            Pesanan #{{ $p->id }} {{ $p->pelanggan->nama }} {{ $p->produk->nama_produk }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>💰 Metode Pembayaran</label>
                    <input type="text" name="metode_pembayaran" class="form-control" value="{{ $data->metode_pembayaran }}">
                </div>

                <div class="mb-3">
                    <label>📋 Status Pembayaran</label>
                    <input type="text" name="status_pembayaran" class="form-control" value="{{ $data->status_pembayaran }}">
                </div>

                <button class="btn text-white w-100" style="background-color: hotpink;">🌸 Update Pembayaran</button>
            </form>
        </div>
    </body>
</html>