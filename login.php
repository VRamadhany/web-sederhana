<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-style.css">
    <title>Aplikasi Simple</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <table class="form-login">
                <thead>
                    <tr>
                        <th colspan="2">Login</th>
                    </tr>
                    <tr>
                        <th><img src="asset/people.svg" alt="Login Form" width="50px" height="80px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="username" id="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" id="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="login">Sign In</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>
<?php
session_start();
include "koneksi.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $hasil = mysqli_query($Koneksi, $sql);
    $cek = mysqli_num_rows($hasil);

    if($cek == 1){
        $data = mysqli_fetch_assoc($hasil);
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['login'] = true;
        
        header('location: index.php');
    } else{
        echo "<script> alert('Username atau Password Salah!') </script>";
    }
}
?>