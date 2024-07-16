<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary-subtle p-4">
      <div class="container-fluid">
      <img src="images/epus.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle">
      <a class="navbar-brand ps-1" style="font-size: 30px; font-weight: bold; " >ePus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
            <li class="nav-item">
              <a class="nav-link fw-bold" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">Rak Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="tentang.php">Tentang</a>
            </li>
          </ul>
          <a class="btn btn-outline-dark fw-bold" href="signup.php">Daftar</a>
      </div>
    </nav>