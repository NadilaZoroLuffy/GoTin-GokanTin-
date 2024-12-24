<?php

require 'layout/navbar.php';
require 'koneksi.php';

if(isset($_SESSION['username'])){
  // $query = "SELECT * FROM user WHERE username='$_SESSION[`username`]'";
  // $result = mysqli_query($conn, $query);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <h3>Riwayat Pesanan Anda</h3>
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Tanggal Pemesanan</th>
            <th>Status Pembayaran</th>
            <th>Status Pengiriman</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nama Produk 1</td>
            <td>12 Desember 2022</td>
            <td>Berhasil</td>
            <td>Dalam Proses Pengiriman</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nama Produk 2</td>
            <td>10 Desember 2022</td>
            <td>Berhasil</td>
            <td>Dikirim</td>
          </tr>
        </tbody>
      </table>
      <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
