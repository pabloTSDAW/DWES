<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio4</title>
 </head>
 <body>
  
	<?php

	/*Programa que define dos constantes mediante la función define() y visualiza sus nombres
	y contenidos respectivos por pantalla. Redefine a continuación en el mismo programa
	una de ellas, también con define(), y muéstrala con el nuevo contenido. ¿Qué sucede?*/

	function definir() {
		define("constante1", 3);
		define("constante2", 5);
		echo constante1;
		echo "<br>";
		echo constante2;
		define("constante2", 10);
		echo constante2;
		echo "<p>No se puede redefinir una variable con define()</p>";
	}

	definir();

	?>

 </body>
</html>