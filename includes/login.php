<?php session_start();

if (isset($_SESSION['usu_nombre'])) {


    header('Location: usuario.php');

} else{
	require '../views/login.view.html';
}

?>