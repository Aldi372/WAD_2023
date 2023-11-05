<?php
//koneksi to database
$conn = mysqli_connect("localhost", "root", "", "toko pancing acek");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $tipe_perlengkapan = htmlspecialchars($data["tipe_perlengkapan"]);
    $Gambar = htmlspecialchars($data["Gambar"]);

    $query = "INSERT INTO toko_pancing (nama, harga, tipe_perlengkapan, Gambar)
    VALUES ('$nama', '$harga', '$tipe_perlengkapan', '$Gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($nama){
    global $conn;
    mysqli_query($conn, "DELETE FROM toko_pancing WHERE nama = '$nama");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $tipe_perlengkapan = htmlspecialchars($data["tipe_perlengkapan"]);
    $Gambar = htmlspecialchars($data["Gambar"]);

    $query = "UPDATE toko_pancing SET 
                nama = '$nama',
                harga = '$harga',
                tipe_perlengkapan = '$tipe_perlengkapan',
                Gambar = '$Gambar'

              WHERE id = '$id'
            ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
