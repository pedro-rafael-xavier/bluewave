<?php

function get_highlights_home(){
  $result = select_sql("SELECT * FROM highlights WHERE show_in_home=1 LIMIT 6");
  return $result;
}

function get_highlights_page($page){
  $elements_per_page = 6;
  $ignore = ($page - 1) * $elements_per_page;
  $result = select_sql("SELECT * FROM highlights LIMIT ? OFFSET ?", [$elements_per_page, $ignore]);
  return $result;
}

function get_total_highlights(){
  $total = select_sql_unique("SELECT Count(*) as total FROM highlights")["total"];
  return $total;
}

function get_highlights_total_pages(){
  $total = get_total_highlights();
  $result = ceil($total / 6);
  return $result;
}

function get_specific_highlight($id){
  $result = select_sql_unique("SELECT * FROM highlights WHERE id=?", [$id]);
  return $result;
}

function get_highlights_list(){
  $result = select_sql("SELECT * FROM highlights");
  return $result;
}

function create_highlights($title, $text, $show_in_home, $image, $date){
  idu_sql("INSERT INTO highlights (title, text, show_in_home, image, date) VALUES (?, ?, ?, ?, ?)", [$title, $text, $show_in_home, $image, $date]);
}

function edit_highlights($title, $text, $show_in_home, $image, $date, $id){
  idu_sql("UPDATE highlights SET title=?, text=?, show_in_home=?, image=?, date=? WHERE id=?", [$title, $text, $show_in_home, $image, $date, $id]);
}

function delete_highlight($id){
  idu_sql("DELETE FROM highlights WHERE id=?", [$id]);
}

?>