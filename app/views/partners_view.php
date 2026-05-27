<?php

$partners = get_partners_menu();

?>

  <main>

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">
      <div class="row mt-5 pt-3">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center titulo-secundario">
                Our Partners
              </div>
            </div>
            <div class="row mt-5 d-flex justify-content-center align-items-center">
              <?php foreach($partners as $p): ?>
              <?php $col = ($p["size"] == "big") ? "col-12" : "col-12 col-xl-6"; ?>
                <div class="<?= $col ?> gy-5 py-4 text-center">
                  <img src="<?= $p["image"] ?>" alt="<?= $p["partner_name"] ?>" class="icone_pagina_parceiros">
                </div>
              <?php endforeach; ?>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- MAIN MOBILE -->
    
    <div class="container-fluid mobile mt-5">
      <div class="row">
        <div class="col-12 text-center titulo-secundario">
          Our Partners
        </div>
      </div>
      <div class="row mb-5">
        <?php foreach($partners as $p): ?>
          <div class="col-12 gy-5 py-2 text-center">
            <img src="<?= $p["image"] ?>" alt="<?= $p["partner_name"] ?>" class="icone_pagina_parceiros_footer">
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </main>

