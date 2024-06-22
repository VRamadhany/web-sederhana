<?php
session_start();

if (!isset($_SESSION['login']) && !$_SESSION['login'] == true) {
    header("location: login.php");
    exit();
} else {
    $nama = $_SESSION['nama'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index-style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav>
            <div class="navbar">
                <ul>
                    <a href="?page=home"><li>Home</li></a>
                    <a href="?page=siswa"><li>Siswa</li></a>
                    <a href="?page=logout"><li style="float: right;">Logout || <?= $nama ?></li></a>
                </ul>
            </div>
        </nav>
    </div>

    <?php
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        

        switch ($page){

            case 'home':
                include 'home.php';
                break;
            case 'siswa':
                include 'index-siswa.php';
                break;
            case 'tambah-siswa':
                header('location: tambah-siswa.php');
                break;

            
            case 'logout':
                include 'logout.php';
                break;
            
            default:
                include '404page.php';
                break;
        }
    } else {
        include 'home.php';
    }
    
    ?>
</body>
</html>