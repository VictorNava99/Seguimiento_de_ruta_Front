﻿<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index.php");
		}else{
			echo '<script>alert("Contraseña incorrecta")</script> ';
		
			echo "<script>location.href='inicio.php'</script>";
		}
	}else{
		
		echo '<script>alert("Usuario no registrado, registrese para continuar")</script> ';
		
		echo "<script>location.href='inicio.php'</script>";	

	}

?>