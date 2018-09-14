<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST" name="input">
    Email : <input type="email" name="Email">
    <br>Password : <input type="password" name="pass">
    <br><br><input type="submit" name="login" value="Daftar">
    </form>
</body>
</html>

<?php
$email="uzhantheforev@gmail.com";
$pass="123456";
if(isset($_POST['login'])){
    $e=$_POST['Email'];
    $p=$_POST['pass'];
    if ($e==$email && $p==$pass){
    echo "<br><b>Login Berhasil</b>";
    }
    else{
        echo "<br><b>Login Gagal</b>";
    }
}