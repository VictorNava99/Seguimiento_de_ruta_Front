<!DOCTYPE html>
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
<center>
  <header style="margin-top: 10px;">
      <div>
        <a href="index.php"><img src="bannerk.png" class="banner"></a>
      </div>
    </header>
 
 <div>

 </div>
 
 <br>
 <br>
 <br>
 <br>

 <style>
 b {
  color: black;
 }
.checkmid {
vertical-align:middle;
}
 .tam4{
font-size: 36px;
text-align: center;
}
.tam5{
font-size: 28px;
text-align: center;
}
.portadash {
width:500px;
height:290px;
display:block;
margin:auto;
}
td {
  width: 350px;
}


/* Lightbox Inicio*/
* {
  box-sizing: border-box;
}
.row > .column {
  padding: 0 8px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
  width: 25%;
}
/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}
/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}
/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}
.mySlides {
  display: none;
}
.cursor {
  cursor: pointer
}
/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}
.demo {
  opacity: 0.6;
}
.active,
.demo:hover {
  opacity: 1;
}
img.hover-shadow {
  transition: 0.3s
}
.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
/* Fin Lightbox */


/* Inicio Formulario */
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: .5em;
}
.buttoninicio {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 500px;
    border-radius: .5em;
    height: 100px;
    font-size: 32px;
}
.buttonreg {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 500px;
    border-radius: .5em;
    height: 100px;
    font-size: 32px;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: red;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 20%;
    border-radius: 50%;
}
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
.modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
@media screen and(max-width: 300px){
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
/* Fin Formulario */
</style>

<body>

<button class="buttoninicio" onClick="document.getElementById('id01').style.display='block'"style="width:auto;" href="#login">
  Iniciar secion
</button>
<div id="id01" class="modal">
<!-- Formulario funcionalidad -->

<form class="modal-content animate" action="validar.php" method="POST">
<div class="imgcontainer">
<span onClick="document
.getElementById('id01')

.style.display='none'"
class="close" title="Close Modal">
    &times;</span>

 <img src="profile.png"
 alt="Avatar"
 class="avatar">
    </div>



 <div class="container">
  <label><b>Correo</b></label>
  <input type="text" placeholder="email@misflis.com" name="mail" maxlength="49" required>


<label><b>Contraseña</b></label>
<input type="password" placeholder="*****" name="pass" maxlength="49" required>


<button type="submit" value="Aceptar">Login</button>
</div>


 <div class="container"
 style="background-color:#f1f1f1">
 <button type="button"
 onclick="document.getElementById
 ('id01').style.

 display='none'" class="cancelbtn">
 Cancel</button>
  </div>
  </form>
</div>

<br>
<br>
<br>

<button class="buttonreg" onClick="document.getElementById('id02')

.style.display='block'"
style="width:auto;" href="#signup">Registrarse
</button>

<div id="id02" class="modal">
<!-- Formulario funcionalidad -->

<form class="modal-content animate" action="" method="POST">
<div class="imgcontainer">
<span onClick="document
.getElementById('id02')

.style.display='none'"
class="close" title="Close Modal">
    &times;</span>

 <img src="profile.png"
 alt="Avatar"
 class="avatar">
    </div>



 <div class="container">
  <label><b>Usuario</b></label>
  <input type="text" placeholder="Type your username" name="realname" maxlength="49" required>

   <label><b>Correo</b></label>
  <input type="text" placeholder="Type your email" name="nick" maxlength="49" required>

   <label><b>Contraseña</b></label>
  <input type="password" placeholder="Type your password" name="pass" minlength="5" maxlength="49" required>

  <label><b>Confirmar contraseña</b></label>
  <input type="password" placeholder="Repeat your password" name="rpass" minlength="5" maxlength="49" required>
  
   <label class="checkmid"><b>Yo acepto los <a href="terminos.html">términos y condiciones</a></b></label>
  <input type="checkbox" name="term" required>

  <button type="submit" name="submit" value="Registrarse">Registrarse</button>
</div>


 <div class="container"
 style="background-color:#f1f1f1">
 <button type="button"
 onclick="document.getElementById
 ('id02').style.

 display='none'" class="cancelbtn">
 Cancel</button>
  </div>

  </form>

</div>

<br>
<br>
<br>

<form action="index.html">
<button class="buttoninicio" style="width:auto;">
  Empezar ahora
</button>
</form>


<!-- Aqui terminda --> 
<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>

<script>
var modal = document.getElementById
('id01');
outside of the modal, close it 
window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
    }
}
</script>

</center>
<!--
<br>
<br>
<br>
<blockquote><blockquote><blockquote><blockquote> 

<h1 class="t tam4"> ¿Qué es Misflis? </h1>
<br> 
<p class="t tam5"> Misflis es una pagina de contenido multimedia donde puedes disfrutar de tus Peliculas, Series, Musica y Libros en un mismo sitio! </p>
<p class="t tam5"> Normalmente tienes que usar varias plataformas para ver el contenido más popular o de tu agrado, con Misflis, eso se acabo </p>
<p class="t tam5"> No sufras más y Registrate ahora! </p>
<p class="t tam5"> No te hemos convencido? Navega por nuestro contenido para <a href="index.html"> Visitantes </a></p>
<h3 class="t tam5"> Atencion! El contenido mostrado en la seccion de visitantes es solo un pequeña porcion de el contenido real de la pagina</h3>

<br>
<br>
<br>

<h1 class="t"> Historia de Misflis (Versiones y novedades)</h1>

<div class="centerTable">
<table><tr><td>
<ul>
  <li class="tam4"><a href="#v1"> Version 1 </a></li>
  <li class="tam4"><a href="#v2"> Version 2 </a></li>
  <li class="tam4"><a href="#v3"> Version 3 </a></li>
  <li class="tam4"><a href="#v4"> Version 4 </a></li>
  <li class="tam4"><a href="#v5"> Version 5 </a></li>
  <li class="tam4"><a href="#v6"> Version 6 </a></li>
  <li class="tam4"><a href="#v7"> Version 7 </a></li>
</ul>
</td>
</tr>
</table>
</div>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v1"> Version 1 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv1.jpg" onClick="openModal();currentSlide(1)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Fue la idea base </li>
  <li> El contenido se podia comprar sino eras premium </li>
  <li> Para premium se tenia que registrar </li>  
 </ul>
</td>

</tr>
</table>
</div>

<br>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v2"> Version 2 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv2.jpg" onClick="openModal();currentSlide(2)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Se cambio el menu de navegacion por iconos </li>
  <li> El url para el registro se le añadio un boton </li>
  <li> Se cambio el color de los urls no visitados </li>  
  <li> Substitucion de "comprar" por "obtener" </li>
  <li> Se rediseño y se añadieron campos al Registro         </li>
 </ul>
</td>

</tr>
</table>
</div>

<br>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v3"> Version 3 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv3.jpg" onClick="openModal();currentSlide(3)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Se cambio el color de fondo de la pagina </li>
  <li> Se añadio la lista de capitulos a las series </li>
 </ul>
</td>

</tr>
</table>
</div>

<br>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v4"> Version 4 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv4.jpg" onClick="openModal();currentSlide(4)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Se cambiaron los iconos del menu </li>
  <li> Se añadio el uso de Javascript </li>
  <li> Previsualizacion cambiada a un Lightbox </li>  
  <li> Boton-imagen para lista de capitulos </li>
  <li> Se añadio la opcion de descargar libros </li>
 </ul>
</td>

</tr>
</table>
</div>

<br>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v5"> Version 5 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv5.jpg" onClick="openModal();currentSlide(5)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Se añadieron las peliculas completas </li>
  <li> Se rediseño la pagina de musica </li>
  <li> Añadidas categorias a musica </li>  
  <li> Indice de categorias </li>
  <li> Anclas en el indice </li>
 </ul>
</td>

</tr>
</table>
</div>

<br>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v6"> Version 6 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv6.jpg" onClick="openModal();currentSlide(6)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Rediseño total del banner </li>
  <li> Añadido boton "Cerrar sesion" a el menu </li>
  <li> Rediseño de el fondo </li>  
  <li> Fondo cambiado de una imagen de color a un degradado css </li>
  <li> Rediseño de el acomodo del contenido </li>
  <li> Cambios al tipo de fuente </li>
  <li> Cambios en titulos </li>
  <li> Añadida pagina de inicio de sesion / registro </li>
  <li> Registro desplegable </li>
  <li> Fomulario de inicio de sesion desplegable </li>
  <li> Tendencias actualizadas </li>
  <li> Rediseño total de el formulario de Registro </li>
  <li> Añadido script php para inicio de sesion / registro </li>
  <li> Ahora se pueden registrar cuentas nuevas </li>
  <li> Cambio en los colores de los links SOLO en el registro </li>
  <li> Inicio de sesion correcto con php </li>
  <li> Banner e Icono de la pagina uno mismo </li>
  <li> Retirada opcion de comprar </li>
  <li> Añadida galeria de imagenes para visualizacion en linea de mangas </li>
  <li> Actualizacion a gran escala de el contenido de todos los tipos </li>
  <li> Revision de contenido por actualizar </li>
 </ul>
</td>

</tr>
</table>
</div>

<br>

<div class="centerTable">
<table> <tr> <td>
<h2 style="text-align:center"><a name="v7"> Version 7 </a></h2>

<div class="row">
  <div class="column">
    <img src="versiones/ssv7.jpg" onClick="openModal();currentSlide(7)" class="hover-shadow cursor portadash">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onClick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="versiones/ssv1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 7</div>
      <img src="versiones/ssv2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 7</div>
      <img src="versiones/ssv3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 7</div>
      <img src="versiones/ssv4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 7</div>
      <img src="versiones/ssv5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 7</div>
      <img src="versiones/ssv6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 7</div>
      <img src="versiones/ssv7.jpg" style="width:100%">
    </div>

    
    <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
    <a class="next" onClick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="versiones/ssv1.jpg" style="width:100%" onClick="currentSlide(1)" alt="V1">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv2.jpg" style="width:100%" onClick="currentSlide(2)" alt="V2">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv3.jpg" style="width:100%" onClick="currentSlide(3)" alt="V3">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv4.jpg" style="width:100%" onClick="currentSlide(4)" alt="V4">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv5.jpg" style="width:100%" onClick="currentSlide(5)" alt="V5">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv6.jpg" style="width:100%" onClick="currentSlide(6)" alt="V6">
    </div>
    <div class="column">
      <img class="demo cursor" src="versiones/ssv7.jpg" style="width:100%" onClick="currentSlide(7)" alt="V7">
    </div>

  </div>
</div>
</td>

<td> Lista de cambios y novedades
 <ul>
  <li> Se añadieron botones dinamicos a el menu </li>
  <li> Los botones se cambian a color rojo cuando estan seleccionados </li>
  <li> Al mantener el puntero de el mouse sobre un boton muestra la categoria</li>  
  <li> Titulos de las tablas de contenido resaltados </li>
  <li> Letra cursiva para versiones moviles, Linux y Mac </li>
 </ul>
</td>

</tr>
</table>
</div>

<br>



</blockquote></blockquote></blockquote></blockquote>
<br><br><br>

-->
</body>
</html>
