<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Lapor PAK</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Sistem Informasi Lapor PAK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
if (isset($_GET['page'])) {
    $page= $_GET['page'];

    switch ($page) {
        case 'login':
            include 'login.php';
            break;
            case 'registrasi':
            include 'registrasi.php';
            break;
        
        default:
            echo "halaman tidak tersedia";
            break;
    }
} else {
    include 'home.php';
}

?>


<footer class="footer py-2 bg-light">
    <div class="container">
        <p class="text-center">Sistem Informasi 2024 | Lapor PAK</p>
    </div>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>