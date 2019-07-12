<?php
$titulo = "Login";

$errorMessage = "";
$hayErrores = false;
$errores = 0;
$email = "";
$contrasenia = "";
/*if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
  echo "El email no tiene el formato correcto";
}*/


if($_POST){
$email = trim($_POST["email"]);
$contrasenia = trim($_POST["password"]);
//$confirmarcontrasenia = trim($_POST["contraseniaConfirmar"]);
  if ($contrasenia ==""){
    $errorMessage = "Completa la contraseña";
    $hayErrores = true;
  }
  if ($email == ""){
    $errorMessage = "Completar el email";
    $hayErrores = true;
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorMessage = "Email no válido";
    $hayErrores = true;
  }

  else if (strlen($contrasenia)<4)
  {
    $errorMessage = "La contraseña debe tener al menos 5 caracteres";
    $hayErrores = true;
  }

  $login = [
  "Email" => ["type" => "email", "placeholder" => "Ingrese su email", "value" => $email],
  "Contraseña" => ["type" => "password", "placeholder" => "Ingrese su contraseña", "value" => ""]
];

}


$login = [
  "Email" => ["type" => "email", "placeholder" => "Ingrese su email", "value" => $email],
  "Contraseña" => ["type" => "password", "placeholder" => "Ingrese su contraseña", "value" => ""]
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Esto carga el HEAD -->
<?php include ("../partials/head.php"); ?>

  <!-- INICIO del BODY -->
    <body>

    <!-- INICIO del CONTENEDOR -->
    <div class="contenedor">

  <!-- Esto carga el HEADER -->
  <?php include ("../partials/header.php"); ?>


    <!-- INICIO del LOGIN -->
    <section class="div_container">
      <div class="login_container">
        <h2 class="h2_login">Login</h2>
        <form class="formulario_login" action="login.php" method="post">
          <!-- Datos de login -->
          <?php foreach ($login as $datos => $dato): ?>
            <label class="label_login" for="<?= $dato["type"] ?>"><?= $datos ?></label> <br>
            <input class="input_login" id="<?= $dato["type"] ?>" type="<?= $dato["type"] ?>" name="<?= $dato["type"] ?>" value="<?= $dato["value"] ?>" placeholder="<?= $dato["placeholder"] ?>"> <br>
          <?php endforeach; ?>
          <span style="color: red;" ><?= $errorMessage ?></span> <br>
          <!-- Recordarme -->
          <label class="label_register" for="remember">Recordarme</label>
          <input class="input_login_checkbox" id="remember" type="checkbox" name="remember" value=""> <br>
          <!-- Boton login -->
          <button class="button_login" type="submit" name="register">Login</button>
        </form>
        <br>
        <a class="hypervinc_login" href="#">¿Olvidó su contraseña?</a> <br>
        <a class="hypervinc_login" href="registro.php">¿No está registrado?</a>
      </div>
    </section>
    <!-- FIN del LOGIN -->

    <!-- Esto carga el FOOTER -->
    <?php include ("../partials/footer.php"); ?>

    </div>
    <!-- FIN del CONTENEDOR -->
    </body>
</html>
