<?php

require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

// Cek apakah username ada di database
$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    // Ambil data user dari database
    $data = mysqli_fetch_array($query);

    // Periksa password
    if ($data["password"] == $password) {
        session_start();

        // Simpan data user di session
        $_SESSION["username"] = $data["username"];
        $_SESSION["roles"] = $data["roles"];

        // Arahkan berdasarkan roles
        if ($data["roles"] == "Customer") {
            header("Location: ../index.php");
        } else if ($data["roles"] == "Admin") {
            header("Location: ../admin/index.php");
        }
    } else {
        // Password salah
        echo "
            <script type='text/javascript'>
                alert('Password salah. Silakan coba lagi.');
                window.location = 'index.php';
            </script>
        ";
    }
} else {
    // Username tidak ditemukan
    echo "
        <script type='text/javascript'>
            alert('Username tidak ditemukan. Silakan daftar terlebih dahulu.');
            window.location = 'index.php';
        </script>
    ";
}

?>
