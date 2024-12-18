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
    <link rel="preload" as="image" href="../assets/images/hero-banner.png">
    <link rel="preload" as="image" href="../assets/images/hero-circle-one.png">
    <link rel="preload" as="image" href="../assets/images/hero-circle-two.png">
    <link rel="preload" as="image" href="../assets/images/heart-rate.svg">
    <link rel="preload" as="image" href="../assets/images/calories.svg">
    <style>
        /* Hide radio buttons */
        input[type="radio"] {
            display: none;
        }

        /* Style the labels to look like buttons */
        label {
            display: block;
            padding: 10px;
            margin: 5px 0;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        label:hover {
            background-color: #e0e0e0;
        }

        input[type="radio"]:checked + label {
            background-color: var(--coquelicot);
            color: white;
            border-color: var(--coquelicot);
        }
    </style>
</head>

<body id="top">
    <header class="header" data-header>
        <div class="container">
            <a href="#" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>
                <span class="span" style="padding-left: 7px;"> Singosari Fitness</span>
            </a>
            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
                </button>
                <ul class="navbar-list">
                    <li><a href="#home" class="navbar-link active" data-nav-link>Beranda</a></li>
                    < li><a href="#about" class="navbar-link" data-nav-link>Tentang Kami</a></li>
                    <li><a href="#class" class="navbar-link" data-nav-link>Kelas</a></li>
                    <li><a href="#blog" class="navbar-link" data-nav-link>Blog</a></li>
                    <li><a href="#" class="navbar-link" data-nav-link>Hubungi Kami</a></li>
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

    <form action="" method="POST">
        <section class="section class bg-dark has-bg-image" id="class" aria-label="class" style="background-image: url('./assets/images/classes-bg.png')">
            <div class="container">
                <p class="section-subtitle">Kelas</p>
                <h2 class="h2 section-title text-center">Silahkan Pilih Program</h2>
                <ul class="class-list has-scrollbar">
                    <!-- Program Angkat Beban -->
                    <li class="scrollbar-item">
                        <input type="radio" name="class" value="Angkat Beban" id="class1" hidden>
                        <label class="class-card" for="class1">
                            <figure class="-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="./assets/images/Strenght.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3 card-title">Angkat Beban</h3>
                                </div>
                                <p class="card-text">Latihan angkat beban yang fokus pada peningkatan kekuatan dan massa otot.</p>
                            </div>
                        </label>
                    </li>

                    <!-- Program Cardio -->
                    <li class="scrollbar-item">
                        <input type="radio" name="class" value="Cardio" id="class2" hidden>
                        <label class="class-card" for="class2">
                            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="./assets/images/cardio.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strength" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3 card-title">Cardio</h3>
                                </div>
                                <p class="card-text">Latihan kardiovaskular yang meningkatkan kesehatan jantung dan paru-paru.</p>
                            </div>
                        </label>
                    </li>

                    <!-- Program Aesthetic -->
                    <li class="scrollbar-item">
                        <input type="radio" name="class" value="Aest hetic" id="class3" hidden>
                        <label class="class-card" for="class3">
                            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="./assets/images/Aesthetic.jpg" width="416" height="240" loading="lazy" alt="Aesthetic" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3 card-title">Aesthetic</h3>
                                </div>
                                <p class="card-text">Latihan yang berfokus pada penampilan fisik dan proporsi tubuh.</p>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
        </section>

        <section class="langganan">
            <div class="title">Silahkan Pilih Periode Langganan</div>
            <div class="isi">
                <!-- Program Harian -->
                <div class="box" id="daily-box">
                    <input type="radio" name="subscription" value="Harian" id="daily" hidden>
                    <label for="daily" class="subscription-card">
                        <h3>HARIAN</h3>
                        <p><span class="price">Rp20.000,00 </span></p>
                    </label>
                </div>

                <!-- Program Bulanan -->
                <div class="box" id="monthly-box">
                    <input type="radio" name="subscription" value="Bulanan" id="monthly" hidden>
                    <label for="monthly" class="subscription-card">
                        <h3>BULANAN</h3>
                        <p><span class="price">Rp120.000,00</span></p>
                    </label>
                </div>

                <!-- Program Tahunan -->
                <div class="box" id="yearly-box">
                    <input type="radio" name="subscription" value="Tahunan" id="yearly" hidden>
                    <label for="yearly" class="subscription-card">
                        <h3>TAHUNAN</h3>
                        <p><span class="price">Rp1.120.000,00</span></p>
                    </label>
                </div>
            </div>
        </section>

        <section class="section class bg-dark has-bg-image" id="trainer" aria-label="trainer" style="background-image: url('./assets/images/classes-bg.png')">
            <div class="container">
                <p class="section-subtitle">Trainer</p>
                <h2 class="h2 section-title text-center">Silahkan Pilih Trainer</h2>
                <ul class="class-list has-scrollbar">
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer1.jpg" width="416" height="240" loading="lazy" alt="Trainer 1" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 1</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Angkat Beban</p>
                                <input type="radio" name="trainer" value="Trainer 1" id="trainer1" required>
                                <label for="trainer1">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer2.jpg" width="416" height="240" loading="lazy" alt="Trainer 2" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 2</a></h3>
                                </ ```html
                                </div>
                                <p class="card-text">Trainer Program Angkat Beban</p>
                                <input type="radio" name="trainer" value="Trainer 2" id="trainer2" required>
                                <label for="trainer2">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer3.jpg" width="416" height="240" loading="lazy" alt="Trainer 3" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 3</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Kardio</p>
                                <input type="radio" name="trainer" value="Trainer 3" id="trainer3" required>
                                <label for="trainer3">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer4.jpg" width="416" height="240" loading="lazy" alt="Trainer 4" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 4</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Kardio</p>
                                <input type="radio" name="trainer" value="Trainer 4" id="trainer4" required>
                                <label for="trainer4">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer55.jpg" width="416" height="240" loading="lazy" alt="Trainer 5" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 5</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Aesthetic</p>
                                <input type="radio" name="trainer" value="Trainer 5" id="trainer5" required>
                                <label for="trainer5">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                    <li class="scrollbar-item">
                        <div class="class-card">
                            <figure class="card-banner img-holder" style="--width: 160; --height: 240;">
                                <img src="./assets/images/trainer66.jpg" width="416" height="240" loading="lazy" alt="Trainer 6" class="img-cover">
                            </figure>
                            <div class="card-content">
                                <div class="title-wrapper">
                                    <img src="../assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">
                                    <h3 class="h3"><a href="#" class="card-title">Trainer 6</a></h3>
                                </div>
                                <p class="card-text">Trainer Program Aesthetic</p>
                                <input type="radio" name="trainer" value="Trainer 6" id="trainer6" required>
                                <label for="trainer6">Pilih Trainer</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <button type="submit" name="confirm-button" class="pay-button">Kon firmasi Pembayaran</button>
    </form>

    <script src="./assets/js/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

<?php
include "../service/database.php"; // Pastikan path ini benar

session_start(); // Pastikan session dimulai

// Ambil email dari session
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;

// Ambil data program, periode, dan trainer dari database
$programQuery = "SELECT * FROM Program";
$programResult = mysqli_query($db, $programQuery);

$periodeQuery = "SELECT * FROM Periode";
$periodeResult = mysqli_query($db, $periodeQuery);

$trainerQuery = "SELECT * FROM Trainer";
$trainerResult = mysqli_query($db, $trainerQuery);

if (isset($_POST["confirm-button"])) {
    $tanggal_mulai = date("Y-m-d"); // Format YYYY-MM-DD
    // Mengatur tanggal berakhir, misalnya 30 hari dari tanggal mulai
    $tanggal_berakhir = date("Y-m-d", strtotime("+30 days")); // 30 hari dari tanggal mulai

    // Ambil ID dari form
    $id_program = $_POST["class"];
    $id_periode = $_POST["subscription"];
    $id_trainer = $_POST["trainer"];

    // Pastikan ID yang diambil valid
    if (empty($id_program) || empty($id_periode) || empty($id_trainer) || empty($email)) {
        echo "Semua pilihan harus dipilih.";
        exit();
    }

    // Query untuk memasukkan data ke tabel paket_langganan
    $sqlPaket = "INSERT INTO Paket_Langganan (Tanggal_Mulai, Tanggal_Berakhir, Email, ID_Program, ID_Periode, ID_Trainer) 
                 VALUES ('$tanggal_mulai', '$tanggal_berakhir', '$email', $id_program, $id_periode, $id_trainer)";

    // Eksekusi query
    if ($db->query($sqlPaket) === TRUE) {
        // Simpan data ke session untuk digunakan di halaman pesanan
        $_SESSION['tanggal_mulai'] = $tanggal_mulai;
        $_SESSION['tanggal_berakhir'] = $tanggal_berakhir;
        $_SESSION['id_program'] = $id_program;
        $_SESSION['id_periode'] = $id_periode;
        $_SESSION['id_trainer'] = $id_trainer;

        // Jika berhasil, arahkan ke halaman pesanan.php
        header("Location: /UAS_DB/manajemen_gym_faiz/pesanan/pesanan.php");
        exit();
    } else {
        echo "Gagal menambahkan paket langganan: " . $db->error;
    }
}
?>