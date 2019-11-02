<?php
/**
*function get user in table 'users'
*
*@param string $loggin
*@param string $password
*/

function getPosts(array $data) : boolean
{

  $req_sql=
  'SELECT id
  FROM `posts`
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
function insertPosts($data){

  $req =
  'INSERT INTO `posts` (`id`, `imagePath`, `title`, `content`, `idCategory`, `idUser`)
  VALUES (NULL, :image, :title, :centent, :idCategory, :idUser);';


  $req->bindParam(':image' , $data['image']);
  $req->bindParam(':title' , $data['title']);
  $req->bindParam(':centent' , $data['centent']);
  $req->bindParam(':idCategory' , $data['idCategory']);
  $req->bindParam(':idUser' , $_SESSIoN['idUser']);

  bdd_execute($req);
  $msg = " inscription réussi";
  return $msg;
}

function searchPosts($search){

  $req_sql=
  'SELECT *
  FROM `posts`
  WHERE name LIKE "%:name%" '
  ;

  $req_sql->bindParam(':name' , $search);

  return bdd_getData($req_sql)['id'];


}
