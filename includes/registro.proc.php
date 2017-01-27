<?php session_start();
include "conexion_bd.php";


        extract($_REQUEST);

        
        $usu_nombre = trim($inputUsuario);
        $usu_pass = trim($inputPassword);
        $usu_pass2 = trim($inputPassword2);
        $usu_correo = trim($inputEmail);
        // ------------------ select ------------------
            $sql = "SELECT "
        // ------------------ insert ------------------
            $sql1 = "INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_pass`, `usu_correo`) VALUES (NULL, '". $usu_nombre ."', '". $usu_pass ."', '". $inputEmail ."');";
            //echo $sql;

        if ($usu_pass == $usu_pass2) {

            $registro = mysqli_query($conexion, $sql1);
        
        
            header('Location: login.php');
        }

    
?>