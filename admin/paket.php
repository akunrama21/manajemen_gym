<?php
include "../service/database.php";

// Variabel untuk menyimpan pesan
$message = "";

// Proses tambah paket
if (isset($_POST['add'])) {
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    $email = $_POST['email'];
    $id_program = $_POST['id_program'];
    $id_periode = $_POST['id_periode'];
    $id_trainer = $_POST['id_trainer'];

    $query = "INSERT INTO Paket_Langganan (Tanggal_Mulai, Tanggal_Berakhir, Email, ID_Program, ID_Periode, ID_Trainer) VALUES ('$tanggal_mulai', '$tanggal_berakhir', '$email', '$id_program', '$id_periode', '$id_trainer')";
    mysqli_query($db, $query);
    $message = "Paket berhasil ditambahkan.";
}

// Proses edit paket
if (isset($_POST['edit'])) {
    $id_paket = $_POST['id_paket'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    $email = $_POST['email'];
    $id_program = $_POST['id_program'];
    $id_periode = $_POST['id_periode'];
    $id_trainer = $_POST['id_trainer'];

    $query = "UPDATE Paket_Langganan SET Tanggal_Mulai='$tanggal_mulai', Tanggal_Berakhir='$tanggal_berakhir', Email='$email', ID_Program='$id_program', ID_Periode='$id_periode', ID_Trainer='$id_trainer' WHERE ID_Paket='$id_paket'";
    mysqli_query($db, $query);
    $message = "Paket berhasil diperbarui.";
}

// Proses hapus paket
if (isset($_GET['delete'])) {
    $id_paket = $_GET['delete'];
    $query = "DELETE FROM Paket_Langganan WHERE ID_Paket='$id_paket'";
    mysqli_query($db, $query);
    $message = "Paket berhasil dihapus.";
}

// Ambil data paket langganan
$query = "SELECT * FROM Paket_Langganan";
$result = mysqli_query($db, $query);

// Ambil data email dari tabel Pelanggan
$emailQuery = "SELECT Email FROM Pelanggan";
$emailResult = mysqli_query($db, $emailQuery);

// Ambil data program, periode, dan trainer
$programQuery = "SELECT * FROM Program";
$programResult = mysqli_query($db, $programQuery);

$periodeQuery = "SELECT * FROM Periode";
$periodeResult = mysqli_query($db, $periodeQuery);

$trainerQuery = "SELECT * FROM Trainer";
$trainerResult = mysqli_query($db, $trainerQuery);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Paket Langganan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Paket Langganan</h1>

    <!-- Tampilkan pesan -->
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Form untuk menambah paket -->
    <h2>Tambah Paket</h2>
    <form method="POST" action="">
        <input type="date" name="tanggal_mulai" placeholder="Tanggal Mulai" required />
        <input type="date" name="tanggal_berakhir" placeholder="Tanggal Berakhir" required />
        
        <!-- Dropdown untuk memilih email pelanggan -->
        <select name="email" required>
            <option value="">Pilih Email Pelanggan</option>
            <?php while ($emailRow = mysqli_fetch_assoc($emailResult)) { ?>
                <option value="<?php echo $emailRow['Email']; ?>"><?php echo $emailRow['Email']; ?></option>
            <?php } ?>
        </select>

        <!-- Dropdown untuk memilih program -->
        <select name="id_program" required>
            <option value="">Pilih Program</option>
            <?php while ($programRow = mysqli_fetch_assoc($programResult)) { ?>
                <option value="<?php echo $programRow['ID_Program']; ?>"><?php echo $programRow['Nama_Program']; ?></option>
            <?php } ?>
        </select>

        <!-- Dropdown untuk memilih periode -->
        <select name="id_periode" required>
            <option value="">Pilih Periode</option>
            <?php while ($periodeRow = mysqli_fetch_assoc($periodeResult)) { ?>
                <option value="<?php echo $periodeRow['ID_Periode']; ?>"><?php echo $periodeRow['Jenis_Periode']; ?></option>
            <?php } ?>
        </select>

        <!-- Dropdown untuk memilih trainer -->
        <select name="id_trainer" required>
            <option value="">Pilih Trainer</option>
            <?php while ($trainerRow = mysqli_fetch_assoc($trainerResult)) { ?>
                <option value="<?php echo $trainerRow['ID_Trainer']; ?>"><?php echo $trainerRow['Nama']; ?></option>
            <?php } ?>
        </select>

        <button type="submit" name="add">Tambah</button>
    </form>

    <!-- Tabel untuk menampilkan data paket langganan -->
    <table border="1">
        <tr>
            <th>ID Paket</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Berakhir</th>
            <th>Email</th>
            <th>Program</th>
            <th>Periode</th>
            <th>Trainer</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { 
            // Ambil nama program, periode, dan trainer berdasarkan ID
            $programNameQuery = "SELECT Nama_Program FROM Program WHERE ID_Program='" . $row['ID_Program'] . "'";
            $programNameResult = mysqli_query($db, $programNameQuery);
            $programName = mysqli_fetch_assoc($programNameResult)['Nama_Program'];

            $periodeNameQuery = "SELECT Jenis_Periode FROM Periode WHERE ID_Periode='" . $row['ID_Periode'] . "'";
            $periodeNameResult = mysqli_query($db, $periodeNameQuery);
            $periodeName = mysqli_fetch_assoc($periodeNameResult)['Jenis_Periode'];

            $trainerNameQuery = "SELECT Nama FROM Trainer WHERE ID_Trainer='" . $row['ID_Trainer'] . "'";
            $trainerNameResult = mysqli_query($db, $trainerNameQuery);
            $trainerName = mysqli_fetch_assoc($trainerNameResult)['Nama'];
        ?>
            <tr>
                <td><?php echo $row['ID_Paket']; ?></td>
                <td><?php echo $row['Tanggal_Mulai']; ?></td>
                <td><?php echo $row['Tanggal_Berakhir']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $programName; ?></td>
                <td><?php echo $periodeName; ?></td>
                <td><?php echo $trainerName; ?></td>
                <td>
                    <a href="paket.php?edit=<?php echo $row['ID_Paket']; ?>">Edit</a>
                    <a href="paket.php?delete=<?php echo $row['ID_Paket']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?');">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <!-- Form untuk mengedit paket -->
    <?php if (isset($_GET['edit'])): 
        $id_paket = $_GET['edit'];
        $query = "SELECT * FROM Paket_Langganan WHERE ID_Paket='$id_paket'";
        $edit_result = mysqli_query($db, $query);
        $edit_row = mysqli_fetch_assoc($edit_result);
    ?>
        <h2>Edit Paket</h2>
        <form method="POST" action="">
            <input type="hidden" name="id_paket" value="<?php echo $edit_row['ID_Paket']; ?>" />
            <input type="date" name="tanggal_mulai" value="<?php echo $edit_row['Tanggal_Mulai']; ?>" required />
            <input type="date" name="tanggal_berakhir" value="<?php echo $edit_row['Tanggal_Berakhir']; ?>" required />
            
            <!-- Dropdown untuk memilih email pelanggan -->
            <select name="email" required>
                <option value="">Pilih Email Pelanggan</option>
                <?php 
                // Ambil data email dari tabel Pelanggan untuk dropdown
                $emailQuery = "SELECT Email FROM Pelanggan";
                $emailResult = mysqli_query($db, $emailQuery);
                while ($emailRow = mysqli_fetch_assoc($emailResult)) { 
                    // Perbaiki spasi di sini
                    $selected = ($emailRow['Email'] == $edit_row['Email']) ? 'selected' : '';
                ?>
                    <option value="<?php echo $emailRow['Email']; ?>" <?php echo $selected; ?>><?php echo $emailRow['Email']; ?></option>
                <?php } ?>
            </select>

            <!-- Dropdown untuk memilih program -->
            <select name="id_program" required>
                <option value="">Pilih Program</option>
                <?php 
                // Ambil data program untuk dropdown
                $programQuery = "SELECT * FROM Program";
                $programResult = mysqli_query($db, $programQuery);
                while ($programRow = mysqli_fetch_assoc($programResult)) { 
                    $selected = ($programRow['ID_Program'] == $edit_row['ID_Program']) ? 'selected' : '';
                ?>
                    <option value="<?php echo $programRow['ID_Program']; ?>" <?php echo $selected; ?>><?php echo $programRow['Nama_Program']; ?></option>
                <?php } ?>
            </select>

            <!-- Dropdown untuk memilih periode -->
            <select name="id_periode" required>
                <option value="">Pilih Periode</option>
                <?php 
                // Ambil data periode untuk dropdown
                $periodeQuery = "SELECT * FROM Periode";
                $periodeResult = mysqli_query($db, $periodeQuery);
                while ($periodeRow = mysqli_fetch_assoc($periodeResult)) { 
                    $selected = ($periodeRow['ID_Periode'] == $edit_row['ID_Periode']) ? 'selected' : '';
                ?>
                    <option value="<?php echo $periodeRow['ID_Periode']; ?>" <?php echo $selected; ?>><?php echo $periodeRow['Jenis_Periode']; ?></option>
                <?php } ?>
            </select>

            <!-- Dropdown untuk memilih trainer -->
            <select name="id_trainer" required>
                <option value="">Pilih Trainer</option>
                <?php 
                // Ambil data trainer untuk dropdown
                $trainerQuery = "SELECT * FROM Trainer";
                $trainerResult = mysqli_query($db, $trainerQuery);
                while ($trainerRow = mysqli_fetch_assoc($trainerResult)) { 
                    $selected = ($trainerRow['ID_Trainer'] == $edit_row['ID_Trainer']) ? 'selected' : '';
                ?>
                    <option value="<?php echo $trainerRow['ID_Trainer']; ?>" <?php echo $selected; ?>><?php echo $trainerRow['Nama']; ?></option>
                <?php } ?>
            </select>

            <button type="submit" name="edit">Perbarui</button>
        </form>
    <?php endif; ?>

    <a href="admin.php">Kembali ke Halaman Admin</a>
</body>
</html>