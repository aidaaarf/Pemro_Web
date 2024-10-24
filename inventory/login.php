<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

include 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Menggunakan prepared statement dengan PDO dan menghindari SQL Injection
    $stmt = $conn->prepare("SELECT * FROM [user] WHERE username = ?");
    $stmt->execute([$username]);

    // Ambil data pengguna
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Cek apakah ada hasil (fetch() mengembalikan false jika tidak ada hasil)
    if ($row) {
        // Verifikasi password
        if (password_verify($password, $row["password"])) {
            // Set sesi login
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }
    // Jika gagal login
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>

    <!-- Pesan kesalahan jika username atau password salah -->
    <?php if (isset($error)) : ?>
        <p style="color: red;">Username atau password salah</p>
    <?php endif; ?>

    <div class="login-box">
        <h1 class="login-title">Inventory Aida Shop</h1>
        <h3 class="auth-title">Login</h3>
        <form action="" method="POST" autocomplete="off">
            <div class="form-group-register">
                <label for="username">Username</label>
                <input type="text" class="input-register-text" name="username" 
                placeholder="Masukan Username Anda" autocomplete="new-username" required />
            </div>
            <div class="form-group-register">
                <label for="password">Password</label>
                <input type="password" class="input-register-text" name="password" 
                placeholder="Masukan Password Anda" autocomplete="new-password" required />
            </div>
            <button class="btn-auth" type="submit" name="login">
                Login
            </button>
        </form>
        <div style="margin-top: 25px; text-align:center;">
            <p>Belum punya akun? <a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>
