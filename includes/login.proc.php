<?php

session_start();
//Incluimos conexion_bd
include "conexion_bd.php";

    //Recogemos los parámetros introducidos en login.view (login.php)
        extract($_REQUEST);
        
        //Asignación de variables recibidas sin espacios:
        $usu_nombre = trim($inputUsuario);
        $usu_pass = trim($inputPassword);

        //Realización de consulta en la base de datos (no hay admins):
            $sql = "SELECT usu_nombre, usu_pass FROM  tbl_usuario WHERE usu_nombre = '$usu_nombre' and usu_pass = '$usu_pass'";

        //Juntamos conexión y sql en una variable
            $login = mysqli_query($conexion, $sql);
        
        //Si hay usuario establece su sesión y lo lleva a usuario.php
        if(mysqli_num_rows($login)!=0){
            while($log = mysqli_fetch_array($login)){

                $_SESSION['usu_nombre'] = $log['usu_nombre'];
            }
            header('Location: usuario.php');
        }else{
            $_SESSION['error'] = "El usuario o la contraseña son erroneos.";
            header('Location: login.php');
        }
?>