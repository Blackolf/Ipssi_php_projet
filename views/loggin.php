<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> TP 2 </title>
</head>
<style media="screen">
.formulaire{
  display: flex;
  flex-direction: column;
  margin: auto  ;
  padding: 15px;
  width: 300px;
  position: relative;
  top : 250px;
  border: 1px solid #000000;
  border-radius: 5px
}

</style>
<body>
  <form class="formulaire" action="index.php" method="post">
    User Name : <input type="text" id='user_login' name="user_login" value="<?= (isset($_COOKIE['user_login']))?$_COOKIE['user_login']:null; ?>" required>
    Passeword : <input type="password" id='user_pwd' name="user_pwd" value="" required>
    <p>
      <input type="submit" name="connect" value="Valide">
      <button id='reset' type="reset">reset</button>
      <input type="checkbox" name="remember" <?= (isset($_COOKIE['user_login']))?'checked':null; ?>>remember username
    </p>

  </form>
  <h3>
    <?=(isset($msg))?$msg:null; ?>
  </h3>

</body>


</html>