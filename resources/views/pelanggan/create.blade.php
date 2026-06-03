<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Pelanggan</title>
    </head>

    <body>
        <h2 style="color:red;">Tambah Pelanggan</h2>

            <form action="/pelanggan" method="POST">
                 @csrf

                <label>Nama</label><br>
                <input type="text" name="nama"><br><br>

                <label>No HP</label><br>
                <input type="text" name="no_hp"><br><br>

                <button type="submit">Simpan</button>
            </form>
        </body>
</html>
