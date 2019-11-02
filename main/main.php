<?php
echo $localPath=__dir__;
echo 'PHP_SELF : '.$_SERVER['PHP_SELF']."<br />";
echo 'SERVER_NAME : '.$_SERVER['SERVER_NAME']."<br />";
echo 'SERVER_ADDR : '.$_SERVER['SERVER_ADDR']."<br />";

$var= "0";
$content ="ERROR 404 : PAGE NO FOUND";
if(0){
  $array=array();
  $url=$_SERVER['REQUEST_URI'];
  $vars=explode("/",$url);
  for($i=0;$i<count($vars);$i++){
    $array["path".$i]=$vars[$i];
  }
  $content=var_dump($array);
  function getVarFromUrl(){
    $url=$_SERVER['REQUEST_URI'];
    list($page,$get)=explode("?",$url);
    $vars=explode("&",$get);
    $listVarGet=array();
    for($i=0;$i<count($vars);$i++){
      list($name,$val)=explode("=",$vars[$i]);
      $listVarGet[$name]=$val;
    }
    return $listVarGet;
  }
  $var= "1";
}





?>
