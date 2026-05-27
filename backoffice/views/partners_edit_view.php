<?php

$form_1 = !empty($_GET["id"]);
if($form_1){
  $id = $_GET["id"];
  $sp = get_specific_partner($id);
  $form_2 = !empty($_GET["partner_name"]) && !empty($_GET["size"]);
  if($form_2){
    $partner_name = $_GET["partner_name"];
    $size = $_GET["size"];

    if(!empty($_GET["image"])){
      $image = $_GET["image"];
    }
    else{
      $image = $sp["image"];
    }

    edit_partners($partner_name, $image, $size, $id);
    header("Location: partners.php");
  }
}

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Edit Partners</div>
            <a href="partners_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Add New Partner</a>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-12 mx-auto px-0 text-start">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="edit_partner_name"><i class="bi bi-pencil-fill"></i>Edit name:</label>
                        <br>
                        <input type="text" name="partner_name" id="edit_partner_name" placeholder="Partner name" autofocus value="<?= $sp["partner_name"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="edit_partner_image"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="edit_partner_image"><?= $sp["image"] ?></textarea>
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
                        <select name="size" id="partner_size">
                          <option value="small" <?= ($sp["size"] == "small") ? "selected" : "" ?>>Small</option>
                          <option value="big" <?= ($sp["size"] == "big") ? "selected" : "" ?>>Big</option>
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
            <div class="admin-box-title fs-1">Edit Partners</div>
            <a href="partners_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Add New Partner</a>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-10 mx-auto px-0 text-center">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="edit_partner_name"><i class="bi bi-pencil-fill"></i>Edit name:</label>
                        <br>
                        <input type="text" name="partner_name" id="edit_partner_name" placeholder="Partner name" autofocus value="<?= $sp["partner_name"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="edit_partner_image"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="edit_partner_image"><?= $sp["image"] ?></textarea>
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
                        <select name="size" id="partner_size">
                          <option value="small" <?= ($sp["size"] == "small") ? "selected" : "" ?>>Small</option>
                          <option value="big" <?= ($sp["size"] == "big") ? "selected" : "" ?>>Big</option>
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