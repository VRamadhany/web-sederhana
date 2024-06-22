<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form-style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="judul">
                <h2>Tambah Data Siswa</h2>
            </div>
            <button class="btn-kembali"><a href="./?page=siswa">Kembali</a></button>
            <hr>
            <table>
                <tr>
                    <td><input type="text" name="nama" id="nama" placeholder="Nama" aria-required="true"></td>
                </tr>
                <tr>
                    <td>
                        <select name="jenis_kelamin" id="jenis_kelamin" aria-required="true">
                            <option value="">-- Jenis Kelamin --</option>
                            <option value="laki-laki" >Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="alamat" id="alamat" placeholder="Alamat" aria-required="true"></td>
                </tr>
                <tr>
                    <td><input type="text" name="handphone" id="handphone" maxlength="13" placeholder="Nomor Telpon" aria-required="true"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="tambah" class="btn-tambah" onclick="submitform()">Tambah Data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
include ("koneksi.php");

if(isset($_POST["tambah"])){
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $hp = $_POST['handphone'];

        $sql = "INSERT INTO siswa (nama,jenis_kelamin,alamat,nomorHP) VALUES ('$nama','$jk','$alamat','$hp')";
        mysqli_query($Koneksi,$sql);
        header('location: ./?page=siswa');
}
?>