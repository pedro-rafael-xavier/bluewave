<?php

$home = get_home();
$highlights = get_highlights_home();

?>

  <main>

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">
      <div class="row mt-5 pt-3">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center titulo">
                <?= $home["title"] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center subtitulo lh-1 mt-3">
                <?= $home["subtitle"] ?>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center texto">
                <?= $home["text"] ?>
              </div>
            </div>

            <div class="row mt-5 pt-2">
              <div class="col-12 text-center titulo">
                  Highlights
              </div>
            </div>

            <div class="row mt-5 pt-4">
              <div class="col-12 px-0">
                <div class="separador-grande"></div>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-12 px-0">

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
                                <div class="titulo"><?= $h["title"] ?></div>
                                <div class="data"><?= $h["date"] ?></div>
                                <div class="texto mt-1">
                                  <?= abbreviate($h["text"], 600) ?>
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


          </div>
        </div>
      </div>
    </div>

    <!-- MAIN MOBILE -->
    
    <div class="container-fluid mobile mt-5">
      <div class="row">
        <div class="col-11 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center titulo">
                <?= $home["title"] ?>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12 texto">
                <?= $home["text"] ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 text-center titulo">Highlights</div>
      </div>
      <div class="row mt-4 pt-2">
        <div class="col-12">
          <div class="separador-mobile"></div>
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
                            <?= abbreviate($h["text"], 280) ?>
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
    </div>

  </main>