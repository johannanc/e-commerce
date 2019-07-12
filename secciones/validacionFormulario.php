<?php

//VARIABLES
$nombre = "";
$apellido = "";
$email = "";
$usuario = "";
$pais = "";
$password= "";
$confirmarPassword = "";
$foto = "";


//VARIABLES DE ERROR
$errorNombre = "";
$errorApellido = "";
$errorEmail = "";
$errorUsuario = "";
//$errorPais = "";
$errorPassword = "";
$errorConfirmarPassword = "";
$errorFoto = "";
$error = 0;

//VARIABLES SI NO HAY ERROR
$nombreBien = "";
$apellidoBien = "";
$usuarioBien = "";
$emailBien = "";
$fotoBien = "";


//FUNCION VALIDAR REGISTRO
function validarRegistro($datos){
$error = [];

$nombre = trim($datos["nombre"]);
$apellido = trim($datos["apellido"]);
$nombre = trim($datos["usuario"]);
$email = trim($datos["email"]);
//$pais = trim($datos["pais"]); es checkbox ver despues como validar.
$password = trim($datos["password"]);
$confirmarPassword = trim($datos["confirmarPassword"]);
$foto = $_FILES["foto"]["name"];

//VALIDO DATOS
if ($nombre==""){
  $error["nombre"] = "Completar tu nombre";
}
if ($apellido==""){
  $error["apellido"] = "Completar tu apellido";
}

if ($usuario ==""){
  $error["usuario"] = "Completar tu usuario";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $error["email"] = "El correo es invalido";
//}else if (existeUsuario($email)){
//  $error["email"] = "El email ya esta registrado";
}

if ($password ==""){
  $error["password"] = "Completa la contraseña";
}
else if (strlen($password)<5){
  $error["password"] = "La contraseña debe tener al menos 5 caracteres";
}
else if($password != $confirmarPassword){
  $error["password"] = "Las contraseñas no coinciden";
}

//VALIDO IMAGEN
$nombreFoto = $_FILES["foto"]["name"];
$archivo = $_FILES["foto"]["tmp_name"];

if ($_FILES["foto"]["error"] != 0) {
$error["foto"] = "Hubo un error al cargar el archivo";
}
else {
  $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
    $error["foto"]= "El archivo debe ser jpg, jpeg o png";
    } else {
      move_uploaded_file($_FILES["foto"]["tmp_name"], "archivo".$_FILES["foto"]["name"].".".$ext);
    return $error;
   }

}

}

//LLAMO A LA FUNCIÓN VALIDAR REGISTRO

if($_POST){
    $error = validarRegistro($_POST);

    $nombreBien = trim($_POST["nombre"]);
    $apellidoBien = trim($_POST["apellido"]);
    $usuarioBien = trim($_POST["usuario"]);
    $emailBien = trim($_POST["email"]);
    $fotoBien = $_FILES["foto"];
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    //CREAR USUARIOS - SI NO HAY ERRORES
    if(!$error){
        //llamé $count al contador que me dice si se produjo algún error en las validaciones
        $datosUsuario = [
          "nombre" => $nombre,
          "apellido" => $apellido,
          "email" => $email,
          "usuario" => $usuario,
          //"pais" => $pais,
          "password" => $hashPassword,
          "foto" => $_FILES["foto"]["name"]
          ];

        $json = file_get_contents("../jsonUsuarios.json"); //recupero el archivo
        $jsonUsuarios = json_decode($json, true); //lo transformo de json a array
        $jsonUsuarios[] = $datosUsuario; //agrego info nueva
        $jsonUsuarios = json_encode($jsonUsuarios); //lo vuelvo json
        file_put_contents("../jsonUsuarios.json", $jsonUsuarios); //vuelvo a meter en el archivo
      }

      //REDIRECCIONAR
    //  header("Location:../index.html");exit;
  }

?>
