<?php session_start();

if (isset($_SESSION['usu_nombre'])) {
    header('Location: includes/usuario.php');
} else {
    header('Location: includes/login.php');
}

 ?>