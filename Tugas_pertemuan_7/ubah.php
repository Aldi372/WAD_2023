<?php
require 'functions.php';

$nama = $_GET["nama"];

$toko_pancing = query("SELECT * FROM toko_pancing WHERE nama = '$nama'")[0];

if (isset ($_POST["submit"])){

    if (ubah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index2.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index2.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Ubah data alat pancing
        </title>
    </head>
    <body>
        <h1>Ubah perlengkapan alat pancing</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $toko_pancing["id"]; ?>">
            <ul>
                <li>
                    <label for="nama">Isi nama barang</label>
                    <input type="text" name="nama" id = "nama" required
                    value = "<?= $toko_pancing["nama"]; ?>">
                </li>
                <li>
                    <label for="harga">Masukkan harga</label>
                    <input type="text" name="harga" id="harga" required
                    value = "<?= $toko_pancing["harga"]; ?>">
                </li>
                <li>
                    <label for="tipe_perlengkapan">Tipe perlengkapan</label>
                    <input type="text" name="tipe_perlengkapan" id="tipe_perlengkapan" required
                    value = "<?= $toko_pancing["tipe_perlengkapan"]; ?>">
                </li>
                <li>
                    <label for="Gambar">masukkan gambar</label>
                    <input type="text" name="Gambar" id="Gambar" required
                    value = "<?= $toko_pancing["Gambar"]; ?>">
                </li>
                <li>
                    <button type="submit" name = "submit" >Ubah data</button>
                </li>
            </ul>
        </form>
    </body>
</html>