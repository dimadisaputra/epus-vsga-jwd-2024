<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ePus | Perpustakaan Daring</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "epus";

  // Membuat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Cek koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }
  ?>
  <header>
  </header>

  <main class="p-5">
    <p class="fs-4 fw-bold">Populer</p>
    <div class="d-flex justify-content-start gap-4">
      <div class="card" style="width: 12rem">
        <img src="images/9786020633176_.Atomic_Habit.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text text-truncate">
            Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa
          </p>
          <p class="fs-6">James Clear</p>
        </div>
      </div>
      <div class="card" style="width: 12rem">
        <img src="images/722010075_Cov_Seraph_of_the_end_22.jpg" class="card-img-top" alt="..." />
        <div class="card-body text-truncate">
          <p class="card-text">Seraph Of The End 22</p>
          <p class="fs-6">Yamamoto Yamato</p>
        </div>
      </div>
      <div class="card" style="width: 12rem">
        <img src="images/9786020633176_.Atomic_Habit.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa
          </p>
        </div>
      </div>
      <div class="card" style="width: 12rem">
        <img src="images/9786020633176_.Atomic_Habit.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa
          </p>
        </div>
      </div>
      <div class="card" style="width: 12rem">
        <img src="images/9786020633176_.Atomic_Habit.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa
          </p>
        </div>
      </div>
      <div class="card" style="width: 12rem">
        <img src="images/9786020633176_.Atomic_Habit.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="card-text">
            Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa
          </p>
        </div>
      </div>
    </div>
  </main>

  <script src="js/bootstrap.min.js"></script>
</body>

</html>
