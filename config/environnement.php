<?php
$session=TRUE;
$cookie=TRUE;
$test_inter=TRUE;
if($session){
  session_start();
}
if($cookie){
  cookie_start();
}

if(!$test_inter){
  require_once ('main/main.php');
}
