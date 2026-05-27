<?php

session_start();
$user;

function user_login($login, $password){
  $user = select_sql_unique("SELECT * FROM backoffice WHERE login=?", [$login]);
  if(!empty($user) && password_verify($password, $user["password"])){
    $_SESSION["user"] = $user;
    idu_sql("UPDATE backoffice SET last_accessed_date=NOW() WHERE id=?", [$user["id"]]);
    header("Location: login.php");
  }
}

function verify_logged_user(){
  global $user;
  if(empty($_SESSION["user"])){header("Location: index.php");}
  else{$user = $_SESSION["user"];}
}

function logout(){
  session_destroy();
  header("Location: index.php");
}

?>