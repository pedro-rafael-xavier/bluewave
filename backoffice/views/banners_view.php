<?php

$list = get_banners_list();

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Banners</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $b): ?>
                    <div class="row card-box px-3 py-3 my-3">
                      <div class="col-6 p-3">
                        <div class="box-img d-flex justify-content-center align-items-center">
                          <img src="<?= $b["image"] ?>" alt="<?= $b["image"] ?>" width="350">
                        </div>
                      </div>
                      <div class="col-6 d-flex flex-column justify-content-center ps-4">
                        <div class="fs-4 text-start">
                          <i class="bi bi-list"></i> Menu where the banner will appear
                          <div class="fs-2 text-uppercase my-3 blue-text"><?= $b["menu"] ?></div>
                        </div>
                        <div class="mt-3 d-flex gap-2">
                          <a href="banners_edit.php?id=<?= $b["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                          <a href="?delete=<?= $b['id'] ?>&type=banner" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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

    <div class="container-fluid mobile mt-3">

      <div class="row admin-box px-0">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Banners</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 mx-auto px-0">
                <div class="container-fluid card-box-container d-flex flex-column justify-content-center align-items-center">
                  <?php foreach($list as $b): ?>
                    <div class="row card-box px-0 py-3 my-3 d-flex justify-content-center align-items-center">
                      <div class="col-12">
                        <div class="box-img d-flex justify-content-center align-items-center">
                          <img src="<?= $b["image"] ?>" alt="<?= $b["image"] ?>" width="250">
                        </div>
                      </div>
                      <div class="col-12 mt-3">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                          <div class="text-left fs-5">
                            <i class="bi bi-list"></i> Menu where the banner will appear
                            <div class="fs-1 my-2 blue-text text-uppercase">
                              <div><?= $b["menu"] ?></div>
                            </div>
                            <div class="d-flex gap-2">
                              <a href="banners_edit.php?id=<?= $b["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                              <a href="?delete=<?= $b['id'] ?>&type=banner" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
                            </div>
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