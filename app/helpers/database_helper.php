<?php

$pdo = new PDO(
  "mysql:host=$db[host];dbname=$db[dbname];charset=utf8mb4;", 
  "$db[user]", 
  "$db[pass]"
);

$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

function select_sql($sql, $parameters = []){
  global $pdo;
  $query = $pdo->prepare($sql);
  $query->execute($parameters);
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

function select_sql_unique($sql, $parameters = []){
  global $pdo;
  $query = $pdo->prepare($sql);
  $query->execute($parameters);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function idu_sql($sql, $parameters = []){
  global $pdo;
  $query = $pdo->prepare($sql);
  $query->execute($parameters);
}

?>