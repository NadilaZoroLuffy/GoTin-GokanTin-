<?php

session_start();
require 'functions.php';

$produk = query("SELECT * FROM produk");

?>

<?php require '../layout/sidebar.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
<div class="main">
    <div class="contents">
    <h3>Data Produk</h3>
    <a href="tambah_produk.php" class="tambah">Tambah Produk</a>
    <table >
        <tr>
            <th>No</th>    
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_produk"]; ?></td>
            <td><?= $data["harga"]; ?></td>
            <td><img src="../foto/<?= $data["foto"] ?>" alt="" width="80px"></td>
            <td><?= $data["stok"]; ?></td>
            <td>
                <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>" class="edit">Edit</a>
                <a href="hapus_produk.php?id=<?= $data["id_produk"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    </div>
</div>
</body>
</html>