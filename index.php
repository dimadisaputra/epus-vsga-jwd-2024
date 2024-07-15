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
  $username = "admin";
  $password = "root";
  $dbname = "epus";

  // Membuat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Cek koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }
  echo "Koneksi berhasil"; ?>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ePus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rak Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarScrollingDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Link
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarScrollingDropdown"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li> -->
            <!-- <li class="nav-item">
                <a
                  class="nav-link disabled"
                  href="#"
                  tabindex="-1"
                  aria-disabled="true"
                  >Link</a
                >
              </li> -->
          </ul>
          <!-- <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form> -->
          <button class="btn btn-outline-success" type="submit">Login</button>
        </div>
      </div>
    </nav>
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