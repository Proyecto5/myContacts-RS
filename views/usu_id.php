  <?php
                    $usu_nombre = $_SESSION['usu_nombre'];
                    $sql1 = "SELECT * FROM tbl_usuario WHERE usu_nombre = '$usu_nombre'";
                    $resultadoUsuario=mysqli_query($conexion, $sql1);

                    if (mysqli_num_rows($resultadoUsuario) != 0){
                            while ($usuario = mysqli_fetch_array($resultadoUsuario)) {

                            $id_usuario=$usuario['usu_id'];}
                    }
  ?>