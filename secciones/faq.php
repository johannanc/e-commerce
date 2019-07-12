<?php

$titulo = "FAQ - Preguntas frecuentes";

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

    <!-- INICIO del PREGUNTAS FRECUENTES -->
    <section class="question-container">
      <div class="link-inicio">
        <p>
          <a href="index.html">INICIO </a><i class="fas fa-arrow-right"></i> <strong>Preguntas frecuentes</strong>
        </p>
      </div>

      <h3>¿Cómo hago para comprar?</h3>
        <h4>9 pasos simples para tu compra exitosa!</h4>
          <ol type="1">
            <li>Navegá por las categorías y hacé click sobre el producto que te interese.</li>
            <li>Hacé click en el botón indicado para agregarlo a tu carrito de compras.</li>
            <li>Tu producto fue agregado. Si querés agregar más productos, podés seguir navegando y repetir el proceso. Cuando termines, accedé a tu carrito haciendo click en botón del margen superior derecho del sitio.</li>
            <li>Allí aparecerá el resumen de tu compra (producto y detalles del mismo). Verificá que el pedido sea correcto y hacé click en el botón indicado (Iniciar Compra) para avanzar con el pedido. Si querés agregar más productos hacé click en "Seguir Comprando".</li>
            <li>Para continuar es necesario ingresar tu correo electrónico. Si ya tenés una cuenta, ingresá.</li>
            <li>Seguí las instrucciones seleccionado cómo obtener tu pedido (envío a domicilio, sucursal de correo o retirar por un local VASANJOHEL) y completando los campos de información de facturación y envío), luego hacé click en el botón indicado para continuar.</li>
            <li>Seleccioná método de envío y medio de pago. Realizá una revisión del resumen de tu pedido y, en caso de tener cupón de descuento, ingresarlo. Si tenés algún comentario podes dejarlo en el recuadro inferior. Luego hacé click en "Pagar".</li>
            <li>Serás redirigido a una ventana de confirmación, ¡y listo! (Si elegiste pagar con un cupón de PagoFácil, RapiPago, etc., no olvides imprimir el voucher).</li>
            <li>Te mantendremos al tanto del estado de tu pedido por mail. Por cualquier duda, siempre podés contactarte a través de consultas@VASANJOHEL.com.ar.</li>
          </ol>

      <h3>¿Cómo sé cúal es mi talle?</h3>
      <p>
        En la descripción de cada producto podés ver el talle y podés averiguar cuál es el tuyo con la siguiente tabla de talles:
      </p>

      <div class="sizes-container">
        <img src="../img/tabla_deTalles.png" alt="tabla de talles">
      </div>

      <h3>¿Qué formas de pago puedo aprovechar para realizar mi compra?</h3>
      <p>
        Disponemos de los siguientes medios de pago:
      </p>
      <div class="pay-container">
        <img src="../img/pago-visa.png" alt="icono de pago con tarjeta visa">
        <img src="../img/pago-mastercard.png" alt="icono de pago con tarjeta mastercard.png">
        <img src="../img/pago-americanexpress.png" alt="icono de pago con tarjeta american express">
        <img src="../img/pago-paypal.png" alt="icono de pago con paypal">
        <img src="../img/pago-westerunion.png" alt="icono de pago con western union">
      </div>
    <h3>¿Cúal es el costo del envío?</h3>
      <p>
        El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra y si la compra supera los $3500, el envío corre por cuenta nuestra!!!
      </p>

      <h3>¿Cómo se realizan los envíos?</h3>
      <p>
        Trabajamos con <a href="#">seguimiento de envío</a> de:
      </p>
      <div class="oca-container">
        <img src="../img/logoOca.png" alt="envió por oca">
      </div>
      <h3>¿Dónde puedo recibir mi pedido?</h3>
      <p>
        Realizamos envíos a todo el país! También tenés la opción de comprar y retirar en <a href="#">nuestros locales</a>!
      </p>

      <h3>¿Cuánto tarda en llegar el pedido?</h3>
      <p>
        El tiempo de entrega dependerá del tipo de envío seleccionado. En general, la demora se encuentra entre 3 y 7 días hábiles luego de acreditado el pago.
      </p>

      <h3>¿Cuál es el plazo para realizar un cambio?</h3>
      <p>
        Puedes solicitar un cambio hasta 10 días luego de realizada la compra.
      </p>

      <h3>¿Qué debo hacer si el producto no llega en buen estado?</h3>
      <p>
        Ponte en contacto con nosotros a consultas@VASANJOHEL.com.ar indicando el número de pedido y motivos por los que queres realizar el cambio/devolucion y te indicaremos los pasos a seguir.
      </p>

      <h3>¿Querés vender VASANJOHEL?</h3>
      <p>
        Por compras mayoristas o franquicias, solicitar información a consultas@mishopbag.com.ar o deja los datos <a href="#">aquí</a> .
      </p>
      <p>
      <h3>¿Tenés alguna otra duda?</h3>
      <p>
        <a href="#">Contactanos</a> en consultas@VASANJOHEL.com.ar o al +54 11 955 3333
      </p>

      <div class="envio-icon">
        <i class="fas fa-shuttle-van fa-2x"></i><br>
        <strong>ENVÍO GRATIS</strong><br>
        Para compras de más de $3500
      </div>
    </section>
    <!-- FIN del PREGUNTAS FRECUENTES -->

    <!-- Esto carga el FOOTER -->
    <?php include ("../partials/footer.php"); ?>

    </div>
    <!-- FIN del CONTENEDOR -->
    </body>
</html>
