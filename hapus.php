<?php
include("koneksi.php");

$id = $_GET["id"];

$sql = "DELETE FROM siswa WHERE id_siswa='$id'";

mysqli_query($Koneksi, $sql);
header('location: ./?page=siswa');


?>