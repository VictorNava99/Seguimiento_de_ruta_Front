<?php

	$realname = $_POST['realname'];
$mail = $_POST['nick'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];

require("connect_db.php");
// La variable $mysqli viene de connect_db que la traigo con require("connect_db.php");

$checkemail = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$mail'");
$check_mail = mysqli_num_rows($checkemail);

if ($pass == $rpass) {
    if ($check_mail > 0) {
        echo ' <script language="javascript">alert("Ya se ha registrado este correo, verifique sus datos o use otros");</script> ';
    } else {
        // require("connect_db.php");
        // La variable $mysqli viene de connect_db que la traigo con require("connect_db.php");
        mysqli_query($mysqli, "INSERT INTO login (user, password, email, rol) VALUES ('$realname', '$pass', '$mail', 2)");
        // echo 'Se ha registrado con éxito';
        echo ' <script language="javascript">alert("Usuario registrado correctamente");</script> ';
    }
} else {
    echo 'Las contraseñas no son iguales, verifique sus datos';
}

	
?>
