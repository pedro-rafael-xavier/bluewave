<?php

function get_partners_menu(){
  $result = select_sql("SELECT * FROM partners");
  return $result;
}

function get_partners_list(){
  $result = select_sql("SELECT * FROM partners");
  return $result;
}

function get_specific_partner($id){
  $result = select_sql_unique("SELECT * FROM partners WHERE id=?", [$id]);
  return $result;
}

function create_partners($partner_name, $image, $size){
  idu_sql("INSERT INTO partners (partner_name, image, size) 
  VALUES (?, ?, ?)", [$partner_name, $image, $size]);
}

function edit_partners($partner_name, $image, $size, $id){
  idu_sql("UPDATE partners SET partner_name=?, image=?, size=? WHERE id=?", [$partner_name, $image, $size, $id]);
}

function delete_partner($id){
  idu_sql("DELETE FROM partners WHERE id=?", [$id]);
}

?>