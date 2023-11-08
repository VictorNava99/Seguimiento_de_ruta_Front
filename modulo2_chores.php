<!DOCTYPE html>
<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:inicio.php");
  }  ?>
<html>
<head>
  <meta charset="utf-8">
   <title>Seguimiento de ruta</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
   <script type="text/javascript" src="jscripts.js"></script>
<!--   <link rel="shortcut icon" href="favicon.jpg"> -->
   <link rel="shortcut icon" href="frame.png">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="fonticons.css">

   <meta name="descripcion" content="Nuestra plataforma de seguimiento de ruta, ha evolucionado para participar en un emocionante proyecto de blockchain en colaboración con los estudiantes del Centro Universitario de Tonala. Nos hemos especializado en el seguimiento de la ruta 98-C, utilizando la tecnología blockchain para garantizar un rastreo transparente y confiable. Este proyecto representa la unión de la educación y la innovación tecnológica para crear un impacto significativo en la gestión de rutas.">
  <meta name="author" content="Alumnos del CUT">
</head>
<body class="fondo">

  <div class="contenedor">
    <header>
      <div>
        <a href="index.php"><img src="bannerk.png" class="banner"></a>
      </div>
    </header>
<!--
    <nav>
      <ul class="menu">
          <li>
          <a href="introduccion.php" title="Introduccion"><img src="introduccion.png" class="iconos"></a></li>
                <li>
                  <a href="modulo1.php" title="Modulo 1"><img src="modulo1.png" class="iconos"></a></li>
                <li>
                  <a href="modulo2.php" title="Modulo 2"><img src="modulo2.png" class="iconos"></a></li>
                <li>
                  <a href="modulo3.php" title="Modulo 3"><img src="modulo3.png" class="iconos"></a></li>
                <li>
                  <a href="lista-juegos.php" title="Juegos"><img src="juegos.png" class="iconos"></a></li>
                <li>
                  <a href="desconectar.php" title="Iniciar sesion / Registrarse"><img src="cerrar.png" class="iconos"></a></li>
           </ul>
    </nav> -->
<nav>
    <div class="media"></div>
    <ul class="menufonticons nav">
    <li class="menufonticons li1"><i class="fas fa-sort-alpha-up"></i> 
      <ul>
        <li class="modulomenuli"><a href="introduccion.php">INTRODUCCION</a>
        <li><a href="intro_abc.php"></a>
        <li><a href="intro_numbers.php"></a>
        <li><a href="intro_colors.php"></a>
        <li><a href="intro_objects.php"></a>
        <li><a href="intro_language.php"></a>  
      </ul>
     </li>
     
     <li class="menufonticons li1"><i class="fas fa-globe-americas"></i>
      <ul>
        <li class="modulomenuli"><a href="modulo1.php">MODULO 1</a>
        <li><a href="modulo1_countries.php"></a>
        <li><a href="modulo1_numbers.php"></a>
        <li><a href="modulo1_subjects.php"></a>
        <li><a href="modulo1_family.php"></a>
        <li><a href="modulo1_sports.php"></a>
      </ul>
     </li>


     <li class="menufonticons li1"><i class="fas fa-user-md"></i>
      <ul>
        <li class="modulomenuli"><a href="modulo2.php">MODULO 2</a>
        <li><a href="modulo2_jobs.php"></a>
        <li><a href="modulo2_chores.php"></a>
        <li><a href="modulo2_physical.php"></a>
        <li><a href="modulo2_parts.php"></a>
        <li><a href="modulo2_animals.php"></a>
        <li><a href="modulo2_character.php"></a>
      </ul>
     </li>


     <li class="menufonticons li2"><i class="fas fa-home"></i>
      <ul>
        <li class="modulomenuli"><a href="modulo3.php">MODULO 3</a>
        <li><a href="modulo3_items.php"></a>
        <li><a href="modulo3_furniture.php"></a>
        <li><a href="modulo3_house.php"></a>
      </ul>
       
     </li>


     <li class="menufonticons li2"><i class="fas fa-gamepad"></i>
      <ul>
        <li><a href="lista-juegos.php"> OTROS </a>
      </ul>


<!--  <li><i class="fas fa-door-closed"></i></li> -->
     <li class="menufonticons li2"><i class="fas fa-door-open"></i>
      <ul>
        <li><a href="desconectar.php">SALIR</a>
      </ul>


  </ul>
</nav>

<!--- navegador --->
    <!-- Termina header-->

    <br>
<p class="titulomodulo">Tema</p><br>
<p class="titulomodulo">Subtema</p>
<br>

<div class="perfiltest">	
<form id = "quiz" name = "quiz">
	<div class="centrarimg">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<img src="busss.jpg" class="imgprofecciones">

	<img src="camareras.jpg" class="imgprofecciones">

	<img src="chefs.jpg" class="imgprofecciones">

	<img src="delivers.jpg" class="imgprofecciones">

	<img src="camareros.jpg" class="imgprofecciones"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<img src="doctors.jpg" class="imgprofecciones">

	<img src="enfermeras.jpg" class="imgprofecciones">

	<img src="nineras.jpg" class="imgprofecciones">

	<img src="recepcionistas.jpg" class="imgprofecciones">

	<img src="vendedors.jpg" class="imgprofecciones">
	<br><br>
</div>

<p class="titulomodulo">Informacion</p>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>


<br><br>
		
  <!-- FOOTER -->
    <footer>
    <div id="skinny-footer">

    <span class="footer-links">
        <a href="aboutus.html" target="_blank">Acerca de nosotros</a>
        <a href="terminos.html" target="_blank">Terminos y condiciones</a>
        <a id="mail-link" href="mailto:misfliskids@gmail.com">Contactanos!</a>
    </span>
    <br>
    <br>
    <hr>
    <span class="last-updated"> Ultima Actualizacion: 6 de noviembre de 2023 </span>  
    <span id="sfcnefgtggnkrjwl64ldz2p3h8xacaa8gjj" class="visitantes">
      
    </span>
    <script type="text/javascript" src="https://counter5.wheredoyoucomefrom.ovh/private/counter.js?c=nefgtggnkrjwl64ldz2p3h8xacaa8gjj&down=async" async></script>

<!--    <span class="contact"><a id="mail-link" href="mailto:misflis@gmail.com">Contactanos</a></span> -->
    <span class="webmaster">Tutor: Mtro. Cesar Garcia/ Samir Sarwerzide</span>    
    <span class="webdirector">Centro Univercitario de Tonalá </span>
    <span class="webprogramer">Ruta del C-98 </span>
    <!--div oculto -->
    
    <div style="display: none;"> 
    <noscript>
      <a href="https://www.contadorvisitasgratis.com" title="contador de visitas para web">
      <img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=nefgtggnkrjwl64ldz2p3h8xacaa8gjj" border="0" title="contador de visitas para web" alt="contador de visitas para web"></a></noscript>
    <a href="https://www.contadorvisitasgratis.com" title="contador de visitas para web">
      <img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=nefgtggnkrjwl64ldz2p3h8xacaa8gjj" border="0" title="contador de visitas para web" alt="contador de visitas para web"></a>
    </div><!-- Termina div oculto -->
    <!-- script mailer -->
    <script>
        var prefix = "mail";
        prefix = prefix + "to:";
        prefix = prefix + "info";
        prefix = prefix + "@";
        $("#mail-link").attr('href', prefix + $('#mail-link').attr('href'));
    </script>
</div> </footer>
  </div>

</body>
</html>