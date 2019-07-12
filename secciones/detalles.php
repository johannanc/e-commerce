<?php

  $titulo = "Detalle de producto";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!-- Esto carga el HEAD -->
  <?php include ("../partials/head.php"); ?>

  <body>
  <!-- INICIO del CONTENEDOR -->
  <div class="contenedor">

  <!-- Esto carga el HEADER -->
  <?php include ("../partials/header.php"); ?>

  <!-- INICIO DE DETALLE DE PRODUCTOS -->
  <div class="products_container">

    <div class="product_container">
      <div class="product_imagen">
          <a href="../index.php"><img src="../img/sweaterwhite.jpg" alt="photo"></a>
      </div>
      <div class="product_cloth">
          Sweater Winter <h5> Frente </h5>
      </div>
    </div>

    <div class="product_container">
      <div class="product_imagen">
          <a href="../index.php"><img src="../img/whiteback.jpg" alt="photo"></a>
      </div>
      <div class="product_cloth">
          Sweater Winter <h5> Espalda </h5>
      </div>
    </div>

    <div class="product_container">

      <div class="product_cloth">
          Sweater Winter
      </div>
      <div class="product_precio">
        $2890
      </div>
      <div class="product_descripcion">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Aliquam vitae mollis dolor, sit amet consectetur lacus.
      Cras tincidunt in ipsum at mollis.
      Curabitur tempus nunc vel dolor vehicula eleifend.
      In eget urna eget eros feugiat aliquam.

      </div>

      <div class="product_extra_container">
        <h3> Color </h3>
<div class="product_color">
</div>
<div class="product_color1">
</div>
      </div>

      <div class="product_extra_container1">
        <h3> Talle </h3>
<div class="product_talle">
  <h4> 1 </h4>
</div>

<div class="product_talle1">
  <h4> 2 </h4>
</div>

<div class="product_talle2">
<h4> 3 </h4>
</div>
      </div>

      <div class="product_botton_buy">
      <a class="hypervinc_comprar" href="registro.php">Comprar</a> <br>
      </div>
      <div class="product_botton_fav">
      <a class="hypervinc_favoritos" href="proximamente.php">Mis favoritos</a> <br>
      </div>

  </div>
</div>

  <!-- FIN DE DETALLE DE PRODUCTOS -->

  <!-- Esto carga el FOOTER -->
  <?php include ("../partials/footer.php"); ?>
  
  </div>
  <!-- FIN del CONTENEDOR -->
</body>
</html>

