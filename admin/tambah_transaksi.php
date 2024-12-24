<?php

session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahTransaksi($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data produk berhasil ditambahkan');
                window.location = 'transaksi.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'transaksi.php'
        </script>
    ";
    }
}

require '../layout/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
</head>
<body>
<div class="main">
    <div class="box">

        <h3>Tambah Data Transaksi</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control">

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
            
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control">
            
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">

            <button type="submit" name="kirim">Tambah</button>
        </form>
    </div>
</div>
</body>
</html>