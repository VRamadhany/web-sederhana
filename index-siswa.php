<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index-style.css">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="tambah-siswa.php"><button class="btn-tambah">Tambah Data</button></a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor Telpon</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("koneksi.php");
            
            $sql = "SELECT * FROM siswa";
            $hasil = mysqli_query($Koneksi, $sql);
            $nomor = 1;
            while ($siswa = mysqli_fetch_array($hasil)) {
            
            ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $siswa['nama']; ?></td>
                <td><?php echo $siswa['jenis_kelamin']; ?></td>
                <td><?php echo $siswa['alamat']; ?></td>
                <td><?php echo $siswa['nomorHP']; ?></td>
                <td>
                    <a href="edit-siswa.php?id=<?= $siswa['id_siswa']; ?>"><button class="btn-edit">Edit</button></a>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $siswa['id_siswa']; ?>"><button class="btn-hapus">Hapus</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>