<?php

require_once __DIR__ . "/../../app/bootstrap.php";
verify_logged_user();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlueWave - Backoffice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="icon" href="../public/assets/images/icons/desktop/bluewave_favicon.png">
  <link rel="stylesheet" href="../public/assets/css/fonts/fonts.css">
  <link rel="stylesheet" href="css/backoffice.css">
  <script src="/bluewave/public/assets/js/tinymce/tinymce.min.js"></script>
  <script src="/bluewave/public/assets/js/tinymce/tinymce-init.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

  <header class="container-fluid">

    <div class="row">
      <div class="col-12 px-0 mt-3">
        <nav class="navbar navbar-expand-xl">
          <div class="container-fluid">

            <!-- LEFT: LOGO -->
            <a class="navbar-brand" href="login.php">
              <img src="../public/assets/images/icons/desktop/bluewave_logo_transparent.png" class="logo-nav">
            </a>

            <!-- MOBILE BUTTON -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <!-- CENTER: MENU -->
              <ul class="navbar-nav mx-auto fs-4">
                <li class="nav-item"><a href="home.php" class="<?= ($current_menu=="home") ? "active" : "" ?>">Home</a></li>
                <li class="nav-item"><a href="banners.php" class="<?= ($current_menu=="banners") ? "active" : "" ?>">Banners</a></li>
                <li class="nav-item"><a href="about.php" class="<?= ($current_menu=="about") ? "active" : "" ?>">About</a></li>
                <li class="nav-item"><a href="highlights.php" class="<?= ($current_menu=="highlights") ? "active" : "" ?>">Highlights</a></li>
                <li class="nav-item"><a href="news.php" class="<?= ($current_menu=="news") ? "active" : "" ?>">News</a></li>
                <li class="nav-item"><a href="solutions.php" class="<?= ($current_menu=="solutions") ? "active" : "" ?>">Solutions</a></li>
                <li class="nav-item"><a href="innovation.php" class="<?= ($current_menu=="innovation") ? "active" : "" ?>">Innovation</a></li>
                <li class="nav-item"><a href="partners.php" class="<?= ($current_menu=="partners") ? "active" : "" ?>">Partners</a></li>
                <li class="nav-item"><a href="contact.php" class="<?= ($current_menu=="contact") ? "active" : "" ?>">Contact</a></li>
              </ul>

              <!-- RIGHT: LOGOUT -->
              <ul class="navbar-nav ms-auto">
                <li class="nav-item logout">
                  <a href="logout.php" class="logout <?= ($current_menu=="logout") ? "active" : "" ?>">
                    <i class="bi bi-box-arrow-left"></i>
                    Logout
                  </a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>

  </header>