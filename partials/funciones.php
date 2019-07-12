<?php

function validarRegistro($datos) {
  $errores = [];

  $nombre = trim($datos["nombre"]);
  $user = trim($datos["user"]);
  $country = trim($datos["country"]);
  $email = trim($datos["email"]);
//  $imagen = $_FILES["profile_image"]["name"],
  $contrasenia = trim($datos["contrasenia"]);
  $hashContrasenia = password_hash($contrasenia, PASSWORD_DEFAULT);
  $repContrasenia = trim($datos["passwordconfirm"]);

  //VALIDACION DE CADA DATO
  if ($nombre == "") {
    $errores["nombre"] = "Falta el nombre completo";
  }

  if($user == ""){
    $errores["user"] = "Completar nombre de usuario";
  } else if(existeUsername($user)){
    $errores["user"] = "El usuario ya se encuentra registrado.";
  }

  if ($country == "") {
    $errores["country"] = "Ingresa el pais";
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores["email"] = "Email no es válido";
  } else if(existeUsuario($email)){
    $errores["email"] = "El email ya se encuentra registrado.";
  }

  if ($contrasenia ==""){
    $errores["password"] = "Completa la contraseña";
  } else if (strlen($contrasenia)<5) {
    $errores["password"] = "La contraseña debe tener al menos 5 caracteres";
  } else if($contrasenia != $repContrasenia){
    $errores["password"] = "Las contraseñas no coinciden";
  }

  //

  // if(isset($_FILES["profile_image"])){
  //   if($_FILES["profile_image"]["error"] === UPLOAD_ERR_OK){
  //     $nombreFoto = $_FILES["profile_image"]["name"];
  //     $origen = $_FILES["profile_image"]["tmp_name"];
  //     $ext = pathinfo($nombreFoto,PATHINFO_EXTENSION);
  //
  //     $destino = "";
  //     $destino = $destino."../imgUsuarios/";
  //     $destino = $destino.$nombre."fotodeperfil.".$ext;
  //     move_uploaded_file($origen,$destino);
  //     $errorFoto = "archivo subido con exito";
  //   }
  // }else{
  //   $ext = pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
  //   if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") { //me fijo que la extensión del archivo sea correcta
  //     $errorFoto = "El archivo debe ser jpg, jpeg o png";
  //   }
  //     $hayErrores = true;
  // }


  //

  return $errores;
} // corregida

function armarUsuario() {
  $usuario = [
    "nombre" => trim($_POST["nombre"]),
    "user" => trim($_POST["user"]),
    "pais" => trim($_POST["country"]),
    "email" => trim($_POST["email"]),
    "imagen" => $_FILES["profile_image"]["name"],
    "password" => password_hash($_POST["contrasenia"], PASSWORD_DEFAULT),
  ];
  return $usuario;
}

function guardarUsuario($usuario) {
  $json = file_get_contents("../jsonUsuarios.json");
  $toArray = json_decode($json, true);
  $toArray["usuarios"][] = $usuario;
  $json = json_encode($toArray, JSON_PRETTY_PRINT);
  file_put_contents("jsonUsuarios.json", $json);
}

function buscarUsuarioPorEmail($email) {
  $json = file_get_contents("../jsonUsuarios.json");
  $toArray = json_decode($json, true);
  $usuarios = $toArray["usuarios"];

  foreach ($usuarios as $usuario) {
    if($email == $usuario["email"]){
      return $usuario;
    }
  }
  return null;
}

function buscarUsuarioPorUser($user) {
  $json = file_get_contents("../jsonUsuarios.json");
  $toArray = json_decode($json, true);
  $usuarios = $toArray["usuarios"];

  foreach ($usuarios as $usuario) {
    if($user == $usuario["user"]){
      return $usuario;
    }
  }
  return null;
}

function existeUsuario($email) {
  return buscarUsuarioPorEmail($email) !== null;
}

function existeUsername($user) {
  return buscarUsuarioPorUser($user) !== null;
} // corregido

function loguearUsuario($email) {
  if(isset($_COOKIE["email"])){
    $_SESSION["email"] = $_COOKIE["email"];
  } else {
    $_SESSION["email"] = $email;
  }

  if(isset($_POST["recordame"])) {
    setcookie("email", $email, time()+3600);
  }
}


?>
