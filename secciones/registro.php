<!DOCTYPE html>

<?php

require_once("validacionFormulario.php");

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Link a la hoja de estilos propia -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Link a la hoja de estilos normalize.css -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Link a los iconos de FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Iconito de la pestania del navegador, favicon -->
    <link rel="icon" type="image/png" href="../img/favicon.ico">

    <!-- INICIO LINK A LA JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- FIN LINK A LA JQUERY -->

    <!-- INICIO LINK A LA BOOTSTRAPS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- FIN LINK A LA BOOTSTRAPS -->


    <title>Registro</title>
  </head>

  <body>
  <!-- INICIO del CONTENEDOR -->
  <div class="contenedor">

<!-- INICIO del HEADER -->
  <header>
    <!-- INICIO del contenedor HEADER -->
    <div class="header_container">
      <!-- INICIO contenedor del logo -->
      <div class="header_logo">
          <a href="../index.html"><img src="../img/logo.png" alt="imagen del logo"></a>
      </div>
      <!-- FIN contenedor del logo -->
      <!-- INICIO contenedor del menu -->
      <div class="header_nav">
        <ul>
          <li><a href="../index.html">Inicio</a></li>
          <li><a href="productos.html">Productos </a></li>
          <li><a href="proximamente.html">Ofertas </a></li>
          <li><a href="proximamente.html">Locales </li>
          <li><a href="proximamente.html">Nosotros </li>
          <li><a href="proximamente.html">Contacto </li>
        </ul>
      </div>
      <!-- FIN contenedor del menu -->
      <!-- INICIO contenedor de la barra de busqueda -->
      <div class="header_busqueda">
        <form class="header_busquedaForm" action="../index.html" method="post">
          <input class="header_busquedaInput" type="search" name="busqueda" value="" placeholder="Buscar productos...">
        </form>
      </div>
      <!-- FIN contenedor de la barra de busqueda -->
      <!-- INICIO contenedor de los iconos -->
      <div class="header_iconos">
        <ul class="header_ul">
          <li><a href="registro.php"><i class="fas fa-user-plus fa-2x"></i></a></li>
          <li><a href="login.php"><i class="fas fa-user fa-2x"></i></a></li>
          <li><a href="proximamente.html"><i class="fas fa-cart-arrow-down fa-2x"></i></a></li>
        </ul>
      </div>
      <!-- FIN contenedor de los iconos -->
    </div>
    <!-- FIN del contenedor HEADER -->
  </header>
  <!-- FIN del HEADER -->

    <!-- INICIO del FORMULARIO DE REGISTRO -->
    <section class="div_container">
      <div class="register_container"> <!-- container del registro -->
        <h2 class="h2_register">Crear cuenta</h2>
          <form class="" enctype="multipart/form-data" action="registro.php" method="post"> <!-- container del formulario -->

           <div class="form-group">
           <label for="">Nombre</label>
           <?php if(isset($error["nombre"])):?>
             <input type="text" name="nombre" class="form-control"  placeholder="Escribe tu nombre" value="">
              <?=$error["nombre"]?>
             <?php else: ?>
               <input type="text" name="nombre" class="form-control" placeholder= "Escribe tu nombre" value="<?=$nombreBien?>">
              <?php endif ?>
            <?=$errorNombre?>
          </div>

          <div class="form-group">
          <label for="">Apellido</label>
          <?php if(isset($error["apellido"])):?>
            <input type="text" name="apellido" class="form-control"  placeholder="Escribe tu apellido" value="">
             <?=$error["apellido"]?>
           <?php else: ?>
              <input type="text" name="apellido" class="form-control" placeholder= "Escribe tu apellido" value="<?=$apellidoBien?>">
             <?php endif ?>
           <?=$errorApellido?>
         </div>

         <div class="form-group">
         <label for="">Usuario</label>
         <?php if(isset($error["usuario"])):?>
           <input type="text" name="usuario" class="form-control"  placeholder="Escribe tu usuario" value="">
            <?=$error["usuario"]?>
          <?php else: ?>
             <input type="text" name="usuario" class="form-control" placeholder= "Escribe tu usuario" value="<?=$usuarioBien?>">
            <?php endif ?>
          <?=$errorUsuario?>
        </div>

          <div class="form-group">
          <label for="formGroupExampleInput2">Correo</label>
          <?php if(isset($error["email"])): ?>
          <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Escribe tu email" value="">
            <?= $error["email"]?>
          <?php else: ?>
            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Escribe tu email" value="<?=$emailBien?>">
          <?php endif ?>
          <?= $errorEmail ?>
        </div>
        <!-- PAIS E IMAGEN -->


        <div class="form-group">
        <label for="formGroupExampleInput2" name="password">Contraseña</label>
        <?php if(isset($error["password"])):?>
        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Escribe tu contraseña" value="">
          <?=$error["password"]?>
        <?php else: ?>
        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Escribe tu contraseña" value="<?php $apellidoBien?>">
        <?php endif ?>
        <?=$errorPassword?>
        </div>

        <div class="form-group">
        <label for="formGroupExampleInput2">Confirmar Contraseña</label>
        <input type="password" name="confirmarPassword" class="form-control" id="formGroupExampleInput2" placeholder="Confirma tu contraseña" value="">
        </div>

        <div class="form-group">
            <label class="" for="foto">Seleccione imagen de perfil</label>
            <?php if(isset($error["foto"])): ?>
            <input class="" type="file" name="foto" value="">
            <?=$error["foto"]?>
            <?php else: ?>
            <input class="" type="file" name="foto" value="<?php $fotoBien ?>">   <!-- -->
            <?php endif ?>
            <?=$errorFoto ?>
        </div>

            <div class="form-check mb-2 mr-sm-2">
            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
            <label class="form-check-label" for="inlineFormCheck">Recordarme</label>
          </div>

           <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-sign-in-alt"></i>Registrarme</button>
        </form>
        <a class="hypervinc_register" href="login.html">¿Ya está registrado?</a><br>
      </div>
    </section>
    <!-- FIN del FORMULARIO DE REGISTRO -->

    <!-- INICIO del FOOTER -->
    <footer>
      <div class="footer_container">
      <!-- Contenedor de todo el footer -->
        <div class="footer_ayuda">
        <!-- Contenedor de la parte AYUDA del footer -->
              <ul class="footer_ul">
                <!-- Lista de elementos de la parte AYUDA del footer -->
                <li class="footer_titulos">AYUDA</li>
                <li><a href="faq.html">Preguntas frecuentes</a></li>
                <li><a href="proximamente.html">Promociones y descuentos</li><br>
                <li><a href="proximamente.html">Medios de pago</li>
                <li class="footer_iconos">
                    <a href="#"><i class="fab fa-cc-visa fa-2x"></i></a>
                    <a href="#"><i class="fab fa-cc-diners-club fa-2x"></i></a>
                    <a href="#"><i class="fab fa-cc-paypal fa-2x"></i></a>
                    <a href="#"><i class="far fa-credit-card fa-2x"></i></a>
                </li>
              </ul>
        </div>

        <div class="footer_miCuenta">
        <!-- Contenedor de la parte MI CUENTA del footer -->
          <ul class="footer_ul">
          <!-- Lista de elementos de la parte MI CUENTA del footer -->
                <li class="footer_titulos">MI CUENTA</li>
                <li><a href="proximamente.html">Estado de mi pedido</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="registro.html">Registrarse</a></li>
                <li><a href="#">Recuperar contraseña</a></li>
                <li><a href="perfil.html">Mi perfil</a></li>
          </ul>
        </div>

        <div class="footer_social">
        <!-- Contenedor de la parte VISITANOS del footer -->
          <ul class="footer_ul">
          <!-- Lista de elementos de la parte VISITANOS del footer -->
                <li class="footer_titulos">VISITANOS</li>
                <li>Suscribite al newsletter:</li>
                <li>
                  <form class="footer_newsletter" action="../index.html" method="post">
                    <input type="email" name="email" value="" placeholder="Ingresa tu mail">
                  </form>
                </li><br>
                <li class="footer_iconos"> Seguinos en
                  <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="http://twitter.com" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                </li>
          </ul>
        </div>

        <div class="footer_contacto">
        <!-- Contenedor de la parte DIRECCIONES del footer -->
              <ul class="footer_ul">
              <!-- Lista de elementos de la parte DIRECCIONES del footer -->
                <li class="footer_marca"><a href="../index.html"><img src="../img/logo.png" alt="imagen del logo"></a></li>
                <li>VISITÁ NUESTRO<strong> SHOWROOM </strong><br></li>
                <li>de Lunes a Viernes de 9.00 a 18.00 hs</li><br>
                <li><i class="fas fa-home"></i> Leyden 354, Buenos Aires | Argentina</li>
                <li><i class="fas fa-phone"></i><a href="callto:0054119553333"> +54(11) 9555 3333</a></li>
                <li><i class="fas fa-envelope"></i><a href="mailto:hello@vasanjohel.com"> hello@vasanjohel.com</a></li>
              </ul>
        </div>
    </div>
        <div class="footer_creditos">
          <p>© 2019<strong>
          </strong> - Grupo 4 para <strong>Digital House</strong> - FullStack</p>
        </div> <!--END footer_creditos -->
    </footer>
    <!-- FIN del FOOTER -->
  </div>
  <!-- FIN del CONTENEDOR -->
</body>
</html>
