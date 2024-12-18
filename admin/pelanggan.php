<?php
// Koneksi ke database

include "../service/database.php";

// Ambil data pelanggan
$query = "SELECT * FROM Pelanggan";
$result = mysqli_query($db, $query);
// Variabel untuk menyimpan pesan
$message = "";

// Proses tambah pelanggan
if (isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    // Cek apakah email sudah ada
    $checkEmailQuery = "SELECT * FROM Pelanggan WHERE Email='$email'";
    $checkResult = mysqli_query($db, $checkEmailQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $message = "Email sudah terdaftar. Silakan gunakan email lain.";
    } else {
        $query = "INSERT INTO Pelanggan (Nama, Email, Alamat, Nomor_Telepon) VALUES ('$nama', '$email', '$alamat', '$nomor_telepon')";
        mysqli_query($db, $query);
        $message = "Pelanggan berhasil ditambahkan.";
    }
}

// Proses edit pelanggan
if (isset($_POST['edit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $query = "UPDATE Pelanggan SET Nama='$nama', Alamat='$alamat', Nomor_Telepon='$nomor_telepon' WHERE Email='$email'";
    mysqli_query($db, $query);
}

// Proses hapus pelanggan
if (isset($_GET['delete'])) {
    $email = $_GET['delete'];

    // Hapus data terkait di tabel paket_langganan
    $queryDeletePaket = "DELETE FROM paket_langganan WHERE Email='$email'";
    mysqli_query($db, $queryDeletePaket);

    // Hapus pelanggan
    $query = "DELETE FROM Pelanggan WHERE Email='$email'";
    mysqli_query($db, $query);
}

// Ambil data pelanggan
$query = "SELECT * FROM Pelanggan";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Pelanggan</h1>

    <!-- Tampilkan pesan -->
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Form untuk menambah pelanggan -->
    <h2>Tambah Pelanggan</h2>
    <form method="POST" action="">
        <input type="text" name="nama" placeholder="Nama" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="text" name="alamat" placeholder="Alamat" required />
        <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" required />
        <button type="submit" name="add">Tambah</button>
    </form>

    <!-- Tabel untuk menampilkan data pelanggan -->
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Nomor_Telepon']; ?></td>
                <td>
                    <a href="pelanggan.php?edit=<?php echo $row['Email']; ?>">Edit</a>
                    <a href="pelanggan.php?delete=<?php echo $row['Email']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?');">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>