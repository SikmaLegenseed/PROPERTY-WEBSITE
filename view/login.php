<?php
date_default_timezone_set('Asia/Jakarta'); 
$jam = date("H");

if ($jam >= 3 && $jam <= 11) {
    $salam = "Selamat Pagi";
}else if ($jam >= 12 && $jam <= 14) {
    $salam = "Selamat Siang";
}else if ($jam >= 15 && $jam <= 17){
    $salam = "Selamat Sore";
}else {
    $salam = "Selamat Malam";
}

// if(isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"]

//     mysqli_query($conn, "SELECT * FROM ")
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halaman Login</h1>
    <h2><?= $salam;?></h2>

    <form action="proses_login_dekripsi.php" method="POST">
        <div class="wrapper">
            <form action="">
                <ul>
                    <li>
                        <label for="username">Username:</label>
                        <input type="text" placeholder="Username" name="username" required>
                    </li>
                    <li>
                        <label for="password">Password:</label>
                        <input type="password" placeholder="Password" name="password" required>
                    </li>
                    <li>
                        <button type="submit" class="btn">Login</button>
                    </li>
                    <li>
                        <button><a href="registrasi.php">Registrasi</a></button>
                    </li>
                </ul>
            </form>
        </div>
    </form>
</body>
</html>