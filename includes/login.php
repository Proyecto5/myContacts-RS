<?php session_start();

//Si existe un usuario lo redirige a usuario.php, sino recoge login.view
if (isset($_SESSION['usu_nombre'])) {

    header('Location: usuario.php');

} else {
	require '../views/login.view.php';
}

?>