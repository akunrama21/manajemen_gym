<?php
session_start(); // Mulai sesi
include "connect.php"; // Pastikan Anda menghubungkan ke database

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
  header("Location: ../login.php"); // Redirect ke halaman login jika belum login
  exit();
}

// Ambil email dari sesi
$email = $_SESSION['email'];

// Query untuk mengambil data pelanggan dan program
$sql = "
SELECT 
    p.Nama AS Nama_Pelanggan,
    pr.Nama_Program,
    pe.Jenis_Periode,
    t.Nama AS Nama_Trainer,
    pl.Tanggal_Mulai,
    pl.Tanggal_Berakhir,
    CASE 
        WHEN pl.Tanggal_Berakhir >= CURDATE() THEN 'Aktif'
        ELSE 'Tidak Aktif'
    END AS Status_Member
FROM 
    Pelanggan p
JOIN 
    Paket_Langganan pl ON p.Email = pl.Email
JOIN 
    Program pr ON pl.ID_Program = pr.ID_Program
JOIN 
    Periode pe ON pl.ID_Periode = pe.ID_Periode
JOIN 
    Trainer t ON pl.ID_Trainer = t.ID_Trainer
WHERE 
    p.Email = '$email';"; // Pastikan untuk menggunakan prepared statements untuk keamanan

$result = $conn->query($sql);

// Ambil nama dari sesi
$nama = $_SESSION['nama'];
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


<id="top">
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
  <div class="judul">PROFIL PENGGUNA</div>

  <!-- Box Kiri -->
  <div class="box box-dark">
    <?php
    // Ambil satu baris data dari hasil query
    $row = $result->fetch_assoc();

    // Cek apakah $row tidak kosong
    if ($row) {
      ?>
      <span class="title">Nama</span> 
<span style="position: relative;
    top: -32px;
    font-size: 19px;"><?php echo htmlspecialchars($nama); ?></span><br>

<span class="title">Program</span> 
<span style="position: relative;
    top: -32px;
    font-size: 19px;"><?php echo htmlspecialchars($row["Nama_Program"]); ?></span><br>

<span class="title">Paket Langganan</span> 
<span style="position: relative;
    top: -32px;
    font-size: 19px;"><?php echo htmlspecialchars($row["Jenis_Periode"]); ?></span><br>

<span class="title">Trainer</span> 
<span style="position: relative;
    top: -32px;
    font-size: 19px;"><?php echo htmlspecialchars($row["Nama_Trainer"]); ?></span><br>
    <?php
    } else {
      echo "Tidak ada data ditemukan.";
    }
    ?>
  </div>

  <!-- Container untuk box status member dan periode langganan -->
  <div class="container-bottom">
    <!-- Box Status Member -->
    <div class="box box-light box-status">
      <div class="title">Status Member</div>
      <div class="status"><?php echo isset($row) ? htmlspecialchars($row["Status_Member"]) : 'Tidak ada data'; ?></div>
    </div>

    <!-- Box Periode Langganan -->
    <div class="box box-light box-period">
      <div class="title">Periode Langganan</div>
      <p>
        <?php 
        echo isset($row) ? htmlspecialchars($row["Tanggal_Mulai"]) : 'Tidak ada data'; ?> sampai 
        <?php echo isset($row) ? htmlspecialchars($row["Tanggal_Berakhir"]) : 'Tidak ada data'; ?>
      </p>
    </div>
  </div>
</div>


  </div>
  <a href="../tes reservasi/tes reservasi.php" class="reserveButton">Reservasi</a>



  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>