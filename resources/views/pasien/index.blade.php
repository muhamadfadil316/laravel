<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;" width="100%">
          <thead>
               <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Kelurahan</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($pasiens as $pasien)
                    <tr>
                         <td>{{ $pasien->nama }}</td>
                         <td>{{ $pasien->alamat }}</td>
                         <td>{{ $pasien->email }}</td>
                         <td>{{ $pasien->kelurahan->nama }}</td>
                    </tr>
               @endforeach
          </tbody>
     </table>
</body>
</html>