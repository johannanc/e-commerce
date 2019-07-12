<?php

session_start();

if (isset($_COOKIE['userEmail'])) {
  $user = getByEmail($_COOKIE ['userEmail']);
  login($user);
}

function getAllUsers(){
return json_decode(file_get_contents('users.json'), true);
}


function getByEmail ($email){
  $allUsers = getAllUsers();

  foreach ($allUsers as $oneUser) {
    if ($oneUser['email'] == $email) {
     return $oneUser;
    }
  }

  return null;
}
function login ($user){

$_SESSION['userLoged'] = $user;
}

function isloged(){
return isset ($_SESSION['userLoged']);
}
 ?>
