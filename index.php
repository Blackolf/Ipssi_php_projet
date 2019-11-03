<?php
require_once ('main/main.php');
require_once ('main/commun.fun.php');
require_once ('config/routing.php');
require_once ('req/header.php');

// if(Dbb\connect()){
//   echo "connection réussi";
// }else {
//   echo "connection fail";
// }
$page = $_REQUEST['page'];


switch ($page) {
  case 'value':
    // code...
    break;

  default:
  getViews("loggin");
    break;
}

require_once ('req/footer.php');
