<?php
/**
*function get user in table 'users'
*
*@param string $loggin
*@param string $password
*/

function getCategories(array $data) : boolean
{

  $req_sql=
  'SELECT id
  FROM `categories`
  WHERE id = :id '
  ;

  $req_sql->bindParam(':id' , $data['idCat']);

  return bdd_getData($req_sql)['id'];

}

/**
*function insert user in table 'users'
*
*@param string $loggin
*@param string $password
*/
function setCategories($data){
  if(getUser($data)){
    $msg = " ce nom d'utilisateur existe déjà ";
  }

  $req =
  'INSERT INTO `users` (`id`, `username`, `password`)
  VALUES (NULL, :loggin, :password);';

  $req->bindParam(':loggin' , $data['loggin']);
  $req->bindParam(':password' , md5($data['password']));

  bdd_execute($req);
  $msg = " inscription réussi";
  return $msg;
}

function searchCategories($search){

  $req_sql=
  'SELECT *
  FROM `categories`
  WHERE name LIKE "%:name%" '
  ;

  $req_sql->bindParam(':name' , $search);

  return bdd_getData($req_sql)['id'];

}

function checkDupliqueCategories($name){

  $req_sql=
  'SELECT *
  FROM `categories`
  WHERE name == :name '
  ;

  $req_sql->bindParam(':name' , $name);

  return bdd_getData($req_sql)['id'];

}
