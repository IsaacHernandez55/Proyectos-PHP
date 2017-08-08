<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ejercicio 2</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">

      <h2>Estructura de control Iteractiva</h2>
      <h3>Muestre los numeros del 100 al 1</h3>
      <hr>
      <?php
        $n=100;
        while ($n >= 1) {
          echo "$n &nbsp";
          $n--;
        }

       ?>
       <hr>
       <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
    </div>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
