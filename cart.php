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
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .c-black {
        color: brown;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h3>Keranjang Belanja</h3>
      <a href="index.php" class="c-black">Kembali ke Beranda</a>
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Es Lemon Tea</td>
            <td>Rp 10.000</td>
            <td>2</td>
            <td>Rp 20.000</td>
            <td>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pisang Nugget</td>
            <td>Rp 15.000</td>
            <td>1</td>
            <td>Rp 15.000</td>
            <td>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4" class="text-end"><strong>Total Bayar</strong></td>
            <td colspan="2"><strong>Rp 35.000</strong></td>
          </tr>
        </tfoot>
      </table>
      
      <button type="button" class="btn btn-success">Bayar</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
