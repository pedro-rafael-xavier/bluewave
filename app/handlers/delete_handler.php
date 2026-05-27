<?php

$delete_modal = false;
$delete_data = [];

/** OPEN MODAL */

if(!empty($_GET['delete']) && !empty($_GET['type'])){
  $delete_modal = true;
  $delete_data = [
    'id'   => (int) $_GET['delete'],
    'type' => $_GET['type']
  ];
}

/** CONFIRM DELETE */
if(!empty($_GET['confirm_delete']) && !empty($_GET['type'])){
  $id   = (int) $_GET['confirm_delete'];
  $type = $_GET['type'];

  switch ($type) {
    case 'banner':
      delete_banner($id);
      $redirect = 'banners.php';
      break;

    case 'about':
      delete_about($id);
      $redirect = 'about.php';
      break;

    case 'news':
      delete_news($id);
      $redirect = 'news.php';
      break;

    case 'partner':
      delete_partner($id);
      $redirect = 'partners.php';
      break;

    case 'highlight':
      delete_highlight($id);
      $redirect = 'highlights.php';
      break;

    case 'solution':
      delete_solution($id);
      $redirect = 'solutions.php';
      break;

    case 'innovation':
      delete_innovation($id);
      $redirect = 'innovation.php';
      break;

    case 'carousel':
      delete_carousel($id);
      $redirect = 'home.php';
      break;

    default:
      $redirect = 'index.php';
  }

  header("Location: $redirect");
  exit;
}