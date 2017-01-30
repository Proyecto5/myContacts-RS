<?php
include "../includes/conexion_bd.php";
extract($_REQUEST);

if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyContacts datos contacto">
    <meta name="author" content="Sergi, Roger">

    <!-- TITULO -->
    <title>MyContacts</title>

    <!-- BOOTSTRAP -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- FUENTES -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/style-user.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- BARRA DE NAVEGACION -->
            <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                <!-- TITULO MYCONTACTS -->

                        <a class="navbar-brand page-scroll" href="#page-top">Mycontacts</a>


                    </div>
                <!-- LOGOUT -->
                        <a class="page-scroll navbar-brand navbar-right" href="../includes/cerrarsesion.proc.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                <!-- MODIFICAR USUARIO -->
                        <a class="page-scroll navbar-brand navbar-right" href="../includes/modificarusuario.php?usu_nombre=<?php echo $_SESSION['usu_nombre']; ?>"><i class="fa fa-cog" aria-hidden="true"></i></a>
                <!-- MENSAJE USUARIO -->
                        <a class="page-scroll navbar-brand navbar-right" href="">Bienvenido, <?php echo $_SESSION['usu_nombre']; ?></a>
                        
                    </div>
                    

                    
                </div>
            </nav>

            <header>
                <div class="header-content">
                    <div class="header-content-inner">
                    <!-- TITULO PAGINA USUARIO Y BOTON NUEVO CONTACTO -->
                        <h1 id="homeHeading">Datos de: 
                        <?php  

                        $resultado=mysqli_query($conexion, "SELECT * FROM tbl_contacto WHERE usu_id=$con_id");
                        
                        if (mysqli_num_rows($resultado) != 0){
                            while ($nombres = mysqli_fetch_array($resultado)) {
                            $nombre = $nombres['con_nombre'];
                            $apellido1 = $nombres['con_apellido1'];
                            $apellido2 = $nombres['con_apellido2'];
                            $nombre = $nombre . " " . $apellido1 . " " . $apellido2;
                            }
                        }    

                        ?></h1>
                        <hr>


            <!-- MOSTRAR DATOS CONTACTOS EN PHP -->
                <?php

                    $resultado=mysqli_query($conexion, "SELECT * FROM tbl_contacto WHERE usu_id=$con_id");

                        echo "<table class='table table-bordered'>";

                                echo "<tr>
                                    <th class='text-center'>NOMBRE</th>
                                    <th class='text-center'>APELLIDOS</th>
                                    <th class='text-center'>CORREO</th>
                                    <th class='text-center'>MÓVIL</th>
                                    <th class='text-center'>FIJO</th>
                                    <th class='text-center'>EMPRESA</th>
                                    </tr>";

                            if (mysqli_num_rows($resultado) != 0){
                            while ($nombres = mysqli_fetch_array($resultado)) {
                            $nombre = $nombres['con_nombre'];
                            $apellido1 = $nombres['con_apellido1'];
                            $apellido2 = $nombres['con_apellido2'];
                            $correo = $nombres['con_correo'];
                            $movil = $nombres['con_tMovil'];
                            $fijo = $nombres['con_tFijo'];
                            $empresa = $nombres['con_tEmpresa'];


                                
                                    echo "<tr>
                                    <td> $nombre </td>
                                    <td> $apellido1 $apellido2 </td>
                                    <td> $correo </td>
                                    <td> $movil </td>
                                    <td> $fijo </td>
                                    <td> $empresa </td>
                                    </tr>";

                                }
                                }

                        echo "</table>"

                ?><br/>
                <a href="javascript:history.back()">Volver atrás</a>

                    </div>
                </div>
            </header>

            <!-- Plugin JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
            <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>

            <!-- Theme JavaScript -->
            <script src="../js/creative.min.js"></script>

</body>

</html>
