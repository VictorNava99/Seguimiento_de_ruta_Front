<?php


		$mysqli = new MySQLi("localhost", "root","", "misflisdb");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión con el servidor: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitosa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>