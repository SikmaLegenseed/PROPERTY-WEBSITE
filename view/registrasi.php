<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <center>
        <form action="proses_registrasi.php" method="POST">
            <div class="wrapper">
                <h1>REGISTRASI</h1>
                <div class="input-box">
                    <input type="text" placeholder="Nama" name="nama" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <div class="input-box">
                    <select name="roles" id="">
                        <option value="admin">Admin</option>
                        <option value="karyawan">karyawan</option>
                        <option value="member">Member</option>
                    </select>
                    <i class='bx bxs-crown'></i>
                </div>
                <button type="submit">Registrasi</button>
                <button><a href="login.php">Login</a></button>
            </div>
        </form>
    </center>
</body>
</html>