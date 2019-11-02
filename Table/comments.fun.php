<?php
/**
*function get user in table 'users'
*
*@param string $loggin
*@param string $password
*/

function getComments(array $data) : boolean
{

  $req_sql=
  'SELECT *
  FROM `Comments`
  WHERE id = :id '
  ;

  $req_sql->bindParam(':id' , $data['id']);

  return bdd_getData($req_sql)['id'];

}

/**
*function insert user in table 'users'
*
*@param string $loggin
*@param string $password
*/
function setComments($data){
  if(getUser($data)){
    $msg = " ce nom d'utilisateur existe déjà ";
  }

  $req =
  'INSERT INTO `users` (`id`, `content`, `idPost`)
  VALUES (NULL, :content, :idPost);';

  $req->bindParam(':content' , $data['content']);
  $req->bindParam(':idPost' , $data['idPost']);

  bdd_execute($req);
  $msg = " inscription réussi";
  return $msg;
}

function searchComments($search){

  $req_sql=
  'SELECT *
  FROM `Comments`
  WHERE name LIKE "%:name%" '
  ;

  $req_sql->bindParam(':name' , $search);

  return bdd_getData($req_sql)['id'];


}
