<?php 
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

    <script>function formulario(f) { 
    if (f.inputUsuario.value   == '') { alert ('El nombre de usuario esta vacío.');  
    f.inputUsuario.focus(); return false; } 
    if (f.inputEmail.value  == '') { alert ('El email esta vacío'); 
    f.inputEmail.focus(); return false; }  
    if (f.inputPassword.value   == '') { alert ('Necesitas contraseña!');  
    f.inputPassword.focus(); return false; } 
    if (f.inputPassword2.value   == '') { alert ('Necesitas la segunda contraseña!');  
    f.inputPassword2.focus(); return false; }
    if (f.inputPassword.value   != f.inputPassword2.value) { alert ('Las contraseñas no coinciden.');  
    f.inputPassword2.focus(); return false; } return true;
    }
    </script>
</head>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            <!-- LOGO -->
                <h1 id="homeHeading"><img class="login" src="../img/logo1.png"></h1>
                <hr>
            <!-- FORMULARIO -->
                <form class="form-horizontal" onsubmit="return formulario(this)" action="../includes/registro.proc.php" method="POST">
            <!-- INPUT USUARIO -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="text" class="form-control" name="inputUsuario" id="inputUsuario" placeholder="Usuario">
                    </div>
                  </div>
            <!-- INPUT EMAIL -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Correo">
                    </div>
                  </div>
            <!-- INPUT PASSWORD -->
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Contraseña">
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="password" class="form-control" name="inputPassword2" id="inputPassword2" placeholder="Repita la contraseña">
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
                      <button type="submit" class="btn btn-primary btn-xl">Registrar <i class="fa fa-envelope" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </form>
                </div>
                <br/>
            <!-- FRASE REGISTRO -->
            <p>¿Tienes una cuenta? <a href="../includes/login.php">Inicia sesión</a>.</p>
        </div>
    </header>

</body>

</html>
