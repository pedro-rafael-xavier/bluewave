<?php

$form = !empty($_GET["id"]);

if($form){
  $id = intval($_GET["id"]);
  $ss = get_specific_solutions($id);
}

?>

  <main>

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">
      <div class="row mt-5 pt-3">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-end titulo-secundario">
                Solutions - <?= $ss["title"] ?>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-justify texto">
                <?= $ss["text"] ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- MAIN MOBILE -->
    
    <div class="container-fluid mobile mt-4">
      <div class="row">
        <div class="col-12 text-center titulo-secundario lh-1">
          Solutions - 
          <br>
          <?= $ss["title"] ?>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 text-justify texto px-4">
          <?= $ss["text"] ?>
        </div>
      </div>
    </div>

  </main>

