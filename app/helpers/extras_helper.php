<?php

function abbreviate($text, $characters){
  $result = substr(strip_tags($text), 0, $characters);
  return $result . "...";
}

?>