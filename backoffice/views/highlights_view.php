<?php

$page = $_GET["page"] ?? 1;
if($page < 1){$page = 1;}

$total_pages = get_highlights_total_pages();

if($page >= $total_pages){$page = $total_pages;}

$list = get_highlights_page($page);

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Highlights</div>
            <a href="highlights_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Highlight</a>
          </div>
          <div class="container-fluid edit-box">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $h): ?>
                    <div class="row card-box img-content-box p-3 my-3">
                      <div class="col-4 d-flex text-center justify-content-center align-items-center px-0">
                        <div class="box-img d-flex flex-column justify-content-center align-items-center">
                          <img src="<?= $h["image"] ?>" alt="<?= $h["image"] ?>" width="250">
                          <div class="fs-6 mt-3 <?= ($h["show_in_home"]) ? "show-homepage" : "hide-homepage" ?>">
                            <?= ($h["show_in_home"]) ? "<i class='bi bi-eye-fill'></i> Appears in Home Page" : "<i class='bi bi-eye-slash-fill'></i> Hidden from Home Page" ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-8 px-0">
                        <div>
                          <div class="box-title fs-2"><?= $h["title"] ?></div>
                          <div class="fs-5 my-2"><i class="bi bi-calendar-event"></i> <?= $h["date"] ?></div>
                          <div><?= abbreviate($h["text"], 300) ?></div>
                          <div class="mt-4 d-flex gap-2">
                            <a href="highlights_edit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $h['id'] ?>&type=highlight" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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

        <div class="col-12 mx-auto px-0">
          <div class="container-fluid">
            <div class="row my-5">
              <div class="col-12 px-0 pagination d-flex justify-content-center align-items-center gap-2">
                <a href="highlights.php?page=<?= $page-1 ?>" class="back"></a>

                <?php for($i=1; $i<=$total_pages; $i++): ?>

                  <a href="highlights.php?page=<?= $i ?>" class="number <?= ($page == $i) ? "active" : "" ?>"><?= $i ?></a>

                <?php endfor ?>

                <a href="highlights.php?page=<?= $page+1 ?>" class="forward"></a>
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
            <div class="admin-box-title fs-1">Highlights</div>
            <a href="highlights_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Highlight</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $h): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-12 d-flex text-center justify-content-center align-items-center">
                        <div class="box-img d-flex flex-column justify-content-center align-items-center">
                          <img src="<?= $h["image"] ?>" alt="<?= $h["image"] ?>" width="250">
                          <p class="fs-6 mt-3 <?= ($h["show_in_home"]) ? "show-homepage" : "hide-homepage" ?>">
                            <?= ($h["show_in_home"]) ? "<i class='bi bi-eye-fill'></i> Appears in Home Page" : "<i class='bi bi-eye-slash-fill'></i> Hidden from Home Page" ?>
                          </p>
                        </div>
                      </div>
                      <div class="col-12">
                        <div>
                          <div class="box-title fs-2 lh-1"><?= $h["title"] ?></div>
                          <div class="fs-5 my-2"><i class="bi bi-calendar-event"></i> <?= $h["date"] ?></div>
                          <div><?= abbreviate($h["text"], 200) ?></div>
                          <div class="mt-4 d-flex gap-2">
                            <a href="highlights_edit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $h['id'] ?>&type=highlight" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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

        <div class="col-12 mx-auto px-0">
          <div class="container-fluid">
            <div class="row my-5">
              <div class="col-12 px-0 pagination d-flex justify-content-center align-items-center gap-2">
                <a href="highlights.php?page=<?= $page-1 ?>" class="back"></a>

                <?php for($i=1; $i<=$total_pages; $i++): ?>

                  <a href="highlights.php?page=<?= $i ?>" class="number <?= ($page == $i) ? "active" : "" ?>"><?= $i ?></a>

                <?php endfor ?>

                <a href="highlights.php?page=<?= $page+1 ?>" class="forward"></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>

<?php require_once __DIR__ . '/../../app/partials/delete_modal.php'; ?>