<!DOCTYPE html>
<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:inicio.php");
  }
  ?>
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
        <li class="modulomenuli"><a href="modulo2.php">MOUDULO 2</a>
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
        <li><a href="desconectar.php">SALIDA</a>
      </ul>


  </ul>
</nav>

<!--- navegador --->
<!-- Seccion 1 --><br>
   <div class="contenidoinexamen">
     <p class="formatoexamenmodulo">  </p>
   </div>
   <div class="contenidoinexamen">
		<p class="formatoexamenmodulo"> </p>
   </div>
   <div class="contenidoinexamen">
    <p class="formatoexamenmodulo">  </p>
   </div>
<!--
    <div class="perfiltest">
      <form name="quiz">
      <p class="parrafotest"> Complete the blanks with the correct form of the verbs in parentheses </p>
      <p class="preguntatest"> Shopie lives on Baxton Street. (1)<input type="text" name="question1"> five rooms in her house. (2)<input type="text" name="question2"> a living room and a kitchen downstairs and (3)<input type="text" name="question3"> two bedrooms and a bathroom upstairs. The bathroom is between the two bedrooms. In front of the house (4)<input type="text" name="question4"> a big yard but (5)<input type="text" name="question5"> a garage.</p>

<br>
<hr>

      <p class="parrafotest"> Complete the sentences with the plural form of the nouns in parentheses. </p>
      <p class="preguntatest">1.- We have fifteen <input type="text" name="question6">(teacher), six <input type="text" name="question7">(man) and nine <input type="text" name="question8">(woman). </p>
      <p class="preguntatest">2.- We have children of many <input type="text" name="question9">(nationality) in our school.</p>
      <p class="preguntatest">3.- The restaurant has two <input type="text" name="question10">(waiter) and five <input type="text" name="question11">(waitress).</p>
      <p class="preguntatest">4.- There are seven <input type="text" name="question12">(person), but we only have six <input type="text" name="question13">(chair).</p>
      <p class="preguntatest">5.- My aunt has five <input type="text" name="question14">(child), two <input type="text" name="question15">(girl) and three <input type="text" name="question16">(boy).</p>

<br>
<hr>

      <p class="parrafotest"> Look at the sentences and write what the people are doing. </p>
      <p class="preguntatest">1.- Bill / watch / TV <input type="text" name="question17"> </p>
      <p class="preguntatest">2.- Children / study <input type="text" name="question18"> </p>
      <p class="preguntatest">3.- Paul / swim / in pool <input type="text" name="question19"> </p>
      <p class="preguntatest">4.- They / make / breakfast <input type="text" name="question20"> </p>

<br>
<hr>

      <p class="parrafotest"> Read the text and decide if the sentences are True of False. </p>
      <p class="preguntatest">.- Hi! I'm Dillon and I live in a great neighborhood in Nashville, Tennessee. My house is really beautiful. Downstairs, there are two living rooms. The TV set and the couch are in the big living room. In the small living room there is a bookcase, a small coffee table and two armchairs. That's my dad's favorite room in the house. The dining room and the kitchen are downstairs, too. There is also a small bathroom downstairs. Upstairs, there are three bedrooms for my brother, my parents and me. There is a big bathroom for us boys and there is a bathroom in my parents' bedroom for them. I have a computer in my room and my brother and I play computer games together. In front of the house there is a big beautiful yard. My house is awesome! </p>
      <br>
     
      <ul class="radiobtn">
      <p class="preguntatest">1.- Dillon lives in an apartment in Nashville.
        <input id="radio1" type="radio" name="question21" value="True" class="radiobtn"><label for="radio1" class="radiobtn" value="True">True</label>
        <input id="radio2" type="radio" name="question21" value="False" class="radiobtn"><label for="radio2" class="radiobtn" value="False">False</label>
      </p>
      <p class="preguntatest">2.- There is one living room in Dillon's house. 
        <input id="radio3" type="radio" name="question22" value="True" class="radiobtn"><label for="radio3" class="radiobtn">True</label>
        <input id="radio4" type="radio" name="question22" value="False" class="radiobtn"><label for="radio4" class="radiobtn">False</label>
      </p>
      <p class="preguntatest">3.- The TV set and the couch are in the big living room. 
        <input id="radio5" type="radio" name="question23" value="True" class="radiobtn"><label for="radio5" class="radiobtn">True</label>
        <input id="radio6" type="radio" name="question23" value="False" class="radiobtn"><label for="radio6" class="radiobtn">False</label>
      </p>
      <p class="preguntatest">4.- The bookcase is upstairs. 
        <input id="radio7" type="radio" name="question24" value="True" class="radiobtn"><label for="radio7" class="radiobtn">True</label>
        <input id="radio8" type="radio" name="question24" value="False" class="radiobtn"><label for="radio8" class="radiobtn">False</label>
      </p>
      <p class="preguntatest">5.- There are three bedrooms in the house. 
        <input id="radio9" type="radio" name="question25" value="True" class="radiobtn"><label for="radio9" class="radiobtn">True</label>
        <input id="radio10" type="radio" name="question25" value="False" class="radiobtn"><label for="radio10" class="radiobtn">False</label>
      </p>
      <p class="preguntatest">6.- Dillon's brother has a computer in his bedroom. 
        <input id="radio11" type="radio" name="question26" value="True" class="radiobtn"><label for="radio11" class="radiobtn">True</label>
        <input id="radio12" type="radio" name="question26" value="False" class="radiobtn"><label for="radio12" class="radiobtn">False</label>
      </p>
      </ul> 
     
      <input id="button_tests" type="button" value="Check!" onclick = "modulo3_test();">

      <div id="after_submitmodulos" class="contenidoanswers">
       <p id="number_correctmod" class="formatoanswers"></p>
       <p id="messagemod" class="formatoanswers2"></p>
       <p class="formatoanswersimg"><img id="picture_modulo"></p>       
      </div>
  
      </form>
    
    </div>
 -->
  <br>  
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
</html>