<?php

function get_about_menu(){
  $result = select_sql("SELECT * FROM about");
  return $result;
}

function get_specific_about($id){
  $result = select_sql_unique("SELECT * FROM about WHERE id=?", [$id]);
  return $result;
}

function get_about_list(){
  $result = select_sql("SELECT * FROM about");
  return $result;
}

function create_about($title, $text){
  idu_sql("INSERT INTO about (title, text) VALUES (?, ?)", [$title, $text]);
}

function edit_about($title, $text, $id){
  idu_sql("UPDATE about SET title=?, text=? WHERE id=?", [$title, $text, $id]);
}

function delete_about($id){
  idu_sql("DELETE FROM about WHERE id=?", [$id]);
}

?>