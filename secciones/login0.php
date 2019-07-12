<?php
require_once 'funciones.php';

if (isLoged()) {
  header('location: profile.php');
}

if ($_POST) {
/*$userInDB = 'nat@gmail.com';
$passInDB = '1234';*/

$emailFromPost = trim ($_POST['email']);
$passFromPost = trim ($_POST['password']);

$userFound = getByEmail($emailFromPost);

if ($userFound) {

    //almaceno la cookie
  if (isset($_POST['remember'])) {
    setcookie('userEmail', $emailFromPost, time() + 3600);
  }

    //preguntamos si la contraseñacoincide
  if ($userFound['password'] == $passFromPost) {

   //logueo y redirecciono
  login($userFound);
  header('location: profile.php');
  exit;

}else {
  echo "La contraseña no coincide";
}

}else {
  echo "El email no esta registrado";
}
}
/*echo "<pre>";
var_dump($userFound);
exit;*/

/*$userFromPost = trim ($_POST['email']);
$passFromPost = trim ($_POST['password']);*/

/*if ($_POST['email'] == $userInDB && $_POST['password'] == $passInDB) {
*/


/*foreach ($usersFromJSON= as $oneUser) {
  if ($oneUser['email'] == $emailFromPost) {
    $userFound = $oneUser;
  }else {
    $userFound = 'No hay usuario con ese email';
  }
}*/

/*if ($userFromPost == $userInDB && $passFromPost == $passInDB) {

}
    session_start();

    $_SESSION ['userLoged'] = $_POST;

  header('location: profile.php');
  exit;

}else {
  echo "Error de credenciales";
}*/

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de login</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <div>
        <label>Email:</label>
        <input type="text" name="email" value="">
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="remember"> Recordar
      </div>
      <div>
       <label>
         <input type="checkbox" name="" value="">
       </label>
      </div>
      </div>
      <button type="submit">Ingresar</button>
    </form>
  </body>
</html>
