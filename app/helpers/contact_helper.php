<?php

function get_contact_menu(){
  $result = select_sql("SELECT * FROM contact");
  return $result;
}

function get_contact(){
  $result = select_sql_unique("SELECT * FROM contact");
  return $result;
}

function edit_contact($address, $mobile, $fax, $email, $tax, $gps, $map_url, $linkedin, $instagram, $facebook){
  idu_sql("UPDATE contact SET address=?, mobile=?, fax=?, email=?, tax=?, gps=?, map_url=?, linkedin=?, instagram=?, facebook=?", [$address, $mobile, $fax, $email, $tax, $gps, $map_url, $linkedin, $instagram, $facebook]);
} 

?>