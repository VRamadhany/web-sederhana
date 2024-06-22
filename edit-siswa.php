<?php
// PHP UNTUK TAMPIKAN DATA DI INPUT
include("koneksi.php");

$id = $_GET["id"];
$sql = "SELECT * FROM siswa WHERE id_siswa='$id'";
$hasil = mysqli_query($Koneksi,$sql);
$siswa = mysqli_fetch_assoc($hasil);

?>
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
                    <td><input type="text" name="nama" id="nama" placeholder="Nama" aria-required="true" value="<?= $siswa['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>
                        <select name="jenis_kelamin" id="jenis_kelamin" aria-required="true">
                            <option value="">-- Jenis Kelamin --</option>
                            <option <?php if($siswa['jenis_kelamin']=='laki-laki') echo "selected" ?> value="laki-laki" >Laki-Laki</option>
                            <option <?php if($siswa['jenis_kelamin']=='perempuan') echo "selected" ?> value="perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="alamat" id="alamat" placeholder="Alamat" aria-required="true" value="<?= $siswa['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="handphone" id="handphone" maxlength="13" placeholder="Nomor Telpon" aria-required="true" value="<?= $siswa['nomorHP'] ?>"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="edit" class="btn-tambah">Edit Data</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php


if(isset($_POST["edit"])){
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $hp = $_POST['handphone'];

        $sql = "UPDATE siswa SET nama='$nama',jenis_kelamin='$jk',alamat='$alamat',nomorHP='$hp' WHERE id_siswa='$id'";
        mysqli_query($Koneksi,$sql);
        header('location: ./?page=siswa');
}
?>