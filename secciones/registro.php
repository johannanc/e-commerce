<?php
session_start();

$titulo = "Registrarse";
//require_once("../partials/validacionFormulario.php");
require_once("../partials/funciones.php");

// Primera vez cargo errores vacios:
$errorNombre = "";
$errorUser = "";
$errorCountry = "";
$errorEmail = "";
$errorFoto = "";
$errorContrasenia = "";
$errorRepContrasenia = "";
$hayErrores = false;
$errores = 0;

$nombreOk = "";
$userOk = "";
$countryOk = "";
$emailOk = "";




if ($_POST) {

  $errores = validarRegistro($_POST);
  $nombreOk = trim($_POST["nombre"]);
  $userOk = trim($_POST["user"]);
  $countryOk = trim($_POST["country"]);
  $emailOk = trim($_POST["email"]);

  //Si no hay errores
  if(!$errores){
    $usuario = armarUsuario();
    guardarUsuario($usuario);
    loguearUsuario($_POST["email"]);
    header("Location:../index.php");
    exit;
    }
  }

?>

<!DOCTYPE html>
<html>

  <!-- Esto carga el HEAD -->
  <?php include ("../partials/head.php"); ?>

  <body>
  <!-- INICIO del CONTENEDOR -->
  <div class="contenedor">

  <!-- Esto carga el HEADER -->
  <?php include ("../partials/header.php"); ?>

  <!-- INICIO del FORMULARIO DE REGISTRO -->
  <section class="div_container">
    <div class="register_container"> <!-- container del registro -->
      <h2 class="h2_register">Crear cuenta</h2>
      <form class="formulario_registro" action="registro.php" method="POST"> <!-- container del formulario -->

        <!-- Nombre -->
        <div class="">
               <label class="label_register" for="nombre">Nombre</label><br>
               <?php if(isset($errores["nombre"])): ?>
                 <input class="input_register" type="text" name="nombre" value=""><?= $errores["nombre"]?>
               <?php else: ?>
                 <input class="input_register" type="text" name="nombre" value="<?= $nombreOk ?>">
               <?php endif ?>
                <figure><?= $errorNombre ?></figure>
        </div>

        <!-- Usuario -->
        <div class="">
               <label class="label_register" for="user">Usuario</label><br>
               <?php if(isset($errores["user"])): ?>
                 <input class="input_register" type="text" name="user" value=""><?= $errores["user"]?>
               <?php else: ?>
                 <input class="input_register" type="text" name="user" value="<?= $userOk ?>">
               <?php endif ?>
               <figure><?= $errorUser ?></figure>
        </div>

        <!-- Pais -->
        <div class="">
               <label class="label_register" for="country">Pais</label><br>
               <?php if(isset($errores["country"])): ?>
                 <input class="input_register" type="text" name="country" value=""><?= $errores["country"]?>
               <?php else: ?>
                 <input class="input_register" type="text" name="country" value="<?= $countryOk ?>">
               <?php endif ?>
               <figure><?= $errorCountry ?></figure>
        </div>

        <!-- Email -->
        <div class="">
               <label class="label_register" for="">Email</label>
               <?php if(isset($errores["email"])): ?>
                 <input class="input_register" type="email" name="email" value=""><?= $errores["email"]?>
               <?php else: ?>
                 <input class="input_register" type="email" name="email" value="<?= $emailOk ?>">

             <?php endif ?>
              <figure><?= $errorEmail ?></figure>
        </div>

        <!-- Foto de perfil -->
        <div class="">
               <label class="label_register" for="profile_image">Foto de perfil</label><br><br>
               <input type="file" name="profile_image" value="">
               <figure><?= $errorFoto ?></figure>
               <br><br>
        </div>

        <!-- Contraseña -->
        <div class="">
               <label class="label_register" for="">Contraseña</label>
               <input class="input_register" type="password" name="contrasenia" value="">
               <?php if(isset($errores["password"])): ?>
                  <?= $errores["password"] ?>
               <?php endif ?>
               <?= $errorContrasenia ?>
        </div>

        <!-- Confirmar contraseña -->
        <div class="">
               <label class="label_register" for="">Confirmar Contraseña</label>
               <input class="input_register" type="password" name="passwordconfirm" value="">
        </div>

        <!-- Recordarme -->
        <div class="">
          <label for="">Recordarme</label>
          <input type="checkbox" name="recordame" value="1"><br>
          <br>
        </div>

        <!-- Boton enviar -->
        <div class="">
          <button type="submit" name="button"> Enviar </button><br><br>
        </div>

      </form>
        <!-- FIN del FORMULARIO DE REGISTRO -->

      <br>
      <a class="hypervinc_register" href="login.php">¿Ya está registrado?</a> <br>
    </div>
  </section>

  <!-- Esto carga el FOOTER -->
  <?php include ("../partials/footer.php"); ?>

  </div>
  <!-- FIN del CONTENEDOR -->
</body>
</html>