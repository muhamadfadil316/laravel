<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar kelurahans</h1>
    <table border="1"  width="100%" class="tables">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelurahans as $kelurahan)
                <tr>
                    <td>{{ $kelurahan->id }}</td>
                    <td>{{ $kelurahan->nama }}</td>
                    <td>
                        <a href="{{ url('kelurahan.show', $kelurahan->id) }}">Show</a> |
                        <a href="{{ url('kelurahan.edit', $kelurahan->id) }}">Edit</a> |
                        <form action="{{ url('kelurahan.destroy', $kelurahan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>