<?php

$page = $_GET["page"] ?? 1;
$total_pages = get_total_news_page();

if($page < 1){$page = 1;}
elseif($page >= $total_pages){$page = $total_pages;}

$news = get_news_page($page);

?>

  <main>

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">
      <div class="row mt-5 pt-3">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">

            <div class="row">
              <div class="col-12 text-center titulo-secundario">
                News and Events
              </div>
            </div>

            <div class="row mt-2 gy-5">

              <?php foreach($news as $n): ?>

                <div class="col-10 col-xl-6 px-3 mx-auto caixa">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12 px-0">
                        <img src="<?= $n["image"] ?>" alt="<?= $n["image"] ?>" class="w-100" height="300">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-11 mx-auto caixa-branca p-4">
                        <div class="titulo">
                          <?= $n["title"] ?>
                        </div>
                        <div class="data"><?= $n["date"] ?></div>
                        <div class="texto">
                          <?= abbreviate($n["text"], 400) ?>
                        </div>
                        <div class="text-center mt-4">
                          <a href="specific_news.php?id=<?= $n["id"] ?>" class="botao-vermais">See More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endforeach ?>

            </div>


            <div class="row mt-5">
              <div class="col-12 px-0 paginacao d-flex justify-content-center align-items-center gap-2">
                <a href="news.php?page=<?= $page-1 ?>" class="voltar"></a>

                <?php for($i=1; $i<=$total_pages; $i++): ?>

                  <a href="news.php?page=<?= $i ?>" class="numero <?= ($page == $i) ? "active" : "" ?>"><?= $i ?></a>

                <?php endfor ?>

                <a href="news.php?page=<?= $page+1 ?>" class="avancar"></a>
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </div>

    <!-- MAIN MOBILE -->
    
    <div class="container-fluid mobile mt-4">

      <div class="row mt-5">
        <div class="col-12 text-center titulo-secundario">
          News and Events
        </div>
      </div>

      <div class="row mt-0 gy-5">

        <?php foreach($news as $n): ?>

          <div class="col-12 col-sm-8 mx-0 mx-sm-auto caixa">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-12 px-0">
                  <img src="<?= $n["image"] ?>" alt="<?= $n["image"] ?>" class="w-100">
                </div>
              </div>
              <div class="row">
                <div class="col-11 mx-auto caixa-branca p-4">
                  <div class="titulo">
                    <?= $n["title"] ?>
                  </div>
                  <div class="data"><?= $n["date"] ?></div>
                  <div class="texto mt-2">
                    <?= abbreviate($n["text"], 320) ?>
                  </div>
                  <div class="text-center mt-4">
                    <a href="specific_news.php?id=<?= $n["id"] ?>" class="botao-vermais">See More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>

      <div class="row mt-4 mb-5">
        <div class="col-12 px-0 paginacao d-flex justify-content-center align-items-center gap-2">
          <a href="news.php?page=<?= $page-1 ?>" class="voltar"></a>

          <?php for($i=1; $i<=$total_pages; $i++): ?>

            <a href="news.php?page=<?= $i ?>" class="numero <?= ($page == $i) ? "active" : "" ?>"><?= $i ?></a>

          <?php endfor ?>

          <a href="news.php?page=<?= $page+1 ?>" class="avancar"></a>

        </div>
      </div>

    </div>

  </main>