<?php

namespace TP\config\bdd{
  use TP\config\param as param;

  function test1(){
    echo "12313312123231";
  }
  function test2(){
    echo "56+".Config\Host();
    echo "123".Host();
  }

  function connect(){
    try {
      $connec= new PDO("mysql:host=".Host().";dbname=".datebase(),Login(),password());
      return $connec;
    } catch (PDOException $e) {
      echo "Erreur : ".$e->getMessage();
    }

  }

  function bdd_count($sql) : int {
    $database = connect();
    try {
      if(strpos("SELECT",$sql)){
        throw new \Exception("req SQL incorrectx", 1);
      }
      $req= $database->prepare($req_sql);
      $res= $req->execute();
      return $res->rowCount();

    } catch (\Exception $e) {
      echo "Erreur :".$e->Message();

    }
  }
}

function bdd_getData($req){
  $database = connect();
  try {
    if(strpos("SELECT",$sql)){
      throw new \Exception("req SQL incorrectx", 1);
    }
    $req= $database->prepare($req_sql);
    $res= $req->execute();
    return $res->fetchAll();

  } catch (\Exception $e) {
    echo "Erreur :".$e->Message();
  }

}

function bdd_execute($req) : void {
  $database = connect();
  try {
    $database ->beginTransaction();
    $req= $database->prepare($req_sql);
    $req->execute();
    $database->commit();
  } catch (\Exception $e) {
    $database->rollback();
    echo "Erreur :".$e->Message();
  }


}
