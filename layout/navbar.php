<?php require 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../css/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body style="background: #ECF5DA;"><!-- position: fixed; width: 1550px;  -->
<style>
    .navbar .menu a {
        text-decoration: none;
        color: #333;
        font-size: 18px;
        margin: 15px;
    }
</style>
        <div class="navbar" style="background-color: #AFA8A8;">
            <div class="logo mx-5">
                <img src="foto/assets/logo.jpeg." width="65" height="52">
            </div>
                <div class="menu">
                    <a href="index.php">Beranda <i class="fa-solid fa-house"></i></a> 
                    <a href="produk.php">Produk <i class="fa-solid fa-money-bill"></i></a>
                    <a href="riwayat_pemesanan.php">Riwayat Pemesanan <i class="fa-solid fa-clock-rotate-left"></i></a>
                    <a href="cart.php">Keranjang <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            
                <?php if (isset($_SESSION["username"])): ?>
                    <div class="flex">
                    <a href="" class="btn">Halo, <?= $_SESSION["username"]; ?></a>
                    <a href="logout.php" class="btn btn-primary px-4 py-2">Logout</a>
                    </div>
                <?php endif; ?>

                <?php if (!isset($_SESSION["username"])): ?>
                    <div class="flex">
                        <a href="login/index.php" class="btn btn-primary">Login</a>
                        <a href="register/index.php" class="btn btn-outline-primary">Register</a>
                    </div>
                <?php endif; ?>
          
        </div>
        
    <script src="/airplane/assets/sweet-alert/js/jquery-2.1.4.min.js"></script>
    <script src="/airplane/assets/sweet-alert/js/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>