<?php

require_once __DIR__ . "/../bootstrap.php";

$carousel = get_carousel();
$about = get_about_menu();
$solutions = get_solutions_menu();
$innovation = get_innovation_menu();
$contact = get_contact();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlueWave Solutions</title>

  <meta name="description" content="Full stack CMS project developed with PHP, MySQL and JavaScript featuring a custom backoffice and dynamic content management.">
  <meta property="og:title" content="BlueWave CMS | Full Stack Project">
  <meta property="og:description" content="Full stack CMS project developed with PHP, MySQL and JavaScript featuring a custom backoffice and dynamic content management.">
  <meta property="og:image" content="public/assets/images/icons/desktop/bluewave-preview.png">
  <meta property="og:url" content="https://bluewave.rafaelxavier.dev">
  <meta property="og:type" content="website">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="icon" href="public/assets/images/icons/desktop/bluewave_favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="public/assets/css/fonts/fonts.css">
  <link rel="stylesheet" href="public/assets/css/style.css">
  <script>
    var current_menu = "<?= $current_menu ?>";
  </script>
  <script src="public/assets/js/funcoes.js" defer></script>
  <script src="public/assets/js/main.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <header>

    <!-- HEADER DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row mt-4">
        <div class="col-12 text-center">
          <a href="index.php">
            <img src="public/assets/images/icons/desktop/bluewave_logo.png" alt="Logo" class="logo-topo">
          </a>
        </div>
      </div>


      <div class="row pe-5">
        <div class="col-12 d-flex justify-content-end pe-5 icones">
          <a href="contact.php">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_contactos.svg" alt="Contactos" class="icone">
          </a>
          <div class="separador-topo"></div>
          <a href="<?= $contact["linkedin"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_linkedin.svg" alt="Linkedin" class="icone">
          </a>
          <a href="<?= $contact["instagram"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_instagram.svg" alt="Instagram" class="icone">
          </a>
          <a href="<?= $contact["facebook"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_facebook.svg" alt="Facebook" class="icone">
          </a>

        </div>
      </div>

      <?php if($current_menu == "index"): ?>

        <div class="row mt-4 pt-1">
          <div class="col-12 px-0">
            <div id="carousel-topo-desktop" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators pe-5">

                <?php foreach($carousel as $i => $c): ?>
                <button type="button" class="<?= ($i == 0) ? "active" : "" ?>" data-bs-target="#carousel-topo-desktop" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i+1 ?>"></button>
                <?php endforeach ?>

              </div>
              <div class="carousel-inner">

                <?php foreach($carousel as $i => $c): ?>
                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $c["image"] ?>" class="d-block w-100" alt="<?= $c["image"] ?>">
                  </div>
                <?php endforeach ?>

              </div>
            </div>
          </div>
        </div>
      <?php else: ?>

        <div class="row mt-4 pt-1">
          <div class="col-12 px-0">
            <div id="carousel-topo-desktop">
              <img src="<?= get_banner($current_menu) ?>" class="w-100" alt="<?= get_banner($current_menu) ?>">
            </div>
          </div>
        </div>

      <?php endif ?>

      <div class="row">
        <div class="col-xl-11 col-xxl-10 mx-auto">
          <nav class="navbar navbar-expand p-0" id="navbar-topo-desktop">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-0 mx-auto w-100 justify-content-evenly">
                  <li class="nav-item dropdown">
                    <a id="menu_about" onmouseenter="menu_about.click()" class="nav-link <?= ($current_menu == "about") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About
                    </a>
                    <ul class="dropdown-menu">

                      <?php foreach($about as $a): ?>
                        <li><a class="dropdown-item <?= ($current_menu == "about" && $a["id"] == $_GET["id"]) ? "active" : "" ?>" href="about.php?id=<?= $a["id"] ?>"><?= $a["title"] ?></a></li>
                      <?php endforeach ?>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "highlights" || $current_menu == "specific_highlight") ? "active" : "" ?>" aria-current="page" href="highlights.php">Highlights</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "news" || $current_menu == "specific_news") ? "active" : "" ?>" aria-current="page" href="news.php">News and Events</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="menu_solutions" onmouseenter="menu_solutions.click()" class="nav-link <?= ($current_menu == "solutions") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Solutions
                    </a>
                    <ul class="dropdown-menu">

                      <?php foreach($solutions as $s): ?>
                        <li><a class="dropdown-item <?= ($current_menu == "solutions" && $s["id"] == $_GET["id"]) ? "active" : "" ?>" href="solutions.php?id=<?= $s["id"] ?>"><?= $s["title"] ?></a></li>
                      <?php endforeach ?>

                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="menu_innovation" onmouseenter="menu_innovation.click()" class="nav-link <?= ($current_menu == "innovations") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Innovation and Technology
                    </a>
                    <ul class="dropdown-menu">

                      <?php foreach($innovation as $i): ?>
                        <li><a class="dropdown-item <?= ($current_menu == "innovations" && $i["id"] == $_GET["id"]) ? "active" : "" ?>" href="innovation.php?id=<?= $i["id"] ?>"><?= $i["title"] ?></a></li>
                      <?php endforeach ?>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "parceiros") ? "active" : "" ?>" aria-current="page" href="partners.php">Our Partners</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "contact") ? "active" : "" ?>" aria-current="page" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

    </div>

    <!-- HEADER MOBILE -->

    <div class="container-fluid mobile">

      <div class="row mt-3 pe-2">
        <div class="col-12 d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="public/assets/images/icons/mobile/ta_comunicacoes_mobile_menu_sanduiche.svg" alt="Ícone de Menu em forma de sanduiche" width="40" height="25" onclick="change_mobile_menu(this)">
          </button>
        </div>
      </div>

      <div class="row mt-1 d-flex align-items-center" id="primeira-seccao-mobile">

        <div class="col-6 ps-2 pt-1">
          <a href="index.php">
            <img src="public/assets/images/icons/desktop/bluewave_logo.png" alt="Logo" class="logo-topo">
          </a>
        </div>

        <div class="col-6 d-flex justify-content-end pe-3 align-items-end gap-2 icones">
          <a href="contact.php">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_contactos.svg" alt="Contactos" class="icone">
          </a>
          <div class="separador-topo"></div>
          <a href="<?= $contact["linkedin"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_linkedin.svg" alt="Linkedin" class="icone">
          </a>
          <a href="<?= $contact["instagram"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_instagram.svg" alt="Instagram" class="icone">
          </a>
          <a href="<?= $contact["facebook"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_facebook.svg" alt="Facebook" class="icone">
          </a>
        </div>

      </div>

      <div class="row mt-1">
        <div class="col-12 px-0">
          <nav class="navbar navbar-expand-lg" id="nav-topo-mobile">
            <div class="container-fluid px-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($current_menu == "about") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach($about as $a): ?>
                        <li><a class="dropdown-item <?= ($current_menu == "about" && $a["id"] == $_GET["id"]) ? "active" : "" ?>" href="about.php?id=<?= $a["id"] ?>"><?= $a["title"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "highlights" || $current_menu == "specific_highlight") ? "active" : "" ?>" aria-current="page" href="highlights.php">Highlights</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "news") ? "active" : "" ?>" aria-current="page" href="news.php">News and Events</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($current_menu == "solutions") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Solutions
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach($solutions as $s): ?>
                        <li><a class="dropdown-item <?= ($current_menu == "solutions" && $s["id"] == $_GET["id"]) ? "active" : "" ?>" href="solutions.php?id=<?= $s["id"] ?>"><?= $s["title"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= ($current_menu == "innovation") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Innovation and Technology
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach($innovation as $i): ?>
                        <li><a class="dropdown-item <?= ($current_menu == "innovation" && $i["id"] == $_GET["id"]) ? "active" : "" ?>" href="innovation.php?id=<?= $i["id"] ?>"><?= $i["title"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "partners") ? "active" : "" ?>" aria-current="page" href="partners.php">Our Partners</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "contact") ? "active" : "" ?>" aria-current="page" href="contact.php">Contact</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <?php if($current_menu == "index"): ?>

        <div class="row">
          <div class="col-12 px-0">
            <div id="carousel-topo-mobile" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">

                <?php foreach($carousel as $i => $c): ?>

                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $c["image"] ?>" class="d-block w-100" alt="<?= $c["image"] ?>">
                  </div>

                <?php endforeach ?>

              </div>
            </div>
          </div>
        </div> 

      <?php else: ?>

        <div class="row">
          <div class="col-12 px-0">
            <div id="carousel-topo-mobile">
              <div class="banner_header_mobile">
                <img src="<?= get_banner($current_menu) ?>" class="w-100" alt="<?= get_banner($current_menu) ?>">
              </div>
            </div>
          </div>
        </div> 

      <?php endif ?>
                  
    </div>

  </header>