<?php session_start();

if (isset($_SESSION['usu_nombre'])) {
    header('Location: usuario.php');
} else {
    header('Location: login.php');
}

 ?>