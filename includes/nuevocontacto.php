<?php session_start();

//Si existe un usuario lo redirige a usuario.php, sino recoge login.view


if (isset($_SESSION['usu_nombre'])) {

    
    require '../views/nuevocontacto.view.html';

} else {

	header('Location: login.php');
}

?>