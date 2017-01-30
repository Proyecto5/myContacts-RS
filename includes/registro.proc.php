<?php session_start();
include "conexion_bd.php";


        extract($_REQUEST);

        
        $usu_nombre = trim($inputUsuario);
        $usu_pass = trim($inputPassword);
        $usu_pass2 = trim($inputPassword2);
        $usu_correo = trim($inputEmail);

        

        // ------------------ select ------------------
        $sql = "SELECT * FROM `tbl_usuario` WHERE `usu_nombre` = '$usu_nombre'";

        $consulta = mysqli_query($conexion, $sql);
        
        //Si hay usuario establece su sesión y lo lleva a usuario.php
        if(mysqli_num_rows($consulta)!=0){
            $_SESSION['error'] = "El usuario ya existe.";
            header('Location: registro.php');
        }else{
        // ------------------ insert ------------------
            $sql1 = "INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_pass`, `usu_correo`) VALUES (NULL, '". $usu_nombre ."', '". $usu_pass ."', '". $inputEmail ."');";
            //echo $sql;

        if ($usu_pass == $usu_pass2) {

            $registro = mysqli_query($conexion, $sql1);
        
        
            header('Location: login.php');
        }
        }

    
?>