<?php
include "conn.php";

// id
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['roles'];
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);


$query_username = mysqli_query($conn, "SELECT COUNT(*) FROM tb_user WHERE username='$username'");
$cek_username = mysqli_fetch_assoc($query_username);

if ($cek_username['0'] != 0){
    echo "<script>alert('Username sudah terdaftar, silahkan menggunakan username yang lain!');window.location.href='registrasi.php'</script>";
}else{
    echo "<script>alert('Berhasil Registrasi!');window.location.href='login.php'</script>";
    $query = "INSERT INTO tb_user VALUES (NULL, '$nama', '$username', '$pass_hash', '$role')";
    $hasil = mysqli_query($conn, $query);
    

    if (!$hasil){
        echo "Gagal Registrasi : ".mysqli_error($conn);
    }else {
        header("location:login.php");
        exit;
    }
}
?>