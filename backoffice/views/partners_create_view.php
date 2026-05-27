<?php

$form = !empty($_GET["partner_name"]) && !empty($_GET["image"]) && !empty($_GET["size"]);
if($form){
  $partner_name = $_GET["partner_name"];
  $image = $_GET["image"];
  $size = $_GET["size"];
  create_partners($partner_name, $image, $size);
  header("Location: partners.php");
}

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Create Partner</div>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-12 mx-auto px-0 text-start">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="new_partners_name"><i class="bi bi-pencil-fill"></i>Partner name:</label>
                        <br>
                        <input type="text" name="partner_name" id="new_partners_name" placeholder="Partner name" required autofocus>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="new_partners_image"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="new_partners_image" placeholder="Image URL" required></textarea>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-6">
                        <div class="edit-box-title">
                          <i class="bi bi-file-earmark-image"></i>Upload via File Manager:
                          <a href="../backoffice/tinyfilemanager/tinyfilemanager.php" target="_blank">File Manager</a>
                        </div>
                      </div>
                      <div class="col-6 d-flex align-items-center">
                        <label for="partner_size"><i class="bi bi-aspect-ratio"></i>Partner image size: </label>
                        <select name="size" id="partner_size" required>
                          <option value="small">Small</option>
                          <option value="big">Big</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        <button class="btn botao-voltar"><i class="bi bi-arrow-return-left"></i><a href="partners.php">Return</a></button>
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
            <div class="admin-box-title fs-1">Create Partner</div>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-10 mx-auto px-0 text-center">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="new_partners_name"><i class="bi bi-pencil-fill"></i>Partner name:</label>
                        <br>
                        <input type="text" name="partner_name" id="new_partners_name" placeholder="Partner name" required autofocus>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="new_partners_image"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="new_partners_image" placeholder="Image URL" required></textarea>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <div class="edit-box-title"><i class="bi bi-file-earmark-image"></i>Upload via File Manager:</div>
                        <a href="../backoffice/tinyfilemanager/tinyfilemanager.php" target="_blank">File Manager</a>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="partner_size"><i class="bi bi-aspect-ratio"></i>Partner image size: </label>
                        <select name="size" id="partner_size" required>
                          <option value="small">Small</option>
                          <option value="big">Big</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 px-0 mt-3">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        <button class="btn botao-voltar"><i class="bi bi-arrow-return-left"></i><a href="partners.php">Return</a></button>
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