<?php
require 'functions.php';

if (isset ($_POST["submit"])){

    // $query = "INSERT INTO toko_pancing
    //             VALUES
    //             ('nama', 'harga', 'tipe_perlengkapan', 'Gambar') ";

    if (tambah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index2.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
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
            Tambah data alat pancing
        </title>
    </head>
    <body>
        <h1>Tambah perlengkapan alat pancing</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Isi nama barang</label>
                    <input type="text" name="nama" id = "nama" required>
                </li>
                <li>
                    <label for="harga">Masukkan harga</label>
                    <input type="text" name="harga" id="harga" required>
                </li>
                <li>
                    <label for="tipe_perlengkapan">Tipe perlengkapan</label>
                    <input type="text" name="tipe_perlengkapan" id="tipe_perlengkapan" required>
                </li>
                <li>
                    <label for="Gambar">masukkan gambar</label>
                    <input type="text" name="Gambar" id="Gambar" required>
                </li>
                <li>
                    <button type="submit" name = "submit" >Tambahkan data</button>
                </li>
            </ul>


        </form>
    </body>
</html>