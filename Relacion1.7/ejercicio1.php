<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>Ejercicio 1</title>
</head>

	<body>

  </br>

		<?php

		/*1. Desarrollaremos un sencillo contador personal de accesos a una página empleando la técnica de envío
    y recuperación de cookies. De esta forma, el valor del contador se almacenará en el cliente, no siendo
    necesario el almacenamiento de ningún tipo de información en el servidor. El funcionamiento es trivial:
    cada vez que se accede a la página, el script recupera el valor de la cookie y la reenvía con el contador
    incrementado. De esta forma, cuando el cliente accede al script, éste no tiene más que acceder al valor de
    la cookie para determinar cuántas veces ha visitado dicho cliente la página en cuestión...
		*/

  if(isset($_COOKIE['contador']))
  {
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); //caduca en un año
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador'];
  }
  else
  {
    setcookie('contador', 2, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido';
  }

	echo $mensaje;

	?>


	</body>

</html>
