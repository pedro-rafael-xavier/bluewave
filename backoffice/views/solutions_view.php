<?php

$list = get_solutions_list();

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Solutions</div>
            <a href="solutions_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Solutions Page</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $s): ?>
                    <div class="row card-box px-3 pb-3 my-3">
                      <div class="col-12 d-flex text-center justify-content-start align-items-center gap-2">
                        <div class="box-id d-flex justify-content-center align-items-center">
                          Page
                          <br>
                          <?= $s["id"] ?>
                        </div>
                        <div class="box-title fs-2 ms-2"><?= $s["title"] ?></div>
                      </div>
                      <div class="col-12">
                        <div>
                          <?= abbreviate($s["text"], 300) ?>
                          <div class="mt-4 d-flex gap-2">
                            <a href="solutions_edit.php?id=<?= $s["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $s['id'] ?>&type=solution" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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
            <div class="admin-box-title fs-1">Solutions</div>
            <a href="solutions_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Solutions Page</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $s): ?>
                    <div class="row card-box px-2 my-3">
                      <div class="col-12 d-flex text-center justify-content-start align-items-center gap-2">
                        <div class="box-id d-flex justify-content-center align-items-center">
                          Page
                          <br>
                          <?= $s["id"] ?>
                        </div>
                        <div class="box-title fs-2 lh-1"><?= $s["title"] ?></div>
                      </div>
                      <div class="col-12 mb-3">
                        <div>
                          <?= abbreviate($s["text"], 200) ?>
                          <div class="mt-4 d-flex gap-2">
                            <a href="solutions_edit.php?id=<?= $s["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $s['id'] ?>&type=solution" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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