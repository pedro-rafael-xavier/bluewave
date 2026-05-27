<?php

function get_carousel(){
  $result = select_sql("SELECT * FROM carousel LIMIT 6");
  return $result;
}

function get_specific_carousel($id){
  $result = select_sql_unique("SELECT * FROM carousel WHERE id=?", [$id]);
  return $result;
}

function create_carousel($image){
  idu_sql("INSERT INTO carousel (image) VALUES (?)", [$image]);
}

function edit_carousel($image, $id){
  idu_sql("UPDATE carousel SET image=? WHERE id=?", [$image, $id]);
}

function delete_carousel($id){
  idu_sql("DELETE FROM carousel WHERE id=?", [$id]);
}

?>