<?php

session_start();
require '../admin/functions.php';

$id = $_GET["id"];
$data = query("SELECT * FROM produk WHERE id_produk = '$id'")[0];

if(isset($_POST['kirim'])){
    if(tambahTransaksi($_POST) > 0){
        echo "
            <script type='text/javascript'>
            alert('pembelian berhasil, silahkan tunggu pesanan anda');
            window.location = '../index.php';
            </script>
        ";
    }else{
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chekout Pesanan</title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="main">
    <div class="box ms-5 mt-5 ">
        <h3>Chekout Pesanan</h3>
        <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="id_transaksi">

            <label for="nama_lengkap">Nama Lengkap</label> <br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

            <label for="nama_produk">Nama produk</label> <br />
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $data["nama_produk"]; ?>" disabled>

            <label for="alamat">Alamat</label><br />
            <input type="text" name="alamat" id="alamat" class="form-control">

            <label for="harga">Harga</label> <br />
            <input type="text" name="harga" id="harga" class="form-control" value="<?= $data["harga"]; ?>" disabled>

            <input type="hidden" name="foto" value="<?= $data["foto"]; ?>">

            <button type="submit" name="kirim" class="rounded">Beli Sekarang</button>
        </form>
        <img src="../foto/<?= $data["foto"]; ?>" alt="" width="400" height="300">

        </div>
    </div>
</div>
</body>
</html>