<?php
include "../service/database.php";

// Variabel untuk menyimpan pesan
$message = "";

// Proses tambah loker
if (isset($_POST['add'])) {
    $status = $_POST['status'];
    $durasi_penggunaan = $_POST['durasi_penggunaan'];
    $email = $_POST['email'];

    $query = "INSERT INTO loker (Status, Durasi_Penggunaan, Email) VALUES ('$status', '$durasi_penggunaan', '$email')";
    mysqli_query($db, $query);
    $message = "Loker berhasil ditambahkan.";
}

// Proses edit loker
if (isset($_POST['edit'])) {
    $id_loker = $_POST['id_loker'];
    $status = $_POST['status'];
    $durasi_penggunaan = $_POST['durasi_penggunaan'];
    $email = $_POST['email'];

    $query = "UPDATE loker SET Status='$status', Durasi_Penggunaan='$durasi_penggunaan', Email='$email' WHERE ID_Loker='$id_loker'";
    mysqli_query($db, $query);
    $message = "Loker berhasil diperbarui.";
}

// Proses hapus loker
if (isset($_GET['delete'])) {
    $id_loker = $_GET['delete'];
    $query = "DELETE FROM loker WHERE ID_Loker='$id_loker'";
    mysqli_query($db, $query);
    $message = "Loker berhasil dihapus.";
}

// Ambil data loker
$query = "SELECT * FROM loker";
$result = mysqli_query($db, $query);

// Ambil data email dan nama dari tabel Pelanggan
$emailQuery = "SELECT Email, Nama FROM Pelanggan";
$emailResult = mysqli_query($db, $emailQuery);
$emailList = [];
while ($row = mysqli_fetch_assoc($emailResult)) {
    $emailList[$row['Email']] = $row['Nama'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Loker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Loker</h1>

    <!-- Tampilkan pesan -->
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Form untuk menambah loker -->
    <h2>Tambah Loker</h2>
    <form method="POST" action="">
        <input type="text" name="status" placeholder="Status" required />
        <input type="text" name="durasi_penggunaan" placeholder="Durasi Penggunaan" required />
        
        <!-- Dropdown untuk memilih email pelanggan -->
        <select name="email" required>
            <option value="">Pilih Email Pelanggan</option>
            <?php foreach ($emailList as $email => $nama): ?>
                <option value="<?php echo $email; ?>"><?php echo $nama; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit" name="add">Tambah</button>
    </form>

    <!-- Tabel untuk menampilkan data loker -->
    <table border="1">
        <tr>
            <th>ID Loker</th>
            <th>Status</th>
            <th>Durasi Penggunaan</th>
            <th>Email</th>
            <th>Nama Pengguna</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { 
            // Ambil nama pengguna berdasarkan email
            $namaPengguna = isset($emailList[$row['Email']]) ? $emailList[$row['Email']] : 'Tidak Diketahui';
        ?>
            <tr>
                <td><?php echo $row['ID_Loker']; ?></td>
                <td><?php echo $row['Status']; ?></td>
                <td><?php echo $row['Durasi_Penggunaan']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $namaPengguna; ?></td>
                <td>
                    <a href="loker.php?edit=<?php echo $row['ID_Loker']; ?>">Edit</a>
                    <a href="loker.php? delete=<?php echo $row['ID_Loker']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus loker ini?');">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <!-- Form untuk mengedit loker -->
    <?php if (isset($_GET['edit'])): 
        $id_loker = $_GET['edit'];
        $editQuery = "SELECT * FROM loker WHERE ID_Loker='$id_loker'";
        $editResult = mysqli_query($db, $editQuery);
        $editRow = mysqli_fetch_assoc($editResult);
    ?>
        <h2>Edit Loker</h2>
        <form method="POST" action="">
            <input type="hidden" name="id_loker" value="<?php echo $editRow['ID_Loker']; ?>" />
            <input type="text" name="status" value="<?php echo $editRow['Status']; ?>" required />
            <input type="text" name="durasi_penggunaan" value="<?php echo $editRow['Durasi_Penggunaan']; ?>" required />
            
            <!-- Dropdown untuk memilih email pelanggan -->
            <select name="email" required>
                <option value="">Pilih Email Pelanggan</option>
                <?php foreach ($emailList as $email => $nama): ?>
                    <option value="<?php echo $email; ?>" <?php echo ($email == $editRow['Email']) ? 'selected' : ''; ?>><?php echo $nama; ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit" name="edit">Perbarui</button>
        </form>
    <?php endif; ?>

    <a href="admin.php">Kembali ke Halaman Admin</a>
</body>
</html>