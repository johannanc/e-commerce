<?php
session_start();
session_destroy();
setcookie('$userEmail','',-1);

header('location: loginja.php');
exit;


 ?>
