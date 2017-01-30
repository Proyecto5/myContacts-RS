<?php session_start();
include "conexion_bd.php";
include "usu_id.php";


        extract($_REQUEST);

        $con_id = $inputId;
        $con_nombre = trim($inputNombre);
        $con_apellido1 = trim($inputApellido1);
        $con_apellido2 = trim($inputApellido2);
        $con_correo = trim($inputCorreo);
        $con_tMovil = trim($inputMovil);
        $con_tFijo = trim($inputFijo);
        $con_tEmpresa = trim($inputEmpresa);

        

        // ------------------ select ------------------
        //$sql = "SELECT * FROM `tbl_contacto` WHERE `usu_nombre` = '$usu_nombre' && `usu_pass` = '$usu_pass'";

        //$consulta = mysqli_query($conexion, $sql);
        
        //Si hay usuario establece su sesión y lo lleva a usuario.php
        

        //if(mysqli_num_rows($consulta)!=0){
        //    $_SESSION['error'] = "El usuario ya existe.";
        //    header('Location: registro.php');
        //}else{
        // ------------------ insert ------------------
            $sql = "UPDATE `tbl_contacto` SET `usu_id` = '".$id_usuario."', `con_nombre` = '". $con_nombre ."', `con_apellido1` = '". $con_apellido1 ."', `con_apellido2` = '". $con_apellido2 ."', `con_correo` = '". $con_correo ."', `con_tMovil` = '". $con_tMovil ."', `con_tFijo` = '". $con_tFijo ."', `con_tEmpresa` = '". $con_tEmpresa ."' WHERE `tbl_contacto`.`con_id` = ".$con_id.";";

            
           // echo "$sql";
            //echo $sql;

        //if ($usu_pass == $usu_pass2) {

           $modificar = mysqli_query($conexion, $sql);
            
        
        header('Location: usuario.php');
        //}
        //}

    
?>