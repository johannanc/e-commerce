<?php

$titulo = "Mi perfil";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Esto carga el HEAD -->
<?php include ("../partials/head.php"); ?>

  <body>
    <div class="contenedor">

  <!-- Esto carga el HEADER -->
  <?php include ("../partials/header.php"); ?>

<!-- INICIO del PERFIL -->
    <div class="profile_container"> <!-- contenedor del perfil -->
      <h1>Mi perfil</h1>
      <h2>@kiraras</h2>
      <div class="info_profile_container">
        <div class="profile_img">
          <img src="../img/profile-img.jpg" alt="profile image">
          <a class="edit_profile" href="#">Editar <i class="fas fa-user-edit"></i></a>
        </div>
        <div class="profile_info">
          <div class="profile_title">
            <a class="edit_profile" href="#"><i class="fas fa-user-edit"></i></a>
            <h3>Datos personales</h3>
          </div>
          <ul class="p_list">
            <li><span>Nombre:</span> Kirara</li>
            <li><span>Apellido:</span> Siss</li>
            <li><span>Email:</span> kirara@gmail.com</li>
            <li><span>Direcciones guardadas:</span>
              <ul class="p_sublist">
                <li>Coronel Díaz 1765, 3°B, CABA</li>
                <li>Las Heras 3834, 4°C, CABA</li>
              </ul>
            </li>
          </ul>
          <h3>Historial de órdenes</h3>
          <ul class="p_list">
            <li><span>Número de orden 111</span> <!-- orden 2 -->
              <ul class="p_sublist"> <!-- datos de la orden 1 -->
                <li><span>Producto: </span> <a href="productos.html">Camisa Americana</a></li>
                <li><span>Fecha: </span>13/03/2019</li>
                <li><span>Estado: </span>Entregado</li>
              </ul>
            </li>
              <li> <span>Número de orden 110</span> <!-- orden 1 -->
                <ul class="p_sublist"> <!-- datos de la orden 2 -->
                  <li><span>Producto: </span><a href="productos.html">Sweater Winter</a></li>
                  <li><span>Fecha: </span>04/06/2018</li>
                  <li><span>Estado: </span>Cancelado</li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
<!-- FIN del PERFIL -->

<!-- Esto carga el FOOTER -->
<?php include ("../partials/footer.php"); ?>

</div>
  <!-- FIN del CONTENEDOR -->

  </body>
</html>
