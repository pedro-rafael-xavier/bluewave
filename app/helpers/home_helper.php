<?php

function get_home(){
  $result = select_sql_unique("SELECT * FROM home");
  return $result;
}

function edit_home($title, $subtitle, $text){
  idu_sql("UPDATE home SET title=?, subtitle=?, text=?", [$title, $subtitle, $text]);
}

?>