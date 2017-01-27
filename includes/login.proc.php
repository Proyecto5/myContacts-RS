<?php session_start();
include "conexion_bd.php";


        extract($_REQUEST);

        
        //2.- Asignación de variables recibidas:
        $usu_nombre = trim($inputUsuario);
        $usu_pass = trim($inputPassword);


        
        //4.- Realización de consulta en la base de datos para los NO administradores:
            $sql = "SELECT usu_nombre, usu_pass FROM  tbl_usuario WHERE usu_nombre = '$usu_nombre' and usu_pass = '$usu_pass'";


            $login = mysqli_query($conexion, $sql);
        
        if(mysqli_num_rows($login)!=0){
            echo "lalalalalla";
            while($log = mysqli_fetch_array($login)){
                $_SESSION['usu_nombre'] = $log['usu_nombre'];
            }
            header('Location: usuario.php');
        }

    
?>