<?php 
    if(isset($_SESSION['error'])){
        $error = $_SESSION['error'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MyContacts login page">
    <meta name="author" content="Sergi, Roger">

    <title>MyContacts</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <script>function formulario(f) { 
    if (f.inputUsuario.value   == '') { alert ('El nombre de usuario esta vacío.');  
    f.inputUsuario.focus(); return false; } 
    if (f.inputPassword.value   == '') { alert ('La contraseña está vacía.');  
    f.inputPassword.focus(); return false; }  
    }
    </script>

</head>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><img class="login" src="../img/logo1.png"></h1>
                <hr>
                <form class="form-horizontal" onsubmit="return formulario(this)" action="../includes/login.proc.php" method="POST">
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="text" class="form-control" name="inputUsuario" id="inputUsuario" placeholder="Usuario">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Contraseña">
                    </div>
                  </div>
                  <?php if (isset($error)){
                  echo "<h4>" . $error . "</h4>";
                  unset($error);
                  unset($_SESSION['error']); 
                  }
                  ?><br/>
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                      <button type="submit" class="btn btn-primary btn-xl">Entrar <i class="fa fa-check" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </form>
                </div>
                <br/>
            <p>¿Aún no eres usuario? Regístrate <a href="../includes/registro.php">aquí</a>.</p>
        </div>
    </header>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/creative.min.js"></script>

</body>

</html>
