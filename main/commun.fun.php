<?php

function safehtml($text){
  return htmlspecialchars($text);
}


function getViews($page){
  include("view/".$page.".php");
}
