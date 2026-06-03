<!DOCTYPE html>
<html>
    <head>
        <title>Data Pelanggan</title>
    </head>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
<body>
<div class="container mt-5">
<h2 style="text-align: center;">🌸Data Pelanggan🌸</h2>
<a href="/pelanggan/create"> + Tambah Pelanggan</a>

<br><br>
<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>

    @foreach($pelanggan as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->no_hp }}</td>
        <td>
            <a href="/pelanggan/{{ $p->id }}/edit">Edit</a>

            <form action="/pelanggan/{{ $p->id }}" method="POST"
                style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>
            </form>
    </tr>
    @endforeach
</table>
</body>
</html> 