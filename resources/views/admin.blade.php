<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <p><a href="/logout">Logout</a></p>
    Data
    <p><a href="/inputdata">Insert Data</a></p>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Action<th>
        </tr>
        @php $i=0; @endphp
        @foreach($data as $item)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{$item->desc}}</td>
            <td><img src="{{ asset('storage/'.$item->photo) }}" alt="" style="width: 200px;"></td>
            <td>{{$item->harga}}</td>
            <td><a href="/updatedata/{{$item->id}}">edit</a>|<a href="/hapus/{{ $item->id }}">delete</a></td>
        </tr>
        @php $i++@endphp
        @endforeach
    </table>
        {{ $data->links() }}
</body>
</html>