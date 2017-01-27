<?php
session_start();

//Si existe sesión recoge usuario.view, sino lo lleva a login.php
if (isset($_SESSION['usu_nombre'])) {
    require '../views/usuario.view.html';
} else {
    header('Location: login.php');
}

 ?>