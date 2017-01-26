<?php
include "conexion_bd.php";


        extract($_REQUEST);

        //1.- Si existe la variable submit hacer:
    if(isset($submit)){
        
        //2.- Asignación de variables recibidas:
        $usu_name = trim($inputUsuario);
        $usu_pwd = trim($inputPassword);


        //SI CREAMOS CUENTA ADMIN, USAR ESTE CÓDIGO

        /*
        if(!isset($admin)){
            // echo "No existe <br/>";
            $usu_categoria = 'profesor';
        } else {
            $usu_categoria = 'administrador';
            // echo "Existe <br/>";
        }
        // $usu_categoria = $admin;
        */

        
        //4.- Realización de consulta en la base de datos para los NO administradores:
            $sql = "SELECT usu_nombre, usu_pass FROM  tbl_usuario WHERE usu_nombre = '$usu_nombre' and usu_pass = '$usu_pass' /*and usu_categoria = '$usu_categoria'*/";

            //echo $sql;

            $login = mysqli_query($conexion, $sql);

       }
?>