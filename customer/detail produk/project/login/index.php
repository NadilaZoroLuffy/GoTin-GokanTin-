<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Sehat - Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="kotak">
        <h2>Kantin Sehat 1</h2>
        <h3>Login your account</h3>

        <form action="process.php" method="POST"y>        
            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" class="form-control"><br/>

            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="form-control"><br/>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>