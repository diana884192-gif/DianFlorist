<!DOCTYPE html>
<html>
    <head>
        <title>Data Pelanggan</title>
    </head>
<body>

<h2>Data Pelanggan</h2>
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