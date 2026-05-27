<?php

$form_1 = !empty($_GET["id"]);
if($form_1){
  $id = $_GET["id"];
  $sh = get_specific_highlight($id);
  $form_2 = !empty($_GET["title"]) && !empty($_GET["text"])  && !empty($_GET["date"])  && isset($_GET["show_in_home"])  && !empty($_GET["image"]);
  if($form_2){
    $title = $_GET["title"];
    $text = $_GET["text"];
    $date = $_GET["date"];
    $show_in_home = (int) $_GET["show_in_home"];
    $image = $_GET["image"];
    edit_highlights($title, $text, $show_in_home, $image, $date, $id);
    header("Location: highlights.php");
  }
}

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
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-12 mx-auto px-0 text-start">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-6">
                        <label for="nome_destaque_editar"><i class="bi bi-pencil-fill"></i>Highlight name:</label>
                        <br>
                        <input type="text" name="title" id="nome_destaque_editar" placeholder="Title" autofocus value="<?= $sh["title"] ?>">
                      </div>
                      <div class="col-6">
                        <label for="date_destaque_editar"><i class="bi bi-calendar-event"></i>Highlight date:</label>
                        <br>
                        <input type="date" id="date_destaque_editar" name="date" placeholder="Date" value="<?= $sh["date"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="image_destaques_novo"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="image_destaques_editar"><?= $sh["image"] ?></textarea>
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
                        <label for="show_in_home"><i class="bi bi-eye-fill"></i>Should it be featured on our Homepage? </label>
                        <select name="show_in_home" id="show_in_home">
                          <option value="1" <?= ($sh["show_in_home"]) ? "selected" : "" ?>>Yes</option>
                          <option value="0" <?= (!$sh["show_in_home"]) ? "selected" : "" ?>>No</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mx-auto mt-4">
                      <div class="col-12">
                        <label for="text"><i class="bi bi-file-text-fill"></i>Edit text</label>
                        <textarea name="text" placeholder="Write your text here" class="tinymce"><?= $sh["text"] ?></textarea>
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        <button class="btn botao-voltar"><i class="bi bi-arrow-return-left"></i><a href="highlights.php">Return</a></button>
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
            <div class="admin-box-title fs-1">Highlights</div>
            <a href="highlights_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New Highlight</a>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-10 mx-auto px-0 text-center">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="nome_destaque_editar"><i class="bi bi-pencil-fill"></i>Highlight name:</label>
                        <br>
                        <input type="text" name="title" id="nome_destaque_editar" placeholder="Title" autofocus value="<?= $sh["title"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="date_destaque_editar"><i class="bi bi-calendar-event"></i>Highlight date:</label>
                        <br>
                        <input type="date" id="date_destaque_editar" name="date" placeholder="Date" value="<?= $sh["date"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-3">
                      <div class="col-12">
                        <label for="image_destaques_novo"><i class="bi bi-link"></i>Insert the image URL:</label>
                        <br>
                        <textarea name="image" id="image_destaques_editar"><?= $sh["image"] ?></textarea>
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
                        <label for="show_in_home"><i class="bi bi-eye-fill"></i>Should it be featured on our Homepage? </label>
                        <select name="show_in_home" id="show_in_home">
                          <option value="1" <?= ($sh["show_in_home"]) ? "selected" : "" ?>>Yes</option>
                          <option value="0" <?= (!$sh["show_in_home"]) ? "selected" : "" ?>>No</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mx-auto mt-4">
                      <div class="col-12">
                        <label for="text"><i class="bi bi-file-text-fill"></i>Edit text</label>
                        <textarea name="text" placeholder="Write your text here" class="tinymce"><?= $sh["text"] ?></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 px-0 mt-3">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        <button class="btn botao-voltar"><i class="bi bi-arrow-return-left"></i><a href="highlights.php">Return</a></button>
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