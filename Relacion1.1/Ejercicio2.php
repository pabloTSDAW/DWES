<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio2</title>
 </head>
 <body>
  
	<?php

	/*Muestra en pantalla una tabla de 10x10 con los números del 1 al 100.*/

	function bisiesto($year) {
        $year = ($year==NULL)? date('Y'):$year;
        if(($year%4 == 0 && $year%100 != 0) || $year%400 == 0 )
			echo("ES BISIESTO");
		else
			echo("NO ES BISIESTO");
    }

	bisiesto(2001);

	?>

 </body>
</html>
