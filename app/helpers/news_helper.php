<?php

function get_news_home(){
  $result = select_sql("SELECT * FROM news WHERE show_in_home=1 LIMIT 6");
  return $result;
}

function get_news_page($page){
  $elements_per_page = 6;
  $ignore = ($page - 1) * $elements_per_page;
  $result = select_sql("SELECT * FROM news LIMIT ? OFFSET ?", [$elements_per_page, $ignore]);
  return $result;
}

function get_news_list(){
  $result = select_sql("SELECT * FROM news");
  return $result;
}

function get_total_news(){
  $total = select_sql_unique("SELECT Count(*) as total FROM news")["total"];
  return $total;
}

function get_total_news_page(){
  $total = get_total_news();
  $result = ceil($total / 6);
  return $result;
}

function get_specific_news($id){
  $result = select_sql_unique("SELECT * FROM news WHERE id=?", [$id]);
  return $result;
}

function create_news($title, $text, $show_in_home, $image, $date){
  idu_sql("INSERT INTO news (title, text, show_in_home, image, date) VALUES (?, ?, ?, ?, ?)", [$title, $text, $show_in_home, $image, $date]);
}

function edit_news($title, $text, $show_in_home, $image, $date, $id){
  idu_sql("UPDATE news SET title=?, text=?, show_in_home=?, image=?, date=? WHERE id=?", [$title, $text, $show_in_home, $image, $date, $id]);
}

function delete_news($id){
  idu_sql("DELETE FROM news WHERE id=?", [$id]);
}

?>