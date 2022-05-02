<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    Input Data
    <form action="/inputdata" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="desc">Deskripsi</label><br>
        <input type="text" name="desc"><br>
        <label for="photo">Foto</label><br>
        <input type="file" id="photo"name="photo"><br>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga"><br>
        <button name="submit">insert</button>
    </form>
</body>
</html>