<?php

session_start();
require 'functions.php';

$transaksi = query("SELECT * FROM transaksi");

require '../layout/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="contents">
    <h1>Transaksi</h1>

    <!-- <a href="tambah_transaksi.php" class="tambah">Tambah Transaksi</a> -->
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach($transaksi as $data): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["nama_produk"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["harga"]; ?></td>
            <td><img src="../foto/<?= $data["foto"]; ?>" width="80px"></td>
            <td><?= $data["status"] ?></td>
            <td>
                <a href="verif.php?id=<?= $data["id_transaksi"]; ?>" class="edit">Verifikasi</a>
                <a href="reject.php?id=<?= $data["id_transaksi"]; ?>" class="hapus">Reject</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
        </div>
    </div>
</body>
</html>