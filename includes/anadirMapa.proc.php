<?php session_start();
include "conexion_bd.php";


        extract($_REQUEST);
        
        //$dir_direccion
        //$con_id

        

        // ------------------ select ------------------
        // $sql = "SELECT * FROM `tbl_direccion` WHERE `con_id` = '$con_id'";

        // $consulta = mysqli_query($conexion, $sql);
        
        //Si hay usuario establece su sesión y lo lleva a usuario.php
        // if(mysqli_num_rows($consulta)>2){
        //     $_SESSION['errordir'] = "Solo puedes tener tres direcciones";
        //     header('Location: usuario.php');
        // }else{
        // ------------------ insert ------------------
            
            $sql1 = "INSERT INTO `tbl_direccion` (`dir_id`, `con_id`, `dir_residencia`, `dir_lat`, `dir_lon`) VALUES (NULL, '$con_id', '".$dir_direccion."', NULL, NULL);";
            htmlspecialchars($sql1);
            echo $sql1;
            $registroMapa = mysqli_query($conexion, $sql1);
      
           header('Location: usuario.php');
        // }

    
?>