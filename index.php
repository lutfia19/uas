<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h2 class="logo">luthfiyah kusuma d(2211010074)</h2>
        <nav class="navigation">
            <button class="btnlogin-popup">Login</button>
        </nav>
    </header>
    <div class="container">
        <form action="login.php" method="post">
        <h2 class="login-heading">Sign-In</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="NPM">NPM</label>
            <span class="icon"><ion-icon name="NPM"></ion-icon></span>
            <input type="text" id="NPM" name="NPM" placeholder="Masukkan NPM" required>
            <label for="password">Password</label>
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <p>Buat akun baru? <a href="register.php">Daftar</a></p>
    </div>
</body>
</html>