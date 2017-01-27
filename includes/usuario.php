<?php session_start();

if (isset($_SESSION['usu_nombre'])) {
    require '../views/usuario.view.html';
} else {
    header('Location: login.php');
}

 ?>