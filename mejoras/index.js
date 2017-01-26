//ERROR USUARIO VACÍO

  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });


/*
<?php
     if(isset($login)){
      if(mysqli_num_rows($login)>0){

      } else {
        echo '<span class="alert">Datos incorrectos</span>';
        }
      }
        ?>
*/
