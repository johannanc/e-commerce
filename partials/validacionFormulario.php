<?php
$continentes = [
  "América del Sur" => ["Argentina", 
                        "Bolivia", 
                        "Brasil", 
                        "Chile", 
                        "Colombia", 
                        "Perú", 
                        "Venezuela"],
  "América del Norte" => ["Alaska", 
                          "Canadá", 
                          "Estados Unidos"],
  "Europa" => ["Alemania", 
               "España",
               "Grecia", 
               "Italia", 
               "Portugal", 
               "Reino Unido"],
  "Asia" => ["Armenia", 
             "China", 
             "Corea del Sur", 
             "India", 
             "Rusia", 
             "Japón"],
  "Oceanía" => ["Australia",
                "Nueva Zelanda",
                "Papúa Nueva Guinea"]

];

$nombre = "";
$apellido = "";
$email = "";
$pais = "";
$contrasenia = "";
$repContrasenia = "";
$user = "";
$errorFoto = "";

$registro = [
  "Nombre" => [
    "name" => "firstname",
    "type" => "text",
    "value" => $nombre,
    "placeholder" =>"Escriba su nombre aquí"
    ],
  "Apellido" => [
    "name" => "lastname",
    "type" => "text",
    "value" => $apellido,
    "placeholder" =>"Escriba su apellido aquí"
    ],
  "Usuario" => [
    "name" => "user",
    "type" => "text",
    "value" => $user,
    "placeholder" => "Escriba aquí su usuario"
    ],
  "Email" => [
    "name" => "email",
    "type" => "email",
    "value" => $email,
    "placeholder" =>"Escriba su nombre aquí"
    ],
  "pais" => "",
  "imagen" => "",
  "Contraseña" => [
    "name" => "password",
    "type" => "password",
    "value" => $contrasenia,
    "placeholder" =>"Escriba su contraseña aquí"
    ],
  "Confirme su contraseña" => [
    "name" => "passwordconfirm",
    "type" => "password",
    "value" => $repContrasenia,
    "placeholder" =>"Escriba su nombre aquí"
    ]
];

if ($_POST) {

  $nombre = trim($_POST["firstname"]);
  $apellido = trim($_POST["lastname"]);
  $email = trim($_POST["email"]);
  $user = trim($_POST["user"]);
  $pais = trim($_POST["country"]);
  $contrasenia = trim($_POST["password"]);
  $hashContrasenia = password_hash($contrasenia, PASSWORD_DEFAULT);
  $repContrasenia = $_POST["passwordconfirm"];

  $registro = [
  "Nombre" => [
    "name" => "firstname",
    "type" => "text",
    "value" => $nombre,
    "placeholder" =>"Escriba su nombre aquí"
    ],
  "Apellido" => [
    "name" => "lastname",
    "type" => "text",
    "value" => $apellido,
    "placeholder" =>"Escriba su apellido aquí"
    ],
  "Usuario" => [
    "name" => "user",
    "type" => "text",
    "value" => $user,
    "placeholder" => "Escriba aquí su usuario"
    ],
  "Email" => [
    "name" => "email",
    "type" => "email",
    "value" => $email,
    "placeholder" =>"Escriba su nombre aquí"
    ],
  "pais" => "",
  "imagen" => "",
  "Contraseña" => [
    "name" => "password",
    "type" => "password",
    "value" => $contrasenia,
    "placeholder" =>"Escriba su contraseña aquí"
    ],
  "Confirme su contraseña" => [
    "name" => "passwordconfirm",
    "type" => "password",
    "value" => $repContrasenia,
    "placeholder" =>"Escriba su nombre aquí"
    ]
];

  $count = 0; //contador que lleva la cuenta de las fallas en las validaciones

  //VALIDACIONES CONTRASEÑA, NOMBRE, APELLIDO, EMAIL, PAÍS, ARCHIVO

  //REGISTRAR
  /* REGISTRO DE LA IMAGEN */
  if ($_FILES) {
    if ($_FILES["profile_image"]["error"] != 0) { //me fijo si hubo error al cargar el archivo
      $errorFoto = "Hubo un error al cargar el archivo";
      $count++;
    } else {
      $ext = pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
      if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") { //me fijo que la extensión del archivo sea correcta
        $errorFoto = "El archivo debe ser jpg, jpeg o png";
        $count++;
      } else { //ya no hay más errores creo
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], "../imgUsuarios/".$_FILES["profile_image"]["name"].".".$ext); //Las imagenes se guardan tipo archivo.jpg.jpg así con doble extensión :C
      }
    }

  }
  /* REGISTRO DE LOS DATOS */
  if ($count == 0) { //llamé $count al contador que me dice si se produjo algún error en las validaciones
    $datosUsuario = [
      "nombre" => $nombre,
      "apellido" => $apellido,
      "email" => $email,
      "pais" => $pais,
      "contrasenia" => $hashContrasenia,
      "imagen" => $_FILES["profile_image"]["name"]
      ];

    $json = file_get_contents("../jsonUsuarios.json"); //recupero el archivo
    $jsonUsuarios = json_decode($json, true); //lo transformo de json a array
    $jsonUsuarios[] = $datosUsuario; //agrego info nueva
    $jsonUsuarios = json_encode($jsonUsuarios); //lo vuelvo json
    file_put_contents("../jsonUsuarios.json", $jsonUsuarios); //vuelvo a meter en el archivo
  }

  //REDIRECCIONAR
  header("Location:../index.html");exit;
}
?>