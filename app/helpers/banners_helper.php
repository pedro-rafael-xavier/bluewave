<?php

function get_banner($current_menu){
  $result = select_sql_unique("SELECT * FROM banners WHERE menu=?", [$current_menu]);
  return $result["image"];
}

function get_banners_list(){
  $result = select_sql("SELECT * FROM banners");
  return $result;
}

function get_specific_banner($id){
  $result = select_sql_unique("SELECT * FROM banners WHERE id=?", [$id]);
  return $result;
}

function create_banner($image){
  idu_sql("INSERT INTO banner (image) VALUES (?)", [$image]);
}

function edit_banner($image, $id){
  idu_sql("UPDATE banners SET image=? WHERE id=?", [$image, $id]);
}

function delete_banner($id){
  idu_sql("DELETE FROM banner WHERE id=?", [$id]);
}

?>