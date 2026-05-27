<?php

require_once __DIR__ . "/../../app/bootstrap.php";

$form = !empty($_POST["login"]) && !empty($_POST["password"]);
if($form){
  $login = $_POST["login"];
  $password = $_POST["password"];
  user_login($login, $password);
}

?>

<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blue Wave - Backoffice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="icon" href="../public/assets/images/icons/desktop/bluewave_favicon.png">
  <link rel="stylesheet" href="../public/assets/css/fonts/fonts.css">
  <link rel="stylesheet" href="css/backoffice.css">
</head>
<body>

  <main class="container-fluid caixa-login">

    <div class="row mt-5">
      <div class="col-12 text-center">
        <a href="index.php">
          <img src="../public/assets/images/icons/desktop/bluewave_logo_transparent.png" alt="Logo" class="logo-login">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center mt-5">

        <?php if($form): ?>   
          <div class="text-danger fs-4">Wrong authentication!</div>
          <br>
        <?php endif ?> 

        <form action="" method="post" autocomplete="off" class="form-login">
          <input type="text" name="login" placeholder="Username" class="text-center" required autofocus>
          <br><br>
          <input type="password" name="password" class="text-center" placeholder="Password" required>
          <br><br>
          <input type="submit" value="Login">
        </form>
      </div>
    </div>
  </main>

</body>
</html>