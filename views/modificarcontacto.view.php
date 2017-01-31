<?php
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
    }
    $_SESSION['con_id'] = $con_id;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyContacts login page">
    <meta name="author" content="Sergi, Roger">

    <!-- TITULO -->
    <title>MyContacts</title>

    <!-- BOOTSTRAP -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- FUENTES -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- <script>function formulario(f) {
    if (f.inputUsuario.value   == '') { alert ('El nombre de usuario esta vacío.');
    f.inputUsuario.focus(); return false; }
    if (f.inputEmail.value  == '') { alert ('El email esta vacío');
    f.inputEmail.focus(); return false; }
    }
    </script> -->
</head>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            <!-- LOGO -->
                <h1 id="homeHeading">Modificar contacto</h1>
                <hr>
            <!-- FORMULARIO -->
                <form class="form-horizontal" action="modificarcontacto.proc.php" method="POST">
            <!-- INPUT NOMBRE -->
                  <input type="hidden" name="inputId" id="inputId" value='<?php echo $con_id; ?>'>
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="text" class="form-control" name="inputNombre" id="inputNombre" placeholder="Nombre" value='<?php echo $con_nombre; ?>'>
                    </div>
                  </div>
            <!-- INPUT APELLIDO1 -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-2">
                      <input type="text" class="form-control" name="inputApellido1" id="inputApellido1" placeholder="Apellido 1" value='<?php echo $con_apellido1; ?>'>
                    </div>
            <!-- INPUT APELLIDO2 -->
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputApellido2" id="inputApellido2" placeholder="Apellido 2" value='<?php echo $con_apellido2; ?>'>
                    </div>
                  </div>
            <!-- INPUT CORREO -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="email" class="form-control" name="inputCorreo" id="inputCorreo" placeholder="Correo"
                      value='<?php echo $con_correo; ?>'>
                    </div>
                  </div>
            <!-- INPUT MOVIL -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-2">
                      <input type="text" class="form-control" name="inputMovil" id="inputMovil" placeholder="Móvil"
                      value='<?php echo $con_tMovil; ?>'>
                    </div>
            <!-- INPUT FIJO -->
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputFijo" id="inputFijo" placeholder="Fijo"
                      value='<?php echo $con_tFijo; ?>'>
                    </div>
                  </div>
            <!-- INPUT EMPRESA -->
                   <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="text" class="form-control" name="inputEmpresa" id="inputEmpresa" placeholder="Teléfono de empresa" value='<?php echo $con_tEmpresa; ?>'>
                    </div>
                  </div><br/>
                  <?php if (isset($error)){
                  echo "<h4>" . $error . "</h4>";
                  unset($error);
                  unset($_SESSION['error']);
                  }
                  ?>
            <!-- ENVIAR -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <button type="submit" class="btn btn-primary btn-xl">Modificar <i class="fa fa-envelope" aria-hidden="true"></i></button><br/><br/>
                      <a href="javascript:history.back(-2)">Volver atrás</a>
                    </div>
                  </div>
                </form>
                </div>
                <br/>
        </div>
    </header>

</body>

</html>
