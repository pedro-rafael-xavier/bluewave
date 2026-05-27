<?php

$list = get_innovations_list();

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1 lh-11">Innovation and Technologies</div>
            <a href="innovation_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Page</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $i): ?>
                    <div class="row card-box px-3 pb-3 my-3">
                      <div class="col-12 d-flex text-center justify-content-start align-items-center gap-2">
                        <div class="box-id d-flex justify-content-center align-items-center">
                          Page
                          <br>
                          <?= $i["id"] ?>
                        </div>
                        <div class="box-title fs-2 ms-2"><?= $i["title"] ?></div>
                      </div>
                      <div class="col-12">
                        <div>
                          <?= abbreviate($i["text"], 300) ?>
                          <div class="mt-4 d-flex gap-2">
                            <a href="innovation_edit.php?id=<?= $i["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $i['id'] ?>&type=innovation" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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

    <div class="container-fluid mobile mt-3">

      <div class="row admin-box px-0">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Innovation</div>
            <a href="innovation_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Page</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $i): ?>
                    <div class="row card-box px-2 my-3">
                      <div class="col-12 d-flex text-center justify-content-start align-items-center gap-2">
                        <div class="box-id d-flex justify-content-center align-items-center">
                          Page
                          <br>
                          <?= $i["id"] ?>
                        </div>
                        <div class="box-title fs-2 lh-1"><?= $i["title"] ?></div>
                      </div>
                      <div class="col-12 mb-3">
                        <div>
                          <?= abbreviate($i["text"], 200) ?>
                          <div class="mt-4 d-flex gap-2">
                            <a href="innovation_edit.php?id=<?= $i["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $i['id'] ?>&type=innovation" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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