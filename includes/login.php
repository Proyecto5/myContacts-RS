<?php session_start();

if (isset($_SESSION['usu_nombre'])) {
    header('Location: login.proc.php');
} else{
	require '../views/login.view.html';
}



?>