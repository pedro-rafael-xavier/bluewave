<?php

$form_1 = !empty($_GET["id"]);
if($form_1){
  $id = $_GET["id"];
  $sh = get_specific_about($id);
  $form_2 = !empty($_GET["title"]) && !empty($_GET["text"]);
  if($form_2){
    $title = $_GET["title"];
    $text = $_GET["text"];
    edit_about($title, $text, $id);
    header("Location: about.php");
  }
}

?>

  <main class="admin-layout">

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Edit About Page</div>
            <a href="about_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New About Page</a>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-12 mx-auto px-0 text-start">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="home_title_edit"><i class="bi bi-pencil-fill"></i>Edit title:</label>
                        <br>
                        <input type="text" name="title" id="home_title_edit" placeholder="Title" autofocus value="<?= $sh["title"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-4">
                      <div class="col-12">
                        <label for="text"><i class="bi bi-file-text-fill"></i>Edit text</label>
                        <textarea name="text" id="text" placeholder="Write your text here" class="tinymce"><?= $sh["text"] ?></textarea>
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
            <div class="admin-box-title fs-1">Edit About Page</div>
            <a href="about_create.php" class="create-btn"><i class="bi bi-pencil-square"></i>Create New About Page</a>
          </div>
          <div class="container-fluid edit-card-box">
            <div class="row my-5">
              <div class="col-10 mx-auto px-0 text-center">
                <form action="">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="container card-box p-3 my-2">
                    <div class="row mx-auto">
                      <div class="col-12">
                        <label for="home_title_edit"><i class="bi bi-pencil-fill"></i>Edit title:</label>
                        <br>
                        <input type="text" name="title" id="home_title_edit" placeholder="Title" autofocus value="<?= $sh["title"] ?>">
                      </div>
                    </div>
                    <div class="row mx-auto mt-4">
                      <div class="col-12">
                        <label for="text"><i class="bi bi-file-text-fill"></i>Edit text</label>
                        <textarea name="text" id="text" placeholder="Write your text here" class="tinymce"><?= $sh["text"] ?></textarea>
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
    
  </main>