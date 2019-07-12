<?php

require_once 'funciones.php';

if (!isLoged()) {
  header('location: login.php');
  exit;
}

  $user = $_SESSION['userLoged'];

var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina de Perfil</title>
  </head>
  <body>
    <h1>Bienvenida/o
    <? echo $user['name']?></h1>
    <p>Tu email es: <a href=""><?=$user['email']?> </a> </p>
      <a href="logout.php">Salir</a>
  </body>
</html>
