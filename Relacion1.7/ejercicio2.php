<html>
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>Ejercicio 2</title>
</head>
<body>
<form action="" method="post">
		usuario: <input type="text" name="usuario"><br/>
		password: <input type="passwordword" name="password"><br/>
		<input type="checkbox" name="recordar" value="yes" checked="checked"> Recordar<br>
		<input type="submit" value="Enviar">
</form>
</body>
</html>

		<?php

		/*2. En esta práctica tienes que emplear las cookies para conservar información de los usuarios entre
			diferentes visitas al sitio web. En concreto, tienes que emplear las cookies desde PHP para:
			Mostrar la opción de "recordarme en este equipo" en el formulario de acceso como usuario
			registrado en la página principal, para que almacene en una cookie el nombre de usuario y la
			contraseña y no se tenga que solicitar en próximas visitas. Además, debes incluir un enlace que
			permita iniciar sesión con otro usuario diferente al que se está recordando, con el texto “Iniciar
			sesión con otra cuenta”. En la siguiente figura se muestra el empleo de esta opción en el sitio web
			gmail.
			Cuando se esté recordando a un usuario, el formulario de acceso se muestra repintado con el
			nombre del usuario recordado y la contraseña oculta mediante una cadena de ‘*’.
				¡*/

		if (isset($_POST['recordar']) && $_POST['recordar'] == 'yes') {
		    if (isset($_POST['usuario']) && isset($_POST['password'])) {
		        setcookie("usuario", $_POST['usuario'], time() + 60 * 60 * 24 * 100, "/");
		        setcookie("password", $_POST['password'], time() + 60 * 60 * 24 * 100, "/");
		    }
		}
		?>


		<?php print_r($_COOKIE); ?>


	</body>

</html>
