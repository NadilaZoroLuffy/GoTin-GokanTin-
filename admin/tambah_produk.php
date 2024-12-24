<?php

session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahProduk($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data produk berhasil ditambahkan');
                window.location = 'produk.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php'
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
    <title>Tambah Produk</title>
</head>
<body>
<div class="main">
    <div class="box">

        <h3>Tambah Data Produk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
            
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control">
            
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control">

            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" class="form-control">

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="7"></textarea>

            <button type="submit" name="kirim">Tambah</button>
        </form>
    </div>
</div>
</body>
</html>