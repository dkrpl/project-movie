<?php
session_start();

// Proses login
if (isset($_POST['login'])) {
    $user = trim($_POST['username']);
    $pass = $_POST['password'];

    // Validasi input
    if (empty($user) || empty($pass)) {
        $error = "Username dan password harus diisi!";
    } elseif ($user === "admin" && $pass === "123") {
        $_SESSION['username'] = $user;
        $_SESSION['logged_in'] = true;
        header("Location: index.php"); // Redirect ke dashboard
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>

<div class="login-container glass fade-in">
    <h2 class="title">LOGIN</h2>

    <?php if (isset($error)): ?>
        <div class="alert error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required class="search-glow" autocomplete="username">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required class="search-glow" autocomplete="current-password">
        </div>

        <button type="submit" name="login" class="btn-login shimmer">
            Masuk
        </button>
    </form>

    <div class="footer-text">
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
</div>

</body>
</html>