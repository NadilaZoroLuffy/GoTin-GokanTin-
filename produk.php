<?php
require 'koneksi.php'; // Pastikan file koneksi.php sudah benar
// Ambil data produk dari database
$produk = mysqli_query($conn, "SELECT * FROM produk");

// Pastikan koneksi berhasil
if (!$produk) {
    die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        .card-img-top {
            object-fit: cover;
            height: 250px;
        }
        .card-body h5 {
            font-size: 18px;
            font-weight: bold;
        }
        .card-body p {
            font-size: 16px;
        }
        .card {
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .btn-beli {
            background-color: #28a745;
            color: white;
        }
        .btn-beli:hover {
            background-color: #218838;
        }
    </style>
</head>
<body style="background-color: #f8f9fa;">

<!-- Navbar Section -->
<?php require 'layout/navbar.php'; ?>

<div class="container mt-5">
    <h3 class="mb-4">Daftar Produk</h3>

    <div class="row">
        <?php while ($data = mysqli_fetch_assoc($produk)) : ?>
        <div class="col-md-4">
            <div class="card">
                <img src="foto/<?= $data['foto']; ?>" class="card-img-top" alt="<?= $data['nama_produk']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_produk']; ?></h5>
                    <p class="card-text">Harga: Rp <?= number_format($data['harga'], 0, ',', '.'); ?></p>
                    <a href="detail.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary">Detail</a>
                    <a href="cart.php?add=<?= $data['id_produk']; ?>" class="btn btn-beli">Tambah ke Keranjang</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-dark text-white text-center py-3">
    @copyright 2024 All rights reserved Kantin Sehat
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
