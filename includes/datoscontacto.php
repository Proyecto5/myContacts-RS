<?php
session_start();

//Si existe sesión recoge datoscontacto.view, sino lo lleva a login.php
if (isset($_SESSION['usu_nombre'])) {
    require '../views/datoscontacto.view.html';
} else {
    header('Location: login.php');
}

 ?>