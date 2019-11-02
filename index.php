<?php
namespace TP {
  use TP\config\dbb ;
  require_once ('main/main.php');
  require_once ('config/routing.php');
  require_once ('req/header.php');
  require_once ('req/menu.php');




  Dbb\test1();

  // if(Dbb\connect()){
  //   echo "connection réussi";
  // }else {
  //   echo "connection fail";
  // }









  // echo $context;


  require_once ('req/footer.php');
}
