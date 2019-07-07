<!DOCTYPE html>
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
    <title>Productos</title>
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
          <li><a href="registro.html"><i class="fas fa-user-plus fa-2x"></i></a></li>
          <li><a href="login.html"><i class="fas fa-user fa-2x"></i></a></li>
          <li><a href="proximamente.html"><i class="fas fa-cart-arrow-down fa-2x"></i></a></li>
        </ul>
      </div>
      <!-- FIN contenedor de los iconos -->
    </div>
    <!-- FIN del contenedor HEADER -->
  </header>
  <!-- FIN del HEADER -->

  <!-- INICIO DE PRODUCTOS DE MUESTRA -->
  <div class="products_container">

    <div class="product_container">
      <div class="product_imagen">
          <a href="../index.html"><img src="../img/sweaterwhite.jpg" alt="photo"></a>
      </div>
      <div class="product_descripcion">
          Sweater Winter
      </div>
      <div class="product_precio1">
        $2890
      </div>
    </div>

    <div class="product_container">
      <div class="product_imagen">
          <a href="../index.html"><img src="../img/camisabrickfuxia.jpg" alt="photo"></a>
      </div>
      <div class="product_descripcion">
          Camisa Americana
      </div>
      <div class="product_precio1">
        $2300
      </div>
     </div>

     <div class="product_container">
       <div class="product_imagen">
           <a href="../index.html"><img src="../img/chaleco.jpg" alt="photo"></a>
       </div>
       <div class="product_descripcion">
           Chaleco Alaska
       </div>
       <div class="product_precio1">
         $2100
       </div>
     </div>

     <div class="product_container">
       <div class="product_imagen">
           <a href="../index.html"><img src="../img/vestido.jpg" alt="photo"></a>
       </div>
       <div class="product_descripcion">
           Vestido Liso
       </div>
       <div class="product_precio1">
         $2890
       </div>
     </div>

     <div class="product_container">
       <div class="product_imagen">
           <a href="../index.html"><img src="../img/jeanhigh.jpg" alt="photo"></a>
       </div>
       <div class="product_descripcion">
           Jean High
       </div>
       <div class="product_precio1">
         $2300
       </div>
      </div>

      <div class="product_container">
        <div class="product_imagen">
            <a href="../index.html"><img src="../img/camisaraya.jpg" alt="photo"></a>
        </div>
        <div class="product_descripcion">
            Camisa Rayada
        </div>
        <div class="product_precio1">
          $2100
        </div>
      </div>
  </div>
  <!-- FIN DE PRODUCTOS MUESTRA -->



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