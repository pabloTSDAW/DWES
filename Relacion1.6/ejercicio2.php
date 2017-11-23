<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio 2</title>
 </head>
 <body>

	<?php

  /*Ejercicio 2
  Crea un script php que lea los datos creados en el ejercicio 1º. Además de mostrar su contenido por el
  navegador (agregando una etiqueta </br> a cada línea), deberá imprimir un resumen que incluya el
  número de líneas del archivo y el tamaño de éste*/

  $file = fopen('datos.txt', 'r');

  while ($linea = fgets($file)){
    echo $linea.'<br>';
  }

	?>

 </body>

</html>
