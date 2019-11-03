<?php

function safehtml($text){
  return htmlspecialchars($text);
}

function getView($page){
  include("views/".$page.".php");
}

function getController($page){
  include("controllers/".$page.".con.php");
}

function clickOn($button){
  return isset($_POST[$button]);
}
