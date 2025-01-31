<?php

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"]

    mysqli_query($conn, "SELECT * FROM ")
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button>Login</button>
            </li>
        </ul>
    </form>
</body>
</html>