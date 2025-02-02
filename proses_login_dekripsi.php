<?php
include "conn.php";
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user'");
$baris_level = mysqli_fetch_assoc($query);
$cek = password_verify($pass, $baris_level['password']);

if ($cek){
    $_SESSION['username'] = $user;
    $_SESSION['level'] = $baris_level['role'];
    $_SESSION['id_user'] = $baris_level['id'];
    echo "<script>alert('Berhasil Login!');window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Gagal Login!');window.location.href='login.php'</script>";
}

?>