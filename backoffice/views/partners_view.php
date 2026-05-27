<?php

$list = get_partners_list();

?>

  <main class="admin-layout">

  <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Partners</div>
            <a href="partners_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Add New Partner</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $p): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-3 d-flex text-center justify-content-center align-items-center">
                        <div class="box-img d-flex justify-content-center align-items-center p-4">
                          <img src="<?= $p["image"] ?>" alt="<?= $p["partner_name"] ?>" width="150">
                        </div>
                      </div>
                      <div class="col-9">
                        <div>
                          <div class="box-title fs-2">Partner name: <?= $p["partner_name"] ?></div>
                          <div class="fs-4 mt-3"><i class="bi bi-aspect-ratio"></i> Partner size: <?= ucfirst($p["size"]) ?></div>
                          <div class="mt-4 d-flex gap-2">
                            <a href="partners_edit.php?id=<?= $p["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="?delete=<?= $p['id'] ?>&type=partner" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- MAIN MOBILE -->

    <div class="container fluid mobile mt-3">

      <div class="row admin-box px-0">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Partners</div>
            <a href="partners_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Add New Partner</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $p): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-12 d-flex text-center justify-content-center align-items-center">
                        <div class="box-img d-flex justify-content-center align-items-center p-4">
                          <img src="<?= $p["image"] ?>" alt="<?= $p["partner_name"] ?>" width="150">
                        </div>
                      </div>
                      <div class="col-12">
                        <div>
                          <p class="box-title fs-2">Partner name: <?= $p["partner_name"] ?></p>
                          <p class="fs-4"><i class="bi bi-aspect-ratio"></i> Partner size: <?= ucfirst($p["size"]) ?></p>
                          <div class="mt-4 d-flex gap-2">
                            <a href="partners_edit.php?id=<?= $p["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
                            <a href="?delete=<?= $p['id'] ?>&type=partner" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>

<?php require_once __DIR__ . '/../../app/partials/delete_modal.php'; ?>