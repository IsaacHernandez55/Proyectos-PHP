<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Ejercicio 9</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
	<body>
		<div class="container">
			<h1>Suma de todos los numeros y diga cuantos hay</h1>
			<hr>
			<?php
			$n=1;
			$suma=0;
			$contador=0;

			while ($n<= 100) {
			if(($n%2)==0){
				echo "$n &nbsp ";
				$suma=$suma+$n;
				$contador++;

			}
				$n++;
			}
			echo "<br>";
			echo "<br/>";
			echo "La suma de todos los numeros pares es: $suma <br/>";
			echo "Los numeros pares que hay entre 1 a 100 son: $contador <br/>";
		 ?>
		 <hr>
		 <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

		</div>
	</body>
</html>
