<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Divisi</th>
        </thead>

        <tbody>
            @foreach ($data as $index => $data )
            <tr>
                <td>{{ $index + 1  }}</td>
                <td>{{ $data->nama  }}</td>
                {{--  data awal -> namamodel -> nama colum  --}}
                <td>{{ $data->divisi->divisi}}</td>
                <td>{{ $data->lokasi->lokasi}}</td>
                {{--  <td>{{ $data->lokasi->lokasi}}</td>  --}}
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

