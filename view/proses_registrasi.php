<?php
include "conn.php";

// id
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['roles'];
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

$cek_query = mysqli_query($conn, "SELECT COUNT(*) as count FROM tb_user WHERE username='$username'");
$cek_data = mysqli_fetch_assoc($cek_query);

if ($cek_data['count'] != 0){
    echo "<script>alert('Username sudah terdaftar, silahkan menggunakan yang lain!');window.location.href='registrasi.php'</script>";
}else{
    $query = "INSERT INTO tb_user VALUES (NULL, '$nama', '$username', '$pass_hash', '$role')";
    $hasil = mysqli_query($conn, $query);
    
    if (!$hasil){
        echo "Gagal Registrasi : ".mysqli_error($conn);
    }else {
        echo"<script>alert('Berhasil Registrasi!');window.location.href='login.php'</script>";
        exit;
    }
}  
?>
