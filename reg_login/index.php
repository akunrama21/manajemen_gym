<?php
session_start(); // Mulai session untuk membaca pesan error
$error = isset($_SESSION['error']) ? $_SESSION['error'] : ''; // Ambil pesan error
unset($_SESSION['error']); // Hapus pesan setelah ditampilkan
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
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet">
</head>


<body id="top">





  <header class="header" data-header>
    <div class="container">

      <a href="../index.html" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span"> Singosari Fitness</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link active" data-nav-link>Beranda</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>Tentang Kami</a>
          </li>

          <li>
            <a href="#class" class="navbar-link" data-nav-link>Kelas</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>Hubungi Kami</a>
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








































































  <div class="container-content" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="nama" id="nama" placeholder="Nama" required>
        <label for="nama">Nama</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="alamat" id="alamat" placeholder="Alamat" required>
        <label for="alamat">Alamat</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-phone"></i>
        <input type="text" name="telepon" id="telepon" placeholder="Nomer Telepon" required>
        <label for="telepon">Nomer Telepon</label>
      </div>
      <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
      <?php endif; ?>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Sudah Punya Akun? ?</p>
      <button id="signInButton">Login</button>
    </div>
  </div>

  <div class="container-content" id="signIn">
    <h1 class="form-title">Login</h1>
    <form method="post" action="register.php">
    <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="text" name="nama" id="password" placeholder="nama" required>
        <label for="nama">Nama</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="" required>
        <label for="email">Email</label>
      </div>

      <?php if ($error): ?>
        <p style="color: red;"><?= $error ?></p>
      <?php endif; ?>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Belum Punya Akun?</p>
      <button id="signUpButton">Register</button>
    </div>
  </div>




  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>