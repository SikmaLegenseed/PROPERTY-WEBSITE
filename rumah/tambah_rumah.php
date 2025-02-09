<?php
include "../view/conn.php";

// Data rumah
$name = "Rumah 1";
$gambar = "../img/rumah.jpg";
$deskripsi = "Rumah sederhana loh rek";
$harga = "250000000.00";
$lokasi = "Jl Mas Amba";

// Query
$sql = "INSERT INTO tb_rumah (name, gambar, deskripsi, harga , lokasi) VALUES ('$name', '$gambar', '$deskripsi', '$harga', '$lokasi')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan!";
}else {
    echo "Gagal menambahkan! ".msqli_error($conn);
}

mysqli_close($conn);


?>