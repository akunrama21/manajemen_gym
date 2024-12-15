<?php
session_start();
include("connect.php");

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

  <div class="body-isi">
    <div class="judul">Profil</div>
    <div class="container-content">
      <!-- Box Kiri -->
      <div class="box box-dark">
        <span class="title">Nama</span> <span>
          <?php
          if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
            while ($row = mysqli_fetch_array($query)) {
              echo $row['firstName'] . ' ' . $row['lastName'];
            }
          }
          ?>
        </span>



        <span class="title">ID</span> <span>12345</span>
        <span class="title">Program</span> <span>Angkat Beban</span>
        <span class="title">Paket Langganan</span> <span>Bulanan</span>
        <span class="title">Trainer</span> <span>Trainer A</span>
        <span class="title">Status Member</span> <span>Aktif</span>
      </div>

      <!-- Box Kanan -->
      <div class="box box-light">
        <div class="title">Status Member</div>
        <div class="status">Aktif</div>
        <p>Periode Langganan</p>
        <p>14 November 2024 - 14 Desember 2024</p>
      </div>
    </div>
    <!-- box bawah -->



  </div>
  <a href="../tes reservasi/tes reservasi.php" class="reserveButton">Reservasi</a>



  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>


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

  <div class="body-isi">
    <div class="judul">Profil</div>
    <div class="container-content">
      <!-- Box Kiri -->
      <div class="box box-dark">
      <span class="title">Nama</span> 
<span>
    <?php

session_start();
include("connect.php");



    if (isset($_SESSION['email'])) {
      
        $email = $_SESSION['email'];

        // Query untuk mengambil nama berdasarkan email
        $sql = "SELECT nama FROM pelanggan WHERE Email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            // Tampilkan hanya nama
            echo $data['nama'];
        } else {
            echo "Nama tidak ditemukan.";
        }
    } else {
        echo "Anda belum login.";
    }
    ?>
</span>



        <span class="title">ID</span> <span>12345</span>
        <span class="title">Program</span> <span>Angkat Beban</span>
        <span class="title">Paket Langganan</span> <span>Bulanan</span>
        <span class="title">Trainer</span> <span>Trainer A</span>
        <span class="title">Status Member</span> <span>Aktif</span>
      </div>

      <!-- Box Kanan -->
      <div class="box box-light">
        <div class="title">Status Member</div>
        <div class="status">Aktif</div>
        <p>Periode Langganan</p>
        <p>14 November 2024 - 14 Desember 2024</p>
      </div>
    </div>
    <!-- box bawah -->



  </div>
  <a href="../tes reservasi/tes reservasi.php" class="reserveButton">Reservasi</a>



  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>