<!DOCTYPE html>
<html>
    <head>
        <title>Edit Pelanggan</title>
    </head>

    <body>

        <h2>Edit Pelanggan</h2>

        <form action="/pelanggan/{{ $pelanggan->id }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nama</label><br>
            <input type="text" name="nama" value="{{
            $pelanggan->nama }}">
            <br><br>

            <label>No HP</label><br>
            <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}">
            <br><br>

            <button type="submit">Update</button>
        </form>
    </body>
</html>