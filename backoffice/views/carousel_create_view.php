<?php

$form = !empty($_GET["image"]);
if($form){
  $image = $_GET["image"];
  create_carousel($image);
  header("Location: carousel.php");
}

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Create Carousel</div>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-12 mx-auto px-0 text-start">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <div class="edit-box-title">
                          <i class="bi bi-file-earmark-image"></i>Upload via File Manager:
                          <a href="../backoffice/tinyfilemanager/tinyfilemanager.php" target="_blank">File Manager</a>
                        </div>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="imagem_carousel_novo"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="imagem_carousel_novo" placeholder="Image"></textarea>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        <button class="btn botao-voltar"><i class="bi bi-arrow-return-left"></i><a href="home.php">Return</a></button>
                      </div>
                    </div>
                  </div>
                </form>
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
            <div class="admin-box-title fs-1">Create Carousel</div>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-10 mx-auto px-0 text-center">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <div class="edit-box-title"><i class="bi bi-file-earmark-image"></i>Upload via File Manager:</div>
                        <a href="../backoffice/tinyfilemanager/tinyfilemanager.php" target="_blank">File Manager</a>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="imagem_carousel_novo"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="imagem_carousel_novo" placeholder="Image"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 px-0 mt-3">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        <button class="btn botao-voltar"><i class="bi bi-arrow-return-left"></i><a href="home.php">Return</a></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>