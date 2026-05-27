  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop px-0">

      <div class="row admin-box gx-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1 lh-11">BlueWave Backoffice</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container px-0">
                  <div class="row card-box p-4 my-3">
                    <div class="col-12 text-center">
                      <div class="fs-2">Welcome <span class="blue-text"><?= $user["name"] ?></span>!</div>
                      <br>
                      <div class="fs-3">
                        <i class="bi bi-door-open-fill"></i>
                        Last accessed date: 
                        <?= date("H:i:s - d/m/Y", STRTOTIME($user["last_accessed_date"])) ?>
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <div class="fs-3 mb-3">Quick Access</div>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="highlights.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-star-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Highlights</div>
                          <div class="text-muted">Manage highlights</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="news.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-newspaper fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">News</div>
                          <div class="text-muted">Manage news & events</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="about.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-info-circle-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">About</div>
                          <div class="text-muted">Edit about pages</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="solutions.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-lightbulb-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Solutions</div>
                          <div class="text-muted">Manage solutions</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="partners.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-people-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Partners</div>
                          <div class="text-muted">Manage partners</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="banners.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-image-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Banners</div>
                          <div class="text-muted">Manage headers</div>
                        </div>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- MAIN MOBILE -->

    <div class="container-fluid mobile mt-3 px-0">

      <div class="row admin-box gx-0">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header px-4">
            <div class="admin-box-title fs-1">Blue Wave Backoffice</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 mx-auto">
                <div class="container-fluid card-box-container px-0">
                  <div class="row card-box p-4 my-3">
                    <div class="col-12 text-center">
                      <div class="fs-3">Welcome <span class="blue-text"><?= $user["name"] ?></span>!</div>
                      <br>
                      <div class="fs-4">
                        <i class="bi bi-door-open-fill"></i>
                        Last accessed date: 
                        <br>
                        <?= date("H:i:s - d/m/Y", STRTOTIME($user["last_accessed_date"])) ?>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="fs-3 my-3 text-center">Quick Access</div>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="highlights.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-star-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Highlights</div>
                          <div class="text-muted">Manage highlights</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="news.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-newspaper fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">News</div>
                          <div class="text-muted">Manage news & events</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="about.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-info-circle-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">About</div>
                          <div class="text-muted">Edit about pages</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="solutions.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-lightbulb-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Solutions</div>
                          <div class="text-muted">Manage solutions</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="partners.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-people-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Partners</div>
                          <div class="text-muted">Manage partners</div>
                        </div>
                      </a>
                    </div>

                    <div class="col-12 col-md-4 mb-3">
                      <a href="banners.php" class="text-decoration-none">
                        <div class="card-box p-4 text-center h-100">
                          <i class="bi bi-image-fill fs-1 blue-text"></i>
                          <div class="fs-4 mt-3">Banners</div>
                          <div class="text-muted">Manage headers</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>