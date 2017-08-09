<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ejercicio 6</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>

    <div class="container">
      <h2>Ejercicios For</h2>
      <form method="post">
        <label>Ingres un numero: &nbsp &nbsp &nbsp</label>
        <input type="number" name="num1" value="">
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Calcular">
        <hr>
      </form>

      <?php
      $num1 = $_POST['num1'];

      echo "Tabla de Multplicar del numero $num1 <br>";

      for ($i=0; $i <=12 ; $i++) {
        echo "$num1 x $i = ".($num1*$i)."<br>";
      }


       ?>
       <hr>
       <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
