<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 5</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>

  <body>
    <div class="container">

      <h2>Estructura de control Iteractiva</h2>
      <h3>Algoritmo que muestre los numeros primos entre 1 y 100</h3>
      <hr>

      <?php

      $numero=1;

      while ($numero <= 100) {
      if ($numero==2 or $numero==3 or $numero==5 or $numero==7 or $numero==11 or $numero==13 or
      $numero==17 or $numero==19 or $numero==23 or $numero==29 or $numero==31 or $numero==37 or
      $numero==41 or $numero==43 or $numero==47 or $numero==53 or $numero==59 or $numero==61 or
      $numero==67 or $numero==71 or $numero==73 or $numero==79 or $numero==83 or $numero==89 or $numero==97) {

        echo "$numero &nbsp";
        }

      $numero++;
      }

      ?>
      <hr>
      <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
