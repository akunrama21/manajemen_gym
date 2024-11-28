<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservasi Loker Gym</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

<body>
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
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




  <div class="loker">
    <h2>Reservasi Loker Gym</h2>

    <div class="form-group">
      <label for="name">Nama:</label>
      <input type="text" id="name" required />
    </div>

    <div class="form-group">
      <label for="date">Tanggal:</label>
      <input type="date" id="date" required />
    </div>

    <div class="form-group">
      <label for="startTime">Waktu Mulai:</label>
      <input type="time" id="startTime" required />
    </div>

    <div class="form-group">
      <label for="endTime">Waktu Selesai:</label>
      <input type="time" id="endTime" required />
    </div>
    <div class="locker-grid" id="lockerGrid">
      <!-- Loker akan diisi menggunakan JavaScript -->
    </div>
    <button id="reserveButton">Reservasi</button>
    <div class="message" id="message"></div>
  </div>

  <script>
    const lockerGrid = document.getElementById("lockerGrid");
    const message = document.getElementById("message");
    const reserveButton = document.getElementById("reserveButton");
    const totalLockers = 50; // Total loker

    // Membuat loker
    for (let i = 1; i <= totalLockers; i++) {
      const locker = document.createElement("div");
      locker.classList.add("locker");
      locker.textContent = `Loker ${i}`;
      locker.dataset.index = i; // Simpan index loker
      locker.dataset.reserved = "false"; // Status awal loker

      locker.addEventListener("click", function () {
        // Toggle pemilihan loker
        if (locker.classList.contains("reserved")) {
          message.textContent = "Loker ini sudah dipesan.";
        } else {
          // Batalkan semua loker yang dipilih
          const selectedLockers = document.querySelectorAll(".locker.selected");
          selectedLockers.forEach((selected) => {
            selected.classList.remove("selected");
            selected.dataset.reserved = "false";
          });
          // Tandai loker yang dipilih
          locker.classList.toggle("selected");
          locker.dataset.reserved = locker.classList.contains("selected") ? "true" : "false";
        }
      });

      lockerGrid.appendChild(locker);
    }

    // Menangani klik tombol reservasi
    reserveButton.addEventListener("click", function () {
      const name = document.getElementById("name").value.trim(); // Menghilangkan spasi di awal/akhir
      const date = document.getElementById("date").value;
      const startTime = document.getElementById("startTime").value;
      const endTime = document.getElementById("endTime").value;

      // Validasi input
      if (!name) {
        message.textContent = "Nama tidak boleh kosong.";
        return;
      }
      if (!date) {
        message.textContent = "Tanggal tidak boleh kosong.";
        return;
      }
      if (!startTime) {
        message.textContent = "Waktu mulai tidak boleh kosong.";
        return;
      }
      if (!endTime) {
        message.textContent = "Waktu selesai tidak boleh kosong.";
        return;
      }

      // Cek apakah ada loker yang dipilih
      const selectedLockers = document.querySelectorAll(".locker.selected");
      if (selectedLockers.length === 0) {
        message.textContent = "Silakan pilih loker terlebih dahulu.";
        return;
      }

      // Proses reservasi
      selectedLockers.forEach((locker) => {
        locker.classList.add("reserved");
        locker.classList.remove("selected");
        locker.dataset.reserved = "true";
      });

      message.textContent = `Reservasi berhasil untuk ${name} pada ${date} dari ${startTime} hingga ${endTime}.`;

      // Reset form
      document.getElementById("name").value = "";
      document.getElementById("date").value = "";
      document.getElementById("startTime").value = "";
      document.getElementById("endTime").value = "";
    });
  </script>



  <script src="script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>













</body>

</html>