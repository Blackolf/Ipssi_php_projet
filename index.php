<?php
require_once ('main/main.php');
require_once ('config/routing.php');
require_once ('req/header.php');

if(Dbb\connect()){
  echo "connection réussi";
}else {
  echo "connection fail";
}

require_once ('req/footer.php');
