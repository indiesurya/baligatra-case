<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <p><a href="/"> Home</a></p>
     <form action="/login" method="post">
    @csrf
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>