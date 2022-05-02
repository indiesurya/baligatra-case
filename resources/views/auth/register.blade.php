<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="post">
    @csrf
        <label for="">Username</label><br>
        <input type="text" name="name"><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>