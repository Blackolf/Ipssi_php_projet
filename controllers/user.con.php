<?php

if(isset($_SESSION['user_id'])){
  $formMessage = "Connexion";

  if(isset($_POST['inscription'])){

  }

  if(isset($_POST['inscription'])){

  }

  if($_POST['user_pwd_conf']){

    // 1. inscript
    // 2. back
    $formMessage = "Inscription";

    if(clickOn('inscription')){

    }
    loggin($data);

  }else {
    // 1. inscript
    // 2. connection
    $formMessage = "Connexion";



  }

}

getView("loggin");
