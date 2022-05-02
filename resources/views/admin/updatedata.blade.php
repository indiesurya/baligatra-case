<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    Update Data
    <form action="{{ url('/updatedata/'.$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="desc">Deskripsi</label><br>
        <input type="text" name="desc" value="{{ $data->desc}}"><br>
        <label for="photo">Foto</label><br>
        <input type="file" name="photo" value="{{ $data->photo}}" id="photo"><br>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga" value="{{ $data->harga}}"><br>
        <button name="submit">update</button>
    </form>
</body>
</html>