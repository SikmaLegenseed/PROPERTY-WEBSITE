<?php
    $host = "localhost:3306";
    $username = "root";
    $password = "";
    $database_name = "propertysurya";
    $conn = mysqli_connect($host, $username, $password, $database_name);


    if(!$conn){
        die ("Koneksi ke database gagal ".mysqli_connect_error());
    }

?>