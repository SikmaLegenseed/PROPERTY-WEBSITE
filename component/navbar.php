<?php
include "../view/conn.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<body>
    <nav>
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google Logo">
            <ul>
            <?php if ($_SESSION['level'] == 'admin'):?>
                <li style="text-decoration: none;"><a href="../dashboard/dashboard.php?page=rumah">Lihat Rumah</a></li>
                <li>
                    <div class="username-hover" onclick="toggleDropdown()">
                        <?= $_SESSION['username'] ?> ▼
                        <div class="dropdown-content">
                            <p>Level: <b><?= $_SESSION['level'] ?></b></p>
                            <hr>
                            <a href="../view/logout.php" class="logout-btn">Logout</a>
                        </div>
                    </div>
                </li>
            <?php endif;?>
            </ul>
    </nav>

    

    <!-- Konten -->
    <?php
    switch(@$_GET['page']){
        case 'rumah':
            include_once "../rumah/view_rumah.php";
            break;
        case 'tambah_rumah':
            include_once "../rumah/tambah_rumah.php";
            break;
        case 'edit_rumah':
            include_once "../rumah/edit_rumah.php";
            break;
    }
    
    ?>
</body>
</html>