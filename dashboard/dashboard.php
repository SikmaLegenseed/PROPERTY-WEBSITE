<?php
session_start();
include "../view/conn.php";
include "../component/navbar.php";

//klo blm login harus login
if (!@$_SESSION["username"]){
    exit(header("Location:../view/login.php"));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROPERTY WEBSITE | Surya</title>
    <link rel="stylesheet" href="../view/style.css">
    <link rel="icon" href="../img/logo-matahari.png" type="image/x-icon">
    
</head>
<body>

    <div class="container">
        <div class="img-main">
            <img class="z-[-1] object-cover object-center absolute left-0 top-0 w-full h-full" src="../img/rumah-2.jpg" width="100%" height="700px" alt="Outdoor Lamps">
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quis ea, quia neque voluptates rerum placeat voluptas voluptate molestias porro.</div>
            <button onclick="document.querySelector('.content').scrollIntoView({ behavior: 'smooth', block: 'start' })" class="rounded-full px-4 py-2 shadow bg-green-600 hover:bg-white hover:text-green-600">Read More</button>
        </div>
        
    </div>
    
    <div class="content" style="display: flex;">
        <div style="width: 50%;">
            <img src="../img/rumah.jpg" alt="content house" width="588px" height="520px">
        </div>
        <div style="width: 50%;">
            <h2 class="text" style="text-align: center; margin-bottom: 20px;">We are Real Estate Investors</h2>
            <p class="text-content" style="text-align: center;">We are a real estate solutions and investment company that specializes in buying, repairing and remodeling houses. We are investors and problem solvers who can buy houses fast "as is" with a cash offer.</p>
        </div>
    </div>

    <div class="list-house">
        <div class="card">
            <img src="../img/rumah.jpg" alt="content house" width="350px" height="350px">
            <div class="card-text">
                <h3>Sewa Rumah</h3>
                <p class="card-text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quis ea, quia neque voluptates rerum placeat voluptas voluptate molestias porro.</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="card">
            <img src="../img/rumah.jpg" alt="content house" width="350px" height="350px">
            <div class="card-text">
                <h3>Jual Villa</h3>
                <p class="card-text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quis ea, quia neque voluptates rerum placeat voluptas voluptate molestias porro.</p>
                <button>Read More</button>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright &copy; <?php echo date('Y');?> | Agung Surya</p>
        <p>Made with ❤️ in Indonesia</p>
        <a href="https://github.com/SikmaLegenseed" target="_blank"><img src="../img/github-icon.png" alt="github" width="40px" height="40px"></a>
    </footer>
    <script src="../view/script.js"></script>
</body>
</html>
