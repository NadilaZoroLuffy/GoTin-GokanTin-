<?php

session_start();
require 'functions.php';

$user = query("SELECT * FROM user");

?>

<?php require '../layout/sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <div class="main">
        <div class="contents">
        <h1>Data User</h1>
    <a href="tambah_user.php" class="tambah">Tambah Data</a>

    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach($user as $data): ?>
        <tr>
            <td><?=$i;?></td>
            <td><?= $data["username"]; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["roles"]; ?></td>
            <td>
                <a href="edit_user.php?id=<?= $data["id_user"]; ?>" class="edit">Edit</a>
                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
        </div>
    </div>
</body>
</html>