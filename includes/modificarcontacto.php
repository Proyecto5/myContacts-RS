<?php session_start();

//Si existe un usuario le permite modificarlo, sino lo manda al login


if (isset($_SESSION['usu_nombre'])) {
	extract($_REQUEST);
	require '../views/modificarcontacto.view.php';

} else {
	header('Location: login.php');
}

?>