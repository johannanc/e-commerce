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

  <!-- INICIO DE PRODUCTOS DE MUESTRA -->
  <div class="products_container">

    <div class="product_container">
      <div class="product_imagen">
          <a href="../index.php"><img src="../img/sweaterwhite.jpg" alt="photo"></a>
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
          <a href="../index.php"><img src="../img/camisabrickfuxia.jpg" alt="photo"></a>
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
           <a href="../index.php"><img src="../img/chaleco.jpg" alt="photo"></a>
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
           <a href="../index.php"><img src="../img/vestido.jpg" alt="photo"></a>
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
           <a href="../index.php"><img src="../img/jeanhigh.jpg" alt="photo"></a>
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
            <a href="../index.php"><img src="../img/camisaraya.jpg" alt="photo"></a>
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


  <!-- Esto carga el FOOTER -->
  <?php include ("../partials/footer.php"); ?>

  </div>
  <!-- FIN del CONTENEDOR -->
</body>
</html>
