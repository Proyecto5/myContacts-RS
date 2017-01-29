<?php session_start();

//Si existe un usuario le permite modificarlo, sino lo manda al login


if (isset($_SESSION['usu_nombre'])) {

	require '../views/modificarusuario.view.html';

} else {
	header('Location: login.php');
}

?>