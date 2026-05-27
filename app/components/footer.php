<?php

$carousel_footer_format = $carousel_footer_format ?? "news";
$nav_format = ($carousel_footer_format == "empty") ? "nav-contactos-desktop" : "";

$news = [];
$highlights = [];

if($carousel_footer_format == "news"){
  $news = get_news_home();
}
elseif($carousel_footer_format == "highlights"){
  $highlights = get_highlights_home();
}

?>

  <footer class="footer-<?= $carousel_footer_format ?>">

    <!-- FOOTER DESKTOP -->
  
    <div class="container-fluid desktop pt-5">

      <?php if($carousel_footer_format == "news"): ?>

        <!-- Footer with News Carousel -->

        <div class="row pt-4">
          <div class="col-12 text-center titulo">
            Last News and Events
          </div>
        </div>

        <div class="row mt-5 pt-3">
          <div class="col-12 px-0">
            <div id="carousel-noticias-desktop" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">

                <?php foreach($news as $i => $n): ?>

                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $n["image"] ?>" class="d-block w-100" alt="<?= $n["image"] ?>">
                    <div class="carousel-caption text-start d-flex flex-column justify-content-between">
                      <div>
                        <div class="titulo">
                          <?= $n["title"] ?>
                        </div>
                        <div class="data">
                          <?= $n["date"] ?>
                        </div>
                        <div class="texto mt-3">
                          <?= abbreviate($n["text"], 640) ?>
                        </div>
                      </div>
                      <div>
                        <a href="specific_news.php?id=<?= $n["id"] ?>" class="botao-vermais">See More</a>
                      </div>
                    </div>
                  </div>

                <?php endforeach ?>

              </div>
              <div class="carousel-indicators mt-4">
                <div class="container-fluid">
                  <div class="row justify-content-end caixa-botoes-desktop">
                    <div class="col-auto px-0 caixa-botoes d-flex gap-2">

                      <?php foreach($news as $i => $n): ?>
                      
                        <button type="button" class="<?= ($i == 0) ? "active" : "" ?>" data-bs-target="#carousel-noticias-desktop" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i+1 ?>"></button>

                      <?php endforeach ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php elseif($carousel_footer_format == "highlights"): ?>

        <!-- Footer with Highlights Carousel -->

        <div class="row pt-4">
          <div class="col-12 text-center titulo">
            Highlights
          </div>
        </div>

        <div class="row mt-5 pt-4">
          <div class="col-11 col-lg-9 px-0 mx-auto">
            <div class="separador-grande"></div>
          </div>
        </div>

        <div class="row mt-4 pt-3">
          <div class="col-11 col-lg-9 px-0 mx-auto">

            <div id="carousel-destaques-desktop" class="carousel slide" data-bs-ride="carousel">
          
              <div class="carousel-inner">

                <?php foreach($highlights as $i => $h): ?>

                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-auto px-0">
                          <img src="<?= $h["image"] ?>" class="d-block" alt="<?= $h["image"] ?>">
                        </div>
                        <div class="col px-0 ms-2 ps-3 ps-xl-5 d-flex flex-column justify-content-between">
                          <div>
                            <div class="titulo"><?= $h["title"] ?>"</div>
                            <div class="data"><?= $h["date"] ?></div>
                            <div class="texto mt-1">
                              <?= abbreviate($h["text"], 700) ?>
                            </div>
                          </div>
                          <div class="text-end">
                            <a href="specific_highlight.php?id=<?= $h["id"] ?>" class="botao-vermais">See More</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php endforeach ?>
              
              </div>
              <div class="carousel-indicators justify-content-end pe-0 pt-3 gap-1 gap-xl-2">

                <?php foreach($highlights as $i => $h): ?>

                  <button type="button" class="<?= ($i == 0) ? "active" : "" ?>" data-bs-target="#carousel-destaques-desktop" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i+1 ?>"></button>

                <?php endforeach ?>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel-destaques-desktop" data-bs-slide="prev">
                <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_seta_destaques_esquerda.svg" alt="Seta azul de navegação para o lado esquerdo">
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel-destaques-desktop" data-bs-slide="next">
                <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_seta_destaques.svg" alt="Seta azul de navegação para o lado direito">
              </button>
            </div>
          </div>
        </div>

      <?php elseif($carousel_footer_format == "empty"): ?>

        <!-- Footer without Carousel (Contacts Page) -->

      <?php endif ?>

      <div class="row">
          <div class="col-12 px-0">
            <nav class="d-flex justify-content-center gap-1 gap-xxl-3 pb-3 <?= $nav_format ?>">
              <a href="#" class="<?= ($current_menu == "about") ? "active" : "" ?>" onclick="open_menu(menu_about)">About</a>
              <a href="highlights.php" class="<?= ($current_menu == "highlights") ? "active" : "" ?>">Highlights</a>
              <a href="news.php"class="<?= ($current_menu == "news") ? "active" : "" ?>">News and Events</a>
              <a href="#" class="<?= ($current_menu == "solutions") ? "active" : "" ?>" onclick="open_menu(menu_solutions)">Solutions</a>
              <a href="#" class="<?= ($current_menu == "innovation") ? "active" : "" ?>" onclick="open_menu(menu_innovation)">Innovation and Technology</a>
              <a href="partners.php" class="<?= ($current_menu == "partners") ? "active" : "" ?>" >Our Partners</a>
              <a href="contact.php" class="<?= ($current_menu == "contact") ? "active" : "" ?>" >Contact</a>
            </nav>
          </div>
        </div>

      <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center align-items-center gap-5">
          <img src="public/uploads/partners/partner_logoipsum_1.svg" alt="Partner logo" class="altice">
          <img src="public/uploads/partners/partner_logoipsum_2.svg" alt="Partner logo" class="samsung">
          <img src="public/uploads/partners/partner_logoipsum_3.svg" alt="Partner logo" class="dell">
          <img src="public/uploads/partners/partner_logoipsum_4.svg" alt="Partner logo" class="aruba">
          <img src="public/uploads/partners/partner_logoipsum_5.svg" alt="Partner logo" class="hp">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-10 px-0 mx-auto">
          <div class="separador-footer"></div>
        </div>
      </div>

      <div class="row mt-4 pt-2 ps-4">
        <div class="col-10 mx-auto px-0">
          <div class="container-fluid">
            <div class="row align-items-start">
              <div class="col d-flex justify-content-start mx-auto px-0 icones">
                <a href="contact.php">
                  <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_contactos.svg" alt="Contactos" class="icone">
                </a>
                <div class="separador-icones-footer"></div>
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

              <div class="col d-flex justify-content-end gap-4">
                <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">
                  <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_livro_de_reclamacoes.svg" alt="Logótipo do Livro de Reclamações" class="livro-reclamacoes">
                </a>
                <a href="https://www2.gov.pt/fichas-de-enquadramento/resolucao-de-conflitos-de-consumo/simulador-resolucao-alternativa-de-conflitos-de-consumo" target="_blank">
                  <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_ralc.svg" alt="Logótipo da Resolução Alternativa de Litígios de Consumo" class="ralc">
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row mt-3">
        <div class="col-10 px-0 mx-auto copyright">
          <a href="#">
            Copyright © 2026 BlueWave Solutions. All rights reserved.
          </a>
        </div>
      </div>

    </div>

    <!-- FOOTER MOBILE -->

    <div class="container-fluid mobile mt-3">

      <?php if($carousel_footer_format == "news"): ?>

        <!-- Footer with News Carousel -->

        <div class="row pt-4">
          <div class="col-12 text-center titulo pt-3">
            Last News and Events
          </div>
        </div>

        <div class="row mt-4 pt-2">
          <div class="col-12 px-0">
            <div id="carousel-noticias-mobile" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">

                <?php foreach($news as $i => $n): ?>

                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $n["image"] ?>" class="d-block w-100" alt="<?= $n["image"] ?>">
                    <div class="carousel-caption text-start d-flex flex-column justify-content-between px-3">
                      <div>
                        <div class="titulo">
                          <?= $n["title"] ?>
                        </div>
                        <div class="data mt-2">
                          <?= $n["date"] ?>
                        </div>
                        <div class="texto mt-2">
                          <?= abbreviate($n["text"], 305) ?>
                        </div>
                      </div>
                      <div class="mt-2">
                        <a href="specific_news.php?id=<?= $n["id"] ?>" class="botao-vermais">See More</a>
                      </div>
                    </div>
                  </div>

                <?php endforeach ?>

              </div>
              <div class="carousel-indicators mt-4">
                <div class="container-fluid">
                  <div class="row justify-content-end">
                    <div class="col-auto px-0 caixa-botoes d-flex gap-1">

                      <?php foreach($news as $i => $n): ?>
                        <button type="button" data-bs-target="#carousel-noticias-mobile" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? "active" : "" ?>" aria-label="Slide <?= $i+1 ?>"></button>
                      <?php endforeach ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php elseif($carousel_footer_format == "highlights"): ?>

        <!-- Footer with Highlights Carousel -->

        <div class="row pt-4">
          <div class="col-12 text-center titulo pt-3">
            Highlights
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-11 px-0 mx-auto">
            <div class="separador-destaques-mobile"></div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-9 px-0 mx-auto">

            <div id="carousel-destaques-mobile" class="carousel slide" data-bs-ride="carousel">
          
              <div class="carousel-inner">

                <?php foreach($highlights as $i => $h): ?>

                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12 px-0">
                          <img src="<?= $h["image"] ?>" class="d-block w-100" alt="<?= $h["image"] ?>">
                        </div>
                        <div class="col-12 px-0 d-flex flex-column justify-content-between mt-3">
                          <div>
                            <div class="titulo"><?= $h["title"] ?></div>
                            <div class="data mt-2"><?= $h["date"] ?></div>
                            <div class="texto mt-2">
                              <?= abbreviate($h["text"], 305) ?>
                            </div>
                          </div>
                          <div class="text-start mt-2">
                            <a href="specific_highlight.php?id=<?= $h["id"] ?>" class="botao-vermais">See More</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php endforeach ?>
              
              </div>
              <div class="carousel-indicators justify-content-end pe-0 pt-3 gap-1">

                <?php foreach($highlights as $i => $h): ?>
                  <button type="button" class="<?= ($i == 0) ? "active" : "" ?>" data-bs-target="#carousel-destaques-mobile" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i+1 ?>"></button>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>

      <?php else: ?>

        <!-- Footer without Carousel (Contacts Page) -->
      
      <?php endif ?>

      <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center align-items-center gap-2 mx-auto px-0 icones">
          <a href="contact.php">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_contactos.svg" alt="Contacts" class="icone">
          </a>
          <div class="separador-icones-footer"></div>
          <a href="<?= $contact["linkedin"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_linkedin.svg" alt="Linkedin icon" class="icone">
          </a>
          <a href="<?= $contact["instagram"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_instagram.svg" alt="Instagram icon" class="icone">
          </a>
          <a href="<?= $contact["facebook"] ?>" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_facebook.svg" alt="Facebook icon" class="icone">
          </a>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12">
          <div class="separador-mobile-grande"></div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center align-items-center gap-0 text-center gap-4 px-0">
          <div>
            <img src="public/uploads/partners/partner_logoipsum_1.svg" alt="Partner logo" class="altice">
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="public/uploads/partners/partner_logoipsum_2.svg" alt="Partner logo" class="dell">
            <img src="public/uploads/partners/partner_logoipsum_3.svg" alt="Partner logo" class="samsung">
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center gap-3">
            <img src="public/uploads/partners/partner_logoipsum_4.svg" alt="Partner logo" class="hp">
            <img src="public/uploads/partners/partner_logoipsum_5.svg" alt="Partner logo" class="aruba">
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12">
          <div class="separador-mobile-grande"></div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 px-0 d-flex justify-content-center align-items-center gap-4">
          <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_livro_de_reclamacoes.svg" alt="Logótipo do Livro de Reclamações" class="livro-reclamacoes">
          </a>
          <a href="https://www2.gov.pt/fichas-de-enquadramento/resolucao-de-conflitos-de-consumo/simulador-resolucao-alternativa-de-conflitos-de-consumo" target="_blank">
            <img src="public/assets/images/icons/desktop/ta_comunicacoes_desktop_ralc.svg" alt="Logótipo da Resolução Alternativa de Litígios de Consumo" class="ralc">
          </a>
        </div>
      </div>

      <div class="row mt-2 pt-1">
        <div class="col-12 px-0 copyright text-center">
          <a href="#">
            Copyright © 2026 BlueWave Solutions. All rights reserved.
          </a>
        </div>
      </div>

    </div>
  </footer>
  
</body>
</html>