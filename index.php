<?php

  $titulo = "HOME - Bienvenido";

?>

<!DOCTYPE html>
<html>
  <!-- Esto carga el HEAD -->
  <?php include ("partials/head-index.php"); ?>

<!-- INICIO del BODY -->
  <body>
  <!-- INICIO del CONTENEDOR -->
  <div class="contenedor">

  <!-- Esto carga el HEADER -->
  <?php include ("partials/header-index.php"); ?>

  <!-- INICIO del BANNER -->
  <section class="banner">
    <div class="banner-content">
      <h1>Bienvenidos a VASANJOHEL </h1>
      <a href="#">Ver articulos</a>
    </div>
  </section>
  <!-- FIN del BANNER -->


  <!-- INICIO DE PRODUCTOS DE MUESTRA-->
  <div class="products_container">

    <div class="product_container">
      <div class="product_imagen">
          <a href="index.php"><img src="img/sweaterwhite.jpg" alt="photo"></a>
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
          <a href="index.php"><img src="img/camisabrickfuxia.jpg" alt="photo"></a>
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
           <a href="index.php"><img src="img/chaleco.jpg" alt="photo"></a>
       </div>
       <div class="product_descripcion">
           Chaleco Alaska
       </div>
       <div class="product_precio1">
         $2100
       </div>
     </div>
  </div>
  <!-- FIN DE PRODUCTOS MUESTRA -->

  <!-- Esto carga el FOOTER -->
  <?php include ("partials/footer-index.php"); ?>

  </div>
  <!-- FIN del CONTENEDOR -->
  </body>
<!-- FIN del BODY -->
</html>