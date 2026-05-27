<?php

$list = get_carousel();

?>

  <main class="container-fluid">

    <div class="row m-3">
      <div class="col-12 text-center">
        <h3>Homepage Carousel</h3>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-10 text-center mx-auto px-5 py-3">

        <a href="carousel_create.php" class="botao-novo">Create New Carousel</a>

        <br><br>

        <table>

          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>

          <?php foreach($list as $c): ?>

            <tr>
              <td><?= $c["id"] ?></td>
              <td><img src="<?= $c["image"] ?>" alt="<?= $c["image"] ?>" width="250"></td>
              <td>
                <a href="carousel_edit.php?id=<?= $c["id"] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                <a href="carousel_delete.php?id=<?= $c["id"] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
              </td>
            </tr>

          <?php endforeach ?>

        </table>
      </div>
    </div>

  </main>

<?php require_once __DIR__ . '/../../app/partials/delete_modal.php'; ?>
