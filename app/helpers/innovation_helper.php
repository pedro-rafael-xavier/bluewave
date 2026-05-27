<?php

function get_innovation_menu(){
  $result = select_sql("SELECT * FROM innovation");
  return $result;
}

function get_specific_innovations($id){
  $result = select_sql_unique("SELECT * FROM innovation WHERE id=?", [$id]);
  return $result;
}

function get_innovations_list(){
  $result = select_sql("SELECT * FROM innovation");
  return $result;
}

function create_innovation($title, $text){
  idu_sql("INSERT INTO innovation (title, text) VALUES (?, ?)", [$title, $text]);
}

function edit_innovation($title, $text, $id){
  idu_sql("UPDATE innovation SET title=?, text=? WHERE id=?", [$title, $text, $id]);
}

function delete_innovation($id){
  idu_sql("DELETE FROM innovation WHERE id=?", [$id]);
}

?>