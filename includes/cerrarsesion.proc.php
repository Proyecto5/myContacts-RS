<?php
//Cierra sesión y lo lleva a index.php
session_start();
session_destroy();
header('Location:../index.php');
?>