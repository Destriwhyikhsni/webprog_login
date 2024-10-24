<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>

<body>
    <h3> {{ $judul }}</h3>
    <!-- error -->
    <form action="{{ route('backend.register') }}" method="post">
        @csrf 
        <label>Nama</label><br> 
        <input type="text" name="nama" id="">
        <p></p> 
        <label>Email</label><br> 
        <input type="text" name="email" id="">
        <p></p> 
        <label>No Hp</label><br> 
        <input type="number" name="hp" id="">
        <p></p> 
        <label>Password</label><br> 
        <input type="password" name="password" id="">
        <p></p>
        <button type="submit">Register</button> 
        <a href="{{ route('backend.login') }}"> <button
                type="button">Batal</button> </a>
    </form>
</body>

</html>
