
<?php
require 'functions.php';
$tokopancing = query("SELECT * FROM toko_pancing")

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Halaman Admin
        </title>
    </head>
    <body>
        <h1>
            Daftar Barang Toko Pancing ACEK
        </h1>
        
        <a href="tambah.php">Tambah perlengkapan pancing</a>
        <br><br>

        <table border="1" cellpadding = "10" cellspasing = "0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>tipe_perlengkapan</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php
            foreach ($tokopancing as $row) :

            ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?nama=<?= $row ["nama"]; ?>">Ubah</a> |
                    <a href="hapus.php?nama=<?= $row ["nama"]; ?>" onclick = "return confirm ('apakah anda yakin akan menghapus data?');">Hapus</a>
                </td>
                <td><img src="Gambar/<?= $row ["Gambar"]; ?>" width = "50" alt=""></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["tipe_perlengkapan"] ?></td>
                <td><?= $row["harga"] ?></td>
            </tr>
            <?php $i++; ?>

            <?php endforeach; ?>
        </table>
    </body>
</html>