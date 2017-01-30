<?php

            if(isset($_POST['submit'])){

                /*

                * iniciamos coneccion a menos que submit procesada.

                * colocamos las credenciales de el mysql servidor.

                */

                $servidor            =  "localhost";    // direccion del host de mysql

                $msql_usuario        =  "root";         // nombre del usuario de mysql

                $clave_mysql         =  "";             // clave del usuario de mysql

                $base_dedatos        =  "bd_mycontacts";     // base de datos.

                $tabla_datos         =  "tbl_usuario"; // la tabla de datos.

 

                $conectado           =  @mysql_connect($servidor , $msql_usuario , $clave_mysql);

                // si hay error al conectarnos al servidor, terminemos el script y informemos de esto.

                if(!$conectado) exit('<p class="error">hubo un error en la coneccion : '.mysql_error().'</p>');

                // esta todo bien, entonces conectemonos a la base de datos.

 

                $db                  =  @mysql_select_db($base_dedatos , $conectado);

                // si hay error al conectar a la base de datos, terminemos y informemos.

                if(!$db)       exit('<p class="error">no se pudo conectar a la base de datos : '.mysql_error().'</p>');

 

                // todo bien en coneccion y en elegir nuestra base de datos , juguemos un poco.

 

                if(isset($_POST['inputUsuario']) && $_POST['inputUsuario'] != ''){

                    // Limpiemos nuestra username , es lo mas importante cuando recivimos valores de los usuarios

                    $nombre = mysql_real_escape_string(htmlentities(strip_tags($_POST['inputUsuario'])));

                    // agamos nuestra consulta a mysql

                    $consulta         =  @mysql_query("SELECT * FROM ".$tabla_datos." WHERE usu_nombre='".$nombre."'");

                        // si ubo error en la consulta reportala.

                        if($consulta === false)exit('<p class="error">ubo un error el cual es: '.mysql_error().'</p>');

                        // si lo retornado no nos da a 1 entonces el nombre no existe..

                        if(@mysql_num_rows($consulta) < 1)exit('<p class="error">Lo lamento no se encontro este usuario.!</p>');

                    // si al contrario se encontro satisfactoriamente, reportalo bien.

                    echo '<p>El usuario <strong>'.$nombre.'</strong> ya existe.</p>';

                }else{

                  // el campo de nombre esta vacio, reportemoslo

                    echo 'bien';

                }

                // serramos la coneccion a mysql

                mysql_close($conectado);



            }

?>
