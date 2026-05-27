<?php

$page = $_GET["page"] ?? 1;
if($page < 1){$page = 1;}

$total_pages = get_total_news_page();

if($page >= $total_pages){$page = $total_pages;}

$list = get_news_page($page);

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">News</div>
            <a href="news_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create News</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $n): ?>
                    <div class="row card-box img-content-box px-3 py-3 my-3">
                      <div class="col-4 d-flex text-center justify-content-center align-items-center px-0">
                        <div class="box-img d-flex flex-column justify-content-center align-items-center">
                          <img src="<?= $n["image"] ?>" alt="<?= $n["image"] ?>" width="250">
                          <div class="fs-6 mt-3 <?= ($n["show_in_home"]) ? "show-homepage" : "hide-homepage" ?>">
                            <?= ($n["show_in_home"]) ? "<i class='bi bi-eye-fill'></i> Appears in Home Page" : "<i class='bi bi-eye-slash-fill'></i> Hidden from Home Page" ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-8 px-0">
                        <div>
                          <div class="box-title fs-2"><?= $n["title"] ?></div>
                          <div class="fs-5 my-2"><i class="bi bi-calendar-event"></i> <?= $n["date"] ?></div>
                          <div><?= abbreviate($n["text"], 300) ?></div>
                          <div class="mt-4 d-flex gap-2">
                            <a href="news_edit.php?id=<?= $n["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $n['id'] ?>&type=news" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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
                <a href="news.php?page=<?= $page-1 ?>" class="back"></a>

                <?php for($i=1; $i<=$total_pages; $i++): ?>

                  <a href="news.php?page=<?= $i ?>" class="number <?= ($page == $i) ? "active" : "" ?>"><?= $i ?></a>

                <?php endfor ?>

                <a href="news.php?page=<?= $page+1 ?>" class="forward"></a>
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
            <div class="admin-box-title fs-1">News</div>
            <a href="news_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create News</a>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 mx-auto">
                <div class="container-fluid card-box-container">
                  <?php foreach($list as $n): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-12 d-flex text-center justify-content-center align-items-center">
                        <div class="box-img d-flex flex-column justify-content-center align-items-center">
                          <img src="<?= $n["image"] ?>" alt="<?= $n["image"] ?>" width="250">
                          <p class="fs-6 mt-3 <?= ($n["show_in_home"]) ? "show-homepage" : "hide-homepage" ?>">
                            <?= ($n["show_in_home"]) ? "<i class='bi bi-eye-fill'></i> Appears in Home Page" : "<i class='bi bi-eye-slash-fill'></i> Hidden from Home Page" ?>
                          </p>
                        </div>
                      </div>
                      <div class="col-12">
                        <div>
                          <div class="box-title fs-2 lh-1"><?= $n["title"] ?></div>
                          <div class="fs-5 my-2"><i class="bi bi-calendar-event"></i> <?= $n["date"] ?></div>
                          <div><?= abbreviate($n["text"], 200) ?></div>
                          <div class="mt-4 d-flex gap-2">
                            <a href="news_edit.php?id=<?= $n["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Edit</a>
                            <a href="?delete=<?= $n['id'] ?>&type=news" class="btn btn-danger"><i class="bi bi-trash3-fill"></i>Delete</a>
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
                <a href="news.php?page=<?= $page-1 ?>" class="back"></a>

                <?php for($i=1; $i<=$total_pages; $i++): ?>

                  <a href="news.php?page=<?= $i ?>" class="number <?= ($page == $i) ? "active" : "" ?>"><?= $i ?></a>

                <?php endfor ?>

                <a href="news.php?page=<?= $page+1 ?>" class="forward"></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>

<?php require_once __DIR__ . '/../../app/partials/delete_modal.php'; ?>