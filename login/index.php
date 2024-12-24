<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kantin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login">
    <h1>Gotin Kantin Sehat</h1>
    <p>Silahkan Login Akun Anda</p>
    <form action="process.php" method="POST">

        <label for="username">Username</label> <br />
        <input type="text" name="username" id="username" class="form-control"> <br /> <br />

        <label for="password">Password</label> <br />
        <input type="password" name="password" id="password" class="form-control"> <br /> <br />

        <button type="submit" name="submit">Login</button>
        
        <p>Belum Punya Akun? Daftar Sekarang</p>
        <a href="../register/index.php">Daftar</a>
    </form>
    </div>
</body>
</html>