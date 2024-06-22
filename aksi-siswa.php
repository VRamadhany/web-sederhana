<?php 
include ("koneksi.php");

if(isset($_GET['perintah'])){
    $perintah = $_GET['perintah'];

    switch ($perintah){

        case 'tambah':
            $nama = $_POST['nama'];
            $jk = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['handphone'];

            $sql = "INSERT INTO siswa (nama,jenis_kelamin,alamat,nomorHP) VALUES ('$nama','$jk','$alamat','$hp')";
            mysqli_query($Koneksi,$sql);
            header('locarion: ./?page=siswa');

            case 'hapus':
                $id = $_GET['id'];
    
                $sql = "DELETE FROM siswa WHERE id_siswa='$id'";
                mysqli_query($Koneksi,$sql);
                header('locarion: ./?page=siswa');


    }

}


?>