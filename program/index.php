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
  <link rel="preload" as="image" href="../assets/images/hero-banner.png">
  <link rel="preload" as="image" href="../assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="../assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="../assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="../assets/images/calories.svg">

</head>


<body id="top">
  <!-- <header class="header" data-header>
    <div class="container1">

      <a href="#" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span"> Singosari Fitness</span>
      </a>

  </header> -->




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









  <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
    style="background-image: url('./assets/images/classes-bg.png')">
    <div class="container">

      <p class="section-subtitle">Kelas</p>

      <h2 class="h2 section-title text-center">Temukan kelas favoritmu dan rasakan semangat baru setiap sesi</h2>

      <ul class="class-list has-scrollbar">

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="../assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Angkat Beban</a>
                </h3>
              </div>

              <p class="card-text">
                Latihan angkat beban yang fokus pada peningkatan kekuatan otot melalui pengangkatan beban berat. Terdiri
                dari powerlifting dan Olympic weightlifting, bertujuan untuk membangun massa otot dan kekuatan maksimal.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">
                  <p class="progress-label">Kelas Tersedia</p>

                  <span class="progress-value">85%</span>
                </div>

                <div class="progress-bg">
                  <div class="progress-bar" style="width: 85%"></div>
                </div>

              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="../assets/images/class-2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="../assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Cardio</a>
                </h3>
              </div>

              <p class="card-text">
                Latihan kardiovaskular yang meningkatkan kesehatan jantung dan paru-paru. Contohnya termasuk lari,
                bersepeda, dan aerobik, dengan fokus pada pembakaran kalori dan peningkatan daya tahan tubuh.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">
                  <p class="progress-label">Kelas Tersedia</p>

                  <span class="progress-value">70%</span>
                </div>

                <div class="progress-bg">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>

              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="../assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="../assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Aesthetic</a>
                </h3>
              </div>

              <p class="card-text">
                Latihan yang berfokus pada penampilan fisik dan proporsi tubuh. Termasuk bodybuilding dan latihan
                fungsional, bertujuan untuk membentuk otot agar terlihat lebih simetris dan menarik secara visual.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">
                  <p class="progress-label">Kelas Tersedia</p>

                  <span class="progress-value">90%</span>
                </div>

                <div class="progress-bg">
                  <div class="progress-bar" style="width: 90%"></div>
                </div>

              </div>

            </div>

          </div>
        </li>
      </ul>
    </div>
  </section>



















  <section class="langganan">
    <div class="title">PERIODE LANGGANAN</div>
    <div class="isi">
      <div class="box">
        <h3>HARIAN</h3>
        <p>Weekdays: <span class="price">Rp20.000,00</span></p>
        <p>Weekend: <span class="price">Rp25.000,00</span></p>
      </div>
      <div class="box">
        <h3>BULANAN</h3>
        <p class="special">Spesial!!</p>
        <p><span class="price">Rp120.000,00</span></p>
      </div>
    </div>
  </section>





 <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
    style="background-image: url('./assets/images/classes-bg.png')">
    <div class="container">

      <p class="section-subtitle">Kelas</p>

      <h2 class="h2 section-title text-center">Temukan kelas favoritmu dan rasakan semangat baru setiap sesi</h2>

      <ul class="class-list has-scrollbar">

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="../assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="../assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Angkat Beban</a>
                </h3>
              </div>

              <p class="card-text">
                Latihan angkat beban yang fokus pada peningkatan kekuatan otot melalui pengangkatan beban berat. Terdiri
                dari powerlifting dan Olympic weightlifting, bertujuan untuk membangun massa otot dan kekuatan maksimal.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">
                  <p class="progress-label">Kelas Tersedia</p>

                  <span class="progress-value">85%</span>
                </div>

                <div class="progress-bg">
                  <div class="progress-bar" style="width: 85%"></div>
                </div>

              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="../assets/images/class-2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="../assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Cardio</a>
                </h3>
              </div>

              <p class="card-text">
                Latihan kardiovaskular yang meningkatkan kesehatan jantung dan paru-paru. Contohnya termasuk lari,
                bersepeda, dan aerobik, dengan fokus pada pembakaran kalori dan peningkatan daya tahan tubuh.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">
                  <p class="progress-label">Kelas Tersedia</p>

                  <span class="progress-value">70%</span>
                </div>

                <div class="progress-bg">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>

              </div>

            </div>

          </div>
        </li>

        <li class="scrollbar-item">
          <div class="class-card">

            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
              <img src="../assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                class="img-cover">
            </figure>

            <div class="card-content">

              <div class="title-wrapper">
                <img src="../assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                  class="title-icon">

                <h3 class="h3">
                  <a href="#" class="card-title">Aesthetic</a>
                </h3>
              </div>

              <p class="card-text">
                Latihan yang berfokus pada penampilan fisik dan proporsi tubuh. Termasuk bodybuilding dan latihan
                fungsional, bertujuan untuk membentuk otot agar terlihat lebih simetris dan menarik secara visual.
              </p>

              <div class="card-progress">

                <div class="progress-wrapper">
                  <p class="progress-label">Kelas Tersedia</p>

                  <span class="progress-value">90%</span>
                </div>

                <div class="progress-bg">
                  <div class="progress-bar" style="width: 90%"></div>
                </div>

              </div>

            </div>

          </div>
        </li>

        <!-- <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">The Fitness Pack</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">60%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 60%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li> -->

      </ul>

    </div>
  </section>










  <div class="content-container">
       

       <section class="payment-confirmation">
           <h1>Konfirmasi Pembayaran</h1>
           <form>
               <div class="details">
                   <div class="row">
                       <label for="program" class="label">Program</label>
                       <select id="program" class="dropdown">
                           <option value="angkat-beban" selected>Angkat Beban</option>
                           <option value="cardio">Cardio</option>
                           <option value="yoga">Yoga</option>
                       </select>
                   </div>
                   <div class="row">
                       <label for="langganan" class="label">Langganan</label>
                       <select id="langganan" class="dropdown">
                           <option value="bulanan" selected>Bulanan</option>
                           <option value="tahunan">Tahunan</option>
                       </select>
                   </div>
                   <div class="row">
                       <label for="trainer" class="label">Trainer</label>
                       <select id="trainer" class="dropdown">
                           <option value="trainer-a" selected>Trainer A</option>
                           <option value="trainer-b">Trainer B</option>
                           <option value="trainer-c">Trainer C</option>
                       </select>
                   </div>
                   <div class="row">
                       <label for="payment-method" class="label">Metode Pembayaran</label>
                       <select id="payment-method" class="dropdown">
                           <option value="qris" selected>QRIS</option>
                           <option value="transfer-bank">Transfer Bank</option>
                           <option value="cash">Cash</option>
                       </select>
                   </div>
                   <div class="row total">
                       <span class="label">Total Pembayaran</span>
                       <span class="value">Rp 120.000</span>
                   </div>
               </div>
               <button type="submit" class="pay-button">Cepatkan bayar 🤑🤑🤑</button>
           </form>
       </section>
   </div>
















  

  <!-- 
    - custom js link
  -->
  <script src="script.js" defer></script>

  <!-- 
  - ionicon link
-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>