<h2>{{ $judul }}</h2>

<table border="1" width="100%" class="tables">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Kepala Prodi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list_prodi as $index => $prodi)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $prodi->kode }}</td>
            <td>{{ $prodi->name }}</td>
            <td>{{ $prodi->kaprodi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>