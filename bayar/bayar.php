<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bayar_style.css">
</head>
<body>

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
                <li><a href="#home" class="navbar-link active" data-nav-link>Beranda</a></li>
                <li><a href="#about" class="navbar-link" data-nav-link>Tentang Kami</a></li>
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

<div class="content-container">
    <section class="payment-confirmation">
        <h1>Konfirmasi Pembayaran</h1>
        
        <?php
session_start();
include "../service/database.php"; // Pastikan path ini benar

// Ambil email dari session
$email = $_SESSION['email']; // Ganti dengan nama session yang sesuai

$sql = "
SELECT 
    pl.Tanggal_Mulai,
    pl.Tanggal_Berakhir,
    pr.Nama_Program,
    pe.Jenis_Periode,
    pe.Harga AS Harga_Periode,
    pl.Email,
    CASE 
        WHEN pl.Tanggal_Berakhir >= CURDATE() THEN 'Aktif'
        ELSE 'Tidak Aktif'
    END AS Status_Member
FROM 
    Paket_Langganan pl
JOIN 
    Program pr ON pl.ID_Program = pr.ID_Program
JOIN 
    Periode pe ON pl.ID_Periode = pe.ID_Periode
WHERE 
    pl.Email = '$email';"; // Pastikan untuk menggunakan prepared statements untuk keamanan

$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "<div class='details'>";
        echo "<div class='row'><strong>Nama Program:</strong> " . htmlspecialchars($row["Nama_Program"]) . "</div>";
        echo "<div class='row'><strong>Jenis Periode:</strong> " . htmlspecialchars($row["Jenis_Periode"]) . "</div>";
        echo "<div class='row'><strong>Tanggal Mulai:</strong> " . htmlspecialchars($row["Tanggal_Mulai"]) . "</div>";
        echo "<div class='row'><strong>Tanggal Berakhir:</strong> " . htmlspecialchars($row["Tanggal_Berakhir"]) . "</div>";
        echo "<div class='row'><strong>Harga:</strong> Rp" . number_format($row["Harga_Periode"], 2, ',', '.') . "</div>";
        echo "<div class='row'><strong>Status Member:</strong> " . htmlspecialchars($row["Status_Member"]) . "</div>";
        echo "</div>";
    }
} else {
    echo "<div class='details'><p>Tidak ada data ditemukan.</p></div>";
}
?>

<form method="post" action="">
    <button type="submit" name="bayar" class="btn btn-primary">Bayar</button>
</form>

<?php
if (isset($_POST['bayar'])) {
    // Eksekusi query untuk menambahkan transaksi
    $sqlTransaksi = "
    INSERT INTO Transaksi (Email, Tanggal_Transaksi, Total_Harga) 
    VALUES ('$email', NOW(), 
    (SELECT SUM(pe.Harga) FROM Paket_Langganan pl 
    JOIN Periode pe ON pl.ID_Periode = pe.ID_Periode 
    WHERE pl.Email = '$email'))";

    if ($db->query($sqlTransaksi) === TRUE) {
        // Arahkan ke halaman pembayaran QRIS
        header("Location: ../qris/qris.html");
        exit();
    } else {
        echo "Gagal menambahkan transaksi: " . $db->error;
    }
}
?>
    </section>
</div>

<script src="script.js" defer></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>