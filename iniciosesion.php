<?php
		$mysqli = new MySQLi("localhost", "root","", "login");//"localhost" (Nombre del servidor), "root" (nombre de usuario en PHPMyAdmin),"" (Contraseña), "login" (nombre de la base de datos a utilizar)
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error()); //verificacion de la conexion con la base de datos
		}

	$username=$_POST['mail']; //usuario tomado de un html cuyo id es mail
	$pass=$_POST['pass'];//contraseña tomada de un html cuyo id es pass


	//la variable  $mysqli viene de la parte superior del script y que hace la conexion cada vez que se quiere hacer la consulta SELECT;
	$sql2=mysqli_query($mysqli,"SELECT * FROM Usuarios WHERE Usuario='$username'");//$sql2 variable que contiene la consulta sql SELECT * (* selecciona todos los datos) FROM Usuarios (el nombre de la tabla, en este caso es Usuarios) WHERE Usuario='$username' (valor especifico a buscar en la tabla, en este caso el valor de la variable $username)
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['Con']){ //condicion para comparar la contraseña escrita contra la contraseña en base de datos
			Header ('location:index.html');//accion en caso de que el usuario y contraseña sean correctos
		
		}else{
		echo '<script>alert("Credenciales incorrectas, verifique sus datos")</script> ';//accion en caso de que el usuario sea correcto pero la contraseña no
	         echo "<script>location.href='index.html'</script>";
        }
	}
?>