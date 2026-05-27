<?php

$list = [get_home()];
$carousel_list = get_carousel();

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop mt-4">

      <div class="row admin-box px-0">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-start align-items-center px-4">
            <div class="admin-box-title fs-1">Home Page Content</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $h): ?>
                    <div class="row card-box px-3 py-3 my-3">
                      <div class="col-12">
                        <div>
                          <div class="box-title fs-2"><?= $h["title"] ?></div>
                          <div class="fs-4"><?= $h["subtitle"] ?></div>
                          <div class="mt-2"><?= abbreviate($h["text"], 300) ?></div>
                          <br>
                          <a href="home_edit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
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

      <div class="row admin-box px-0 mt-3">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Edit Carousel</div>
            <a href="carousel_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Carousel</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($carousel_list as $index => $c): ?>
                    <div class="row card-box px-3 py-3 my-3 d-flex justify-content-center align-items-center">
                      <div class="col-1">
                        <div class="box-id d-flex text-center justify-content-center align-items-center p-5">
                          Carousel
                          <br>
                          <?= $index + 1 ?>
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="box-img d-flex justify-content-center align-items-center">
                          <img src="<?= $c["image"] ?>" alt="<?= $c["image"] ?>" width="350">
                        </div>
                      </div>
                      <div class="col-2 d-flex text-center justify-content-center align-items-center gap-3">
                        <a href="carousel_edit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                        <a href="?delete=<?= $c['id'] ?>&type=carousel" class="btn btn-danger">
                          <i class="bi bi-trash3-fill"></i> Delete
                        </a>
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
            <div class="admin-box-header d-flex justify-content-start align-items-center px-4">
              <div class="admin-box-title fs-1">Home Page</div>
            </div>
            <div class="container-fluid">
              <div class="row my-3">
                <div class="col-10 mx-auto">
                  <div class="container-fluid card-box-container">
                    <?php foreach($list as $h): ?>
                      <div class="row card-box px-2 my-3">
                        <div class="col-12 d-flex text-center justify-content-start align-items-center my-2 pt-2">
                          <div class="box-title fs-2 lh-1"><?= $h["title"] ?></div>
                        </div>
                        <div class="col-12">
                          <div class="fs-5"><?= $h["subtitle"] ?></div>
                        </div>
                        <div class="col-12 mb-3 mt-2">
                          <div>
                            <?= abbreviate($h["text"], 200) ?>
                            <br><br>
                            <a href="home_edit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
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

        <div class="row admin-box px-0 mt-3">
          <div class="col-12 mx-auto px-0">
            <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
              <div class="admin-box-title fs-1">Edit Carousel</div>
              <a href="carousel_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Carousel</a>
            </div>
            <div class="container-fluid">
              <div class="row my-3">
                <div class="col-10 mx-auto px-0">
                  <div class="container-fluid card-box-container">
                    <?php foreach($carousel_list as $index => $c): ?>
                      <div class="row card-box px-3 py-3 my-3 d-flex justify-content-center align-items-center">
                        <div class="col-12">
                          <div class="box-img d-flex justify-content-center align-items-center">
                            <img src="<?= $c["image"] ?>" alt="<?= $c["image"] ?>" width="250">
                          </div>
                        </div>
                        <div class="container-fluid">
                          <div class="row d-flex align-items-center mt-2">
                            <div class="col-3 d-flex justify-content-center">
                              <div class="box-id d-flex text-center p-2 fs-6">
                                Carousel
                                <br>
                                <?= $index + 1 ?>
                              </div>
                            </div>
                            <div class="col-9 d-flex text-center justify-content-end align-items-center gap-1">
                              <a href="carousel_edit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                              <a href="?delete=<?= $c['id'] ?>&type=carousel" class="btn btn-danger">
                                <i class="bi bi-trash3-fill"></i> Delete
                              </a>
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

    </div>
    
  </main>

  <?php require_once __DIR__ . '/../../app/partials/delete_modal.php'; ?>

  