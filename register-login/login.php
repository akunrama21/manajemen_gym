<?php
session_start(); // Mulai sesi untuk membaca pesan kesalahan
$error = isset($_SESSION['error']) ? $_SESSION['error'] : ''; // Ambil pesan kesalahan
unset($_SESSION['error']); // Hapus kesalahan setelah ditampilkan

include "connect.php";

$login_message = "";

// Cek apakah form login dikirim
if (isset($_POST["register"])) { // Ubah 'register' menjadi 'login'
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Query untuk memeriksa nama dan email
    $sql = "SELECT * FROM pelanggan WHERE Nama = '$nama' AND Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['email'] = $data['Email']; // Simpan email ke session
        $_SESSION['nama'] = $data['Nama']; // Simpan nama ke session
        header("Location: ../profil/index.php"); // Redirect ke halaman profil
        exit();
    } else {
        $login_message = "Nama/Email Anda belum terdaftar/salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">
</head>

<body id="top">
    <header class="header" data-header>
        <div class="container">
            <a href="../index.html" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>
                <span class="span" style="
    padding-left: 7px;
"> Singosari Fitness</span>
            </a>
            <nav class="navbar" data-navbar>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
                </button>

                <ul class="navbar-list">

                <li>
                    <a href="../index.html" class="navbar-link active" data-nav-link>Beranda</a>
                </li>

                <li>
                    <a href="../index.html#tentangkami" class="navbar-link" data-nav-link>Tentang Kami</a>
                </li>

                <li>
                    <a href="../index.html#program" class="navbar-link" data-nav-link>Program</a>
                </li>

                <li>
                    <a href="../index.html#trainer" class="navbar-link" data-nav-link>Trainer</a>
                </li>

                <li>
                    <a href="../index.html#hubungi" class="navbar-link" data-nav-link>Hubungi Kami</a>
                </li>

                </ul>

                </nav>
            <a href="reg_login/index.php" class="btn btn-secondary">DAFTAR / LOGIN</a>
            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
        </div>
    </header>

    <div class="container-content" id="login">
        <h1 class="form-title">Login</h1>
        <form method="post" action="login.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="nama" id="nama" placeholder="Nama" required>
                <label for="nama">Nama</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <?php if ($login_message): ?>
                <p style="color: red;"><?= $login_message ?></p>
            <?php endif; ?>
            <input type="submit" class="btn" value="Login" name="register">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p> Belum Mendaftar Akun?</p>
            <a href="register.php">
    <button id="signUpButton">Register</button>
</a>
        </div>
    </div>

    <script src="script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>