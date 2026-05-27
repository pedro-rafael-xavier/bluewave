<?php

function get_solutions_menu(){
  $result = select_sql("SELECT * FROM solutions");
  return $result;
}

function get_specific_solutions($id){
  $result = select_sql_unique("SELECT * FROM solutions WHERE id=?", [$id]);
  return $result;
}

function get_solutions_list(){
  $result = select_sql("SELECT * FROM solutions");
  return $result;
}

function create_solutions($title, $text){
  idu_sql("INSERT INTO solutions (title, text) VALUES (?, ?)", [$title, $text]);
}

function edit_solutions($title, $text, $id){
  idu_sql("UPDATE solutions SET title=?, text=? WHERE id=?", [$title, $text, $id]);
}

function delete_solution($id){
  idu_sql("DELETE FROM solutions WHERE id=?", [$id]);
}

?>