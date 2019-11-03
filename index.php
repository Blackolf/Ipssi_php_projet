<?php
require_once ('config/routing.php');
require_once ('req/header.php');

if(!isset($_REQUEST['page'])){
  $_REQUEST['page']='loggin';
}

$page=$_REQUEST['page'];

if(isset($_REQUEST['action'])){
  $action=$_REQUEST['action'];

  switch ($action) {
    case 'connect':
      getController("user");
      break;
  }
}

if(isset($_SESSION['user_id']) == true ){
  switch ($page) {
    case 'Accueil':
    getView("Accueil");

    break;

    case 'value':
    break;

    case 'value':
    break;

    case 'value':
    break;

    case "loggin";
    default:
    break;
  };

}else {
  getController("user");
}


require_once ('req/footer.php');
