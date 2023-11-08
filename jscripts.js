//Formulario de registro -------------------------------------------
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
//Termina formulario de registro--------------------------------
//Cuestionarios
function modulo2_adjetivos(){

  var question1 = document.quiz.question1.value;
  var question2 = document.quiz.question2.value;
  var question3 = document.quiz.question3.value;
  var question4 = document.quiz.question4.value;
  var question5 = document.quiz.question5.value;
  var question6 = document.quiz.question6.value;
  var question7 = document.quiz.question7.value;
  var question8 = document.quiz.question8.value;
  var question9 = document.quiz.question9.value;
  var question10 = document.quiz.question10.value;
  
  var correct = 0;

 if (question1 == "Feliz") {
    correct++;
}   
    if (question1 == "feliz") {
    correct++;
}   
    if (question1 == "FELIZ") {
    correct++;
}

  if (question2 == "Triste") {
    correct++;
} 
  if (question3 == "Enojado") {
    correct++;
  }

  if (question4 == "Inteligente") {
    correct++;
}
  if (question5 == "Serio") {
    correct++;
} 
  if (question6 == "Confiado") {
    correct++;
  }

  if (question7 == "Timido") {
    correct++;
}
  if (question8 == "Tonto") {
    correct++;
} 
  if (question9 == "Simpatico") {
    correct++;
  }


  if (question10 == "Bipolar") {
    correct++;
}
  
  
  var pictures = ["img/pasar.png", "img/pasarespasar.png", "img/sinpasar.png"];
  var messages = ["Congratulations! Test passed", "That's just okay! Test passed", "You need to study! Test not passed"];
  var score;

  //if (correct == 0) {
 //   score = 2;
 // }

  if (correct == 0) {
   score = 2;
  }
  if (correct == 1) {
   score = 2;
  }
  if (correct == 2) {
   score = 2;
  }
  if (correct == 3) {
   score = 2;
  }
  if (correct == 4) {
   score = 2;
  }
  if (correct == 5) {
   score = 1;
  }
  if (correct == 6) {
   score = 1;
  }
  if (correct == 7) {
   score = 1;
  }
  if (correct == 8) {
   score = 0;
  }
  if (correct == 9) {
   score = 0;
  }
  if (correct == 10) {
   score = 0;
  }

  document.getElementById("after_submit").style.visibility = "visible";

  document.getElementById("message").innerHTML = messages[score];
  document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
  document.getElementById("picture").src = pictures[score];
  }







  function modulo2_profesiones(){

  var question1 = document.quiz.question1.value;
  var question2 = document.quiz.question2.value;
  var question3 = document.quiz.question3.value;
  var question4 = document.quiz.question4.value;
  var question5 = document.quiz.question5.value;
  var question6 = document.quiz.question6.value;
  var question7 = document.quiz.question7.value;
  var question8 = document.quiz.question8.value;
  var question9 = document.quiz.question9.value;
  var question10 = document.quiz.question10.value;
  var correct = 0;


  if (question1 == "Bus driver") {
    correct++;
}
  if (question2 == "Doctor") {
    correct++;
} 
  if (question3 == "Waitress") {
    correct++;
  }

  if (question4 == "Nurse") {
    correct++;
  }

  if (question5 == "Chef") {
    correct++;
  }

  if (question6 == "Babysitter") {
    correct++;
}
  if (question7 == "Delivery person") {
    correct++;
} 
  if (question8 == "Receptionist") {
    correct++;
  }

  if (question9 == "Waiter") {
    correct++;
  }

  if (question10 == "Salesperson") {
    correct++;
  }
  
  var pictures = ["img/pasar.png", "img/pasarespasar.png", "img/sinpasar.png"];
  var messages = ["Congratulations! Test passed", "That's just okay! Test passed", "You need to study! Test not passed"];
  var score;

 if (correct == 0) {
   score = 2;
  }
  if (correct == 1) {
   score = 2;
  }
  if (correct == 2) {
   score = 2;
  }
  if (correct == 3) {
   score = 2;
  }
  if (correct == 4) {
   score = 2;
  }
  if (correct == 5) {
   score = 1;
  }
  if (correct == 6) {
   score = 1;
  }
  if (correct == 7) {
   score = 1;
  }
  if (correct == 8) {
   score = 0;
  }
  if (correct == 9) {
   score = 0;
  }
  if (correct == 10) {
   score = 0;
  }

  document.getElementById("after_submit").style.visibility = "visible";

  document.getElementById("message").innerHTML = messages[score];
  document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
  document.getElementById("picture").src = pictures[score];
  }


  function modulo2_apariencia(){

  var question1 = document.quiz.question1.value;
  var question2 = document.quiz.question2.value;
  var question3 = document.quiz.question3.value;

  var question4 = document.quiz.question4.value;
  var question5 = document.quiz.question5.value;
  var question6 = document.quiz.question6.value;

  var question7 = document.quiz.question7.value;
  var question8 = document.quiz.question8.value;
  var question9 = document.quiz.question9.value;

  var question10 = document.quiz.question10.value;
  
  var correct = 0;


  if (question1 == "Chubby") {
    correct++;
}
  if (question2 == "Old") {
    correct++;
} 
  if (question3 == "Short hair") {
    correct++;
  }

  if (question4 == "Blond hair") {
    correct++;
}
  if (question5 == "Muscular") {
    correct++;
} 
  if (question6 == "Young") {
    correct++;
  }

  if (question7 == "Long hair") {
    correct++;
}
  if (question8 == "Eyes blues") {
    correct++;
} 
  if (question9 == "Tall") {
    correct++;
  }


  if (question10 == "Slim") {
    correct++;
}
  
  
  var pictures = ["img/pasar.png", "img/pasarespasar.png", "img/sinpasar.png"];
  var messages = ["Congratulations! Test passed", "That's just okay! Test passed", "You need to study! Test not passed"];
  var score;

 if (correct == 0) {
   score = 2;
  }
  if (correct == 1) {
   score = 2;
  }
  if (correct == 2) {
   score = 2;
  }
  if (correct == 3) {
   score = 2;
  }
  if (correct == 4) {
   score = 2;
  }
  if (correct == 5) {
   score = 1;
  }
  if (correct == 6) {
   score = 1;
  }
  if (correct == 7) {
   score = 1;
  }
  if (correct == 8) {
   score = 0;
  }
  if (correct == 9) {
   score = 0;
  }
  if (correct == 10) {
   score = 0;
  }

  document.getElementById("after_submit").style.visibility = "visible";

  document.getElementById("message").innerHTML = messages[score];
  document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
  document.getElementById("picture").src = pictures[score];
  }
  










    function modulo2_Quehaceres(){

  var question1 = document.quiz.question1.value;
  var question2 = document.quiz.question2.value;
  var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
    var question6 = document.quiz.question6.value;
  var question7 = document.quiz.question7.value;
  var question8 = document.quiz.question8.value;
    var question9 = document.quiz.question9.value;
    var question10 = document.quiz.question10.value;
  var correct = 0;


  if (question1 == "Set the table") {
    correct++;
}
  if (question2 == "Wash the windows") {
    correct++;
} 
  if (question3 == "Laundry") {
    correct++;
  }

  if (question4 == "Do the dishes") {
    correct++;
  }

  if (question5 == "Make the bed") {
    correct++;
  }

  if (question6 == "Iron") {
    correct++;
}
  if (question7 == "Take out the trash") {
    correct++;
} 
  if (question8 == "Trap") {
    correct++;
  }

  if (question9 == "Sweep") {
    correct++;
  }

  if (question10 == "To water") {
    correct++;
  }
  
  var pictures = ["img/pasar.png", "img/pasarespasar.png", "img/sinpasar.png"];
  var messages = ["Congratulations! Test passed", "That's just okay! Test passed", "You need to study! Test not passed"];
  var score;

  if (correct == 0) {
   score = 2;
  }
  if (correct == 1) {
   score = 2;
  }
  if (correct == 2) {
   score = 2;
  }
  if (correct == 3) {
   score = 2;
  }
  if (correct == 4) {
   score = 2;
  }
  if (correct == 5) {
   score = 1;
  }
  if (correct == 6) {
   score = 1;
  }
  if (correct == 7) {
   score = 1;
  }
  if (correct == 8) {
   score = 0;
  }
  if (correct == 9) {
   score = 0;
  }
  if (correct == 10) {
   score = 0;
  }

  document.getElementById("after_submit").style.visibility = "visible";

  document.getElementById("message").innerHTML = messages[score];
  document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
  document.getElementById("picture").src = pictures[score];
  }
  






   
         
     
         
     function playNariz(){
              var audioNariz = document.getElementById("audioNariz");
          audioNariz.play();
                }




                 function playOreja(){
              var audioOreja = document.getElementById("audioOreja");
          audioOreja.play();
                }
  

     function playOjos(){
              var audioOjos = document.getElementById("audioOjos");
          audioOjos.play();
                }

                function playLengua(){
              var audioLengua = document.getElementById("audioLengua");
          audioLengua.play();
                }

                 function playFrente(){
              var audioFrente = document.getElementById("audioFrente");
          audioFrente.play();
                }


                  function playCeja(){
              var audioCeja = document.getElementById("audioCeja");
          audioCeja.play();
                }



                   function playMejilla(){
              var audioMejilla = document.getElementById("audioMejilla");
          audioMejilla.play();
                }

                  function playDientes(){
              var audioDientes = document.getElementById("audioDientes");
          audioDientes.play();
                }

                    function playLabios(){
              var audioLabios = document.getElementById("audioLabios");
          audioLabios.play();
                }


                 function playBarbilla(){
              var audioBarbilla = document.getElementById("audioBarbilla");
          audioBarbilla.play();
                }


                  function playPecho(){
              var audioPecho = document.getElementById("audioPecho");
          audioPecho.play();
                }


                 function playBrazo(){
              var audioBrazo = document.getElementById("audioBrazo");
          audioBrazo.play();
                }


                 function playEstomago(){
              var audioEstomago = document.getElementById("audioEstomago");
          audioEstomago.play();
                }


                   function playManos(){
              var audioManos = document.getElementById("audioManos");
          audioManos.play();
                }

                   function playPierna(){
              var audioPierna = document.getElementById("audioPierna");
          audioPierna.play();
                }

                 function playRodilla(){
              var audioRodilla = document.getElementById("audioRodilla");
          audioRodilla.play();
                }
  
   function playPie(){
              var audioPie = document.getElementById("audioPie");
          audioPie.play();
                }


                function playDedodelpie(){
              var audioDedodelpie = document.getElementById("audioDedodelpie");
          audioDedodelpie.play();
                }











                 function playLeon(){
              var audioLeon = document.getElementById("audioLeon");
          audioLeon.play();
                }

                function playElefante(){
              var audioElefante = document.getElementById("audioElefante");
          audioElefante.play();
                }


                function playPerro(){
              var audioPerro = document.getElementById("audioPerro");
          audioPerro.play();
                }


                  function playCaballo(){
              var audioCaballo = document.getElementById("audioCaballo");
          audioCaballo.play();
                }


                  function playVaca(){
              var audioVaca = document.getElementById("audioVaca");
          audioVaca.play();
                }
  
   function playCalamar(){
              var audioCalamar = document.getElementById("audioCalamar");
          audioCalamar.play();
                }

                  function playTortuga(){
              var audioTortuga = document.getElementById("audioTortuga");
          audioTortuga.play();
                }
  
     function playTiburon(){
              var audioTiburon = document.getElementById("audioTiburon");
          audioTiburon.play();
                }


                  function playCangrejo(){
              var audioCangrejo = document.getElementById("audioCangrejo");
          audioCangrejo.play();
                }
  
  function playCaballo_mar(){
              var audioCaballo_mar = document.getElementById("audioCaballo_mar");
          audioCaballo_mar.play();
                }

                function playAguila(){
              var audioAguila = document.getElementById("audioAguila");
          audioAguila.play();
                }


                 function playPaloma(){
              var audioPaloma = document.getElementById("audioPaloma");
          audioPaloma.play();
                }

                 function playPerico(){
              var audioPerico = document.getElementById("audioPerico");
          audioPerico.play();
                }

                  function playTucan(){
              var audioTucan = document.getElementById("audioTucan");
          audioTucan.play();
                }

                  function playCigueña(){
              var audioCigueña = document.getElementById("audioCigueña");
          audioCigueña.play();
                }

                  function playBuitre(){
              var audioBuitre = document.getElementById("audioBuitre");
          audioBuitre.play();
                }

                 

                
                  function playBlanco(){
              var audioBlanco = document.getElementById("audioBlanco");
          audioBlanco.play();
                } 


                   function playAmarillo(){
              var audioAmarillo = document.getElementById("audioAmarillo");
          audioAmarillo.play();
                } 


                  function playAzul(){
              var audioAzul = document.getElementById("audioAzul");
          audioAzul.play();
                } 

                  function playGris(){
              var audioGris = document.getElementById("audioGris");
          audioGris.play();
                } 




                  function playCafe(){
              var audioCafe = document.getElementById("audioCafe");
          audioCafe.play();
                } 


                 function playNegro(){
              var audioNegro = document.getElementById("audioNegro");
          audioNegro.play();
                } 

                 function playRosa(){
              var audioRosa = document.getElementById("audioRosa");
          audioRosa.play();
                } 


                 function playNaranja(){
              var audioNaranja = document.getElementById("audioNaranja");
          audioNaranja.play();
                }



                  function playVerde(){
              var audioVerde = document.getElementById("audioVerde");
          audioVerde.play();
                } 




                  function playRojo(){
              var audioRojo = document.getElementById("audioRojo");
          audioRojo.play();
                }   


                 function playMorado(){
              var audioMorado = document.getElementById("audioMorado");
          audioMorado.play();
                }   





                 function n11(){
              var n11 = document.getElementById("n11");
          n11.play();
                      }
              
    function n12(){
              var n12 = document.getElementById("n12");
          n12.play();
                      }
              
    function n13(){
              var n13 = document.getElementById("n13");
          n13.play();
                      }
              
      function n14(){
              var n14 = document.getElementById("n14");
          n14.play();
                      }
              
    function n15(){
              var n15 = document.getElementById("n15");
          n15.play();
                      }
              
    function n16(){
              var n16 = document.getElementById("n16");
          n16.play();
                      }
              
      function n17(){
              var n17 = document.getElementById("n17");
          n17.play();
                      }
              
    function n18(){
              var n18 = document.getElementById("n18");
          n18.play();
                      }
              
    function n19(){
              var n19 = document.getElementById("n19");
          n19.play();
                      }
              
    function n20(){
              var n20 = document.getElementById("n20");
          n20.play();
                      }
              
    function n30(){
              var n30 = document.getElementById("n30");
          n30.play();
                      }
              
    function n40(){
              var n40 = document.getElementById("n40");
          n40.play();
                      }
              
    function n50(){
              var n50 = document.getElementById("n50");
          n50.play();
                      }
              
    function n60(){
              var n60 = document.getElementById("n60");
          n60.play();
                      }
              
    function n70(){
              var n70 = document.getElementById("n70");
          n70.play();
                      }
              
    function n80(){
              var n80 = document.getElementById("n80");
          n80.play();
                      }
              
    function n90(){
              var n90 = document.getElementById("n90");
          n90.play();
                      }
              
    function n100(){
              var n100 = document.getElementById("n100");
          n100.play();
                      }
              
    function lapiz(){
              var lapiz = document.getElementById("lapiz");
          lapiz.play();
                      }
          
          function borrador(){
              var borrador = document.getElementById("borrador");
          borrador.play();
                      }
              
          function crayolas(){
              var crayolas = document.getElementById("crayolas");
          crayolas.play();
                      }
              
          function sacapuntas(){
              var sacapuntas = document.getElementById("sacapuntas");
          sacapuntas.play();
                      }
              
          function tijeras(){
              var tijeras = document.getElementById("tijeras");
          tijeras.play();
                      }
              
          function pluma(){
              var pluma = document.getElementById("pluma");
          pluma.play();
                      }
              
          function libro(){
              var libro = document.getElementById("libro");
          libro.play();
                      }
              
          function hojas(){
              var hojas = document.getElementById("hojas");
          hojas.play();
                      }
              
          function cuaderno(){
              var cuaderno = document.getElementById("cuaderno");
          cuaderno.play();
                      }
              
          function abuelo(){
              var abuelo = document.getElementById("abuelo");
          abuelo.play();
                      }
          function abuela(){
              var abuela = document.getElementById("abuela");
          abuela.play();
                      }
              
      function mama(){
              var mama = document.getElementById("mama");
          mama.play();
                      }
              
      function papa(){
              var papa = document.getElementById("papa");
          papa.play();
                      }
              
      function tia(){
              var tia = document.getElementById("tia");
          tia.play();
                      }
              
      function tio(){
              var tio = document.getElementById("tio");
          tio.play();
                      }
              
      function hermano(){
              var hermano = document.getElementById("hermano");
          hermano.play();
                      }
              
     function hermana(){
              var hermana = document.getElementById("hermana");
          hermana.play();
                      }
              
     function prima(){
              var prima = document.getElementById("prima");
          prima.play();
                      }
              
     function primo(){
              var primo = document.getElementById("primo");
          primo.play();
                      }  
              
     function canada(){
              var canada = document.getElementById("canada");
          canada.play();
                      }
              
     function canada2(){
              var canada2 = document.getElementById("canada2");
          canada2.play();
                      }
              
    function  usa(){
              var usa = document.getElementById("usa");
          usa.play();
                      }
              
    function  usa2(){
              var usa2 = document.getElementById("usa2");
          usa2.play();
                      }
              
    function  mexico(){
              var mexico = document.getElementById("mexico");
          mexico.play();
                      }
              
    function  mexico2(){
              var mexico2 = document.getElementById("mexico2");
          mexico2.play();
                      }
              
      function  brazil(){
              var brazil = document.getElementById("brazil");
          brazil.play();
                      }
              
    function  brazil2(){
              var brazil2 = document.getElementById("brazil2");
          brazil2.play();
                      }
              
    function  uk(){
              var uk = document.getElementById("uk");
          uk.play();
                      }
              
    function  uk2(){
              var uk2 = document.getElementById("uk2");
          uk2.play();
                      }
              
              
    function  spain(){
              var spain = document.getElementById("spain");
          spain.play();
                      }
              
      function  spain2(){
              var spain2 = document.getElementById("spain2");
          spain2.play();
                      }
              
    function  italy(){
              var italy = document.getElementById("italy");
          italy.play();
                      }
              
    function  italy2(){
              var italy2 = document.getElementById("italy2");
          italy2.play();
                      }
              
    function  china(){
              var china = document.getElementById("china");
          china.play();
                      }
              
    function  china2(){
              var china2 = document.getElementById("china2");
          china2.play();
                      }
              
    function  sudafrica(){
              var sudafrica = document.getElementById("sudafrica");
          sudafrica.play();
                      }
              
    function  sudafrica2(){
              var sudafrica2 = document.getElementById("sudafrica2");
          sudafrica2.play();
                      }
              
    function  australia(){
              var australia = document.getElementById("australia");
          australia.play();
                      } 
              
    function  australia2(){
              var australia2 = document.getElementById("australia2");
          australia2.play();
                      }           
    
      function boli(){
              var boli = document.getElementById("boli");
          boli.play();
                      }
              
      function americano(){
              var americano = document.getElementById("americano");
          americano.play();
                      }
              
      function fut(){
              var fut = document.getElementById("fut");
          fut.play();
                      }
              
      function caballos(){
              var caballos = document.getElementById("caballos");
          caballos.play();
                      }
              
      function ciclismo(){
              var ciclismo = document.getElementById("ciclismo");
          ciclismo.play();
                      }
              
      function surf(){
              var surf = document.getElementById("surf");
          surf.play();
                      }
              
      function box(){
              var box = document.getElementById("box");
          box.play();
                      }
              
      function beis(){
              var beis = document.getElementById("beis");
          beis.play();
                      }
              
      function basquet(){
              var basquet = document.getElementById("basquet");
          basquet.play();
                      }
              
      function hoki(){
              var hoki = document.getElementById("hoki");
          hoki.play();
                      }
              
      function boli(){
              var boli = document.getElementById("boli");
          boli.play();
                      }
              
      function esqui(){
              var esqui = document.getElementById("esqui");
          esqui.play();
                      }
              
      function pesas(){
              var pesas = document.getElementById("pesas");
          pesas.play();
                      }
              
      function rugbi(){
              var rugbi = document.getElementById("rugbi");
          rugbi.play();
                      }
             
      function nadar(){
              var nadar = document.getElementById("nadar");
          nadar.play();
                      }
              
      function tenis(){
              var tenis = document.getElementById("tenis");
          tenis.play();
                      }
  
 






 function playA(){
              var audioA = document.getElementById("audioA");
          audioA.play();
                }


      function playB(){
              var audioB = document.getElementById("audioB");
          audioB.play();
                }

                function playC(){
              var audioC = document.getElementById("audioC");
          audioC.play();
                }
function playD(){
              var audioD = document.getElementById("audioD");
          audioD.play();
                }
                function playD(){
              var audioD = document.getElementById("audioD");
          audioD.play();
                }

                function playE(){
              var audioE = document.getElementById("audioE");
          audioE.play();
                }

                function playF(){
              var audioF = document.getElementById("audioF");
          audioF.play();
                }

                function playG(){
              var audioG = document.getElementById("audioG");
          audioG.play();
                }

                function playH(){
              var audioH = document.getElementById("audioH");
          audioH.play();
                }

                function playB(){
              var audioB = document.getElementById("audioB");
          audioB.play();
                }

                function playI(){
              var audioI = document.getElementById("audioI");
          audioI.play();
                }

                function playJ(){
              var audioJ = document.getElementById("audioJ");
          audioJ.play();
                }

                function playK(){
              var audioK = document.getElementById("audioK");
          audioK.play();
                }

                function playL(){
              var audioL = document.getElementById("audioL");
          audioL.play();
                }

                function playM(){
              var audioM = document.getElementById("audioM");
          audioM.play();
                }

                function playN(){
              var audioN = document.getElementById("audioN");
          audioN.play();
                }

                function playO(){
              var audioO = document.getElementById("audioO");
          audioO.play();
                }

                function playP(){
              var audioP = document.getElementById("audioP");
          audioP.play();
                }

                function playQ(){
              var audioQ = document.getElementById("audioQ");
          audioQ.play();
                }

                function playR(){
              var audioR = document.getElementById("audioR");
          audioR.play();
                }

                function playS(){
              var audioS = document.getElementById("audioS");
          audioS.play();
                }

                function playT(){
              var audioT = document.getElementById("audioT");
          audioT.play();
                }

                function playU(){
              var audioU = document.getElementById("audioU");
          audioU.play();
                }

                function playU(){
              var audioU = document.getElementById("audioU");
          audioU.play();
                }

                function playV(){
              var audioV = document.getElementById("audioV");
          audioV.play();
                }

                   function playW(){
              var audioW = document.getElementById("audioW");
          audioW.play();
                }

                function playX(){
              var audioX = document.getElementById("audioX");
          audioX.play();
                }

                function playY(){
              var audioY = document.getElementById("audioY");
          audioY.play();
                }

                function playZ(){
              var audioZ = document.getElementById("audioZ");
          audioZ.play();
                }

               
                function playA0(){
              var audioA0 = document.getElementById("audioA0");
          audioA0.play();
                }
               
               function playB1(){
              var audioB1 = document.getElementById("audioB1");
          audioB1.play();
                } 


            
                function playC2(){
              var audioC2 = document.getElementById("audioC2");
          audioC2.play();
                }


                 function playD3(){
              var audioD3 = document.getElementById("audioD3");
          audioD3.play();
                }

                function playE4(){
              var audio4 = document.getElementById("audioE4");
          audioE4.play();
                }

                function playF5(){
              var audioF5 = document.getElementById("audioF5");
          audioF5.play();
                }

                function playG6(){
              var audioG6 = document.getElementById("audioG6");
          audioG6.play();
                }

                function playH7(){
              var audioH7 = document.getElementById("audioH7");
          audioH7.play();
                }


                function playI8(){
              var audioI8 = document.getElementById("audioI8");
          audioI8.play();
                }

                function playJ9(){
              var audioJ9 = document.getElementById("audioJ9");
          audioJ9.play();
                }

                function playK10(){
              var audioK10 = document.getElementById("audioK10");
          audioK10.play();
                }

                  function playcloseb(){
              var audiocloseb = document.getElementById("audiocloseb");
          audiocloseb.play();
                }

                      function playread(){
              var audioread = document.getElementById("audioread");
          audioread.play();
                }

                       function playescribir(){
              var audioesribir = document.getElementById("audioescribir");
          audioescribir.play();
                }

                         function playspeak(){
              var audiospeak = document.getElementById("audiospeak");
          audiospeak.play();
                }

                         function playopenb(){
              var audioopenb = document.getElementById("audioopenb");
          audioopenb.play();
                }

                         function playtalk(){
              var audiotalk = document.getElementById("audiotalk");
          audiotalk.play();
                }

                         function playtabla(){
              var audiotabla = document.getElementById("audiotabla");
          audiotabla.play();
                }
                         function playup(){
              var audioup = document.getElementById("audioup");
          audioup.play();
                }

                     function playdown(){
              var audiodown = document.getElementById("audiodown");
          audiodown.play();
                }


//Cuestionarios
function modulo3_test(){

  var question1 = document.quiz.question1.value;
  var question2 = document.quiz.question2.value;
  var question3 = document.quiz.question3.value;
  var question4 = document.quiz.question4.value;
  var question5 = document.quiz.question5.value;
  var question6 = document.quiz.question6.value;
  var question7 = document.quiz.question7.value;
  var question8 = document.quiz.question8.value;
  var question9 = document.quiz.question9.value;
  var question10 = document.quiz.question10.value;
  var question11 = document.quiz.question11.value;
  var question12 = document.quiz.question12.value;
  var question13 = document.quiz.question13.value;
  var question14 = document.quiz.question14.value;
  var question15 = document.quiz.question15.value;
  var question16 = document.quiz.question16.value;
  var question17 = document.quiz.question17.value;
  var question18 = document.quiz.question18.value;
  var question19 = document.quiz.question19.value;
  var question20 = document.quiz.question20.value;
  var question21 = document.quiz.question21.value;
  var question22 = document.quiz.question22.value;
  var question23 = document.quiz.question23.value;
  var question24 = document.quiz.question24.value;
  var question25 = document.quiz.question25.value;
  var question26 = document.quiz.question26.value;
  
  var correct = 0;

 if (question1 == "There are") {correct++;}
 if (question1 == "there are") {correct++;}
 if (question1 == "THERE ARE") {correct++;}
 
 if (question2 == "There is") {correct++;} 
 if (question2 == "there is") {correct++;} 
 if (question2 == "THERE IS") {correct++;} 
 
 if (question3 == "There are") {correct++;}
 if (question3 == "there are") {correct++;}
 if (question3 == "THERE ARE") {correct++;}

 if (question4 == "There is") {correct++;}
 if (question4 == "there is") {correct++;}
 if (question4 == "THERE IS") {correct++;}

 if (question5 == "There isn't") {correct++;}
 if (question5 == "there isn't") {correct++;}
 if (question5 == "THERE ISN'T") {correct++;}
 //-------------------------------
 if (question6 == "Teachers") {correct++;}
 if (question6 == "teachers") {correct++;}
 if (question6 == "TEACHERS") {correct++;}

 if (question7 == "Men") {correct++;}
 if (question7 == "men") {correct++;}
 if (question7 == "MEN") {correct++;}
  
 if (question8 == "Women") {correct++;}
 if (question8 == "women") {correct++;}
 if (question8 == "WOMEN") {correct++;}
 //----
 if (question9 == "Nationalities") {correct++;}
 if (question9 == "nationalities") {correct++;}
 if (question9 == "NATIONALITIES") {correct++;}
 //
 if (question10 == "Waiters") {correct++;}
 if (question10 == "waiters") {correct++;}
 if (question10 == "WAITERS") {correct++;}
  
 if (question11 == "Waitresses") {correct++;}
 if (question11 == "waitresses") {correct++;}
 if (question11 == "WAITRESSES") {correct++;}
 //
 if (question12 == "People") {correct++;}
 if (question12 == "people") {correct++;}
 if (question12 == "PEOPLE") {correct++;}

 if (question13 == "Chairs") {correct++;}
 if (question13 == "chairs") {correct++;}
 if (question13 == "CHAIRS") {correct++;}
 //
 if (question14 == "Children") {correct++;}
 if (question14 == "children") {correct++;}
 if (question14 == "CHILDREN") {correct++;}

 if (question15 == "Girls") {correct++;}
 if (question15 == "girls") {correct++;}
 if (question15 == "GIRLS") {correct++;}

 if (question16 == "Boys") {correct++;}
 if (question16 == "boys") {correct++;}
 if (question16 == "BOYS") {correct++;}
 //
  if (question17 == "Bill is watching tv") {correct++;}
  if (question17 == "bill is watching tv") {correct++;}
  if (question17 == "BILL IS WATCHING TV") {correct++;}

  if (question18 == "The children are studying") {correct++;}
  if (question18 == "the children are studying") {correct++;}
  if (question18 == "THE CHILDREN ARE STUDYING") {correct++;}

  if (question19 == "Paul is swimming in the pool") {correct++;}
  if (question19 == "paul is swimming in the pool") {correct++;}
  if (question19 == "PAUL IS SWIMMING IN THE POOL") {correct++;}

  if (question20 == "They are making breakfast") {correct++;}
  if (question20 == "they are making breakfast") {correct++;}
  if (question20 == "THEY ARE MAKING BREAKFAST") {correct++;}
  //
  if (question21 == "False") {correct++;}

  if (question22 == "False") {correct++;}

  if (question23 == "True") {correct++;}

  if (question24 == "False") {correct++;}

  if (question25 == "True") {correct++;}

  if (question26 == "False") {correct++;}
  
  var pictures = ["passed.png", "soso.png", "notpassed.png"];
  var messages = ["Congratulations! Test passed", "You can do it bether! Test passed", "You need to study! Test not passed"];
  var score;

  //if (correct == 0) {
 //   score = 2;
 // }

  if (correct == 0) {score = 2;}
  if (correct == 1) {score = 2;}
  if (correct == 2) {score = 2;}
  if (correct == 3) {score = 2;}
  if (correct == 4) {score = 2;}
  if (correct == 5) {score = 2;}
  if (correct == 6) {score = 2;}
  if (correct == 7) {score = 2;}
  if (correct == 8) {score = 2;}
  if (correct == 9) {score = 2;}
  if (correct == 10) {score = 2;}
  if (correct == 11) {score = 2;}
  if (correct == 12) {score = 2;}
  if (correct == 13) {score = 1;}
  if (correct == 14) {score = 1;}
  if (correct == 15) {score = 1;}
  if (correct == 16) {score = 1;}
  if (correct == 17) {score = 1;}
  if (correct == 18) {score = 1;}
  if (correct == 19) {score = 1;}
  if (correct == 20) {score = 1;}
  if (correct == 21) {score = 0;}
  if (correct == 22) {score = 0;}
  if (correct == 23) {score = 0;}
  if (correct == 24) {score = 0;}
  if (correct == 25) {score = 0;}
  if (correct == 26) {score = 0;}
  

  document.getElementById("after_submitmodulos").style.visibility = "visible";
  document.getElementById("messagemod").innerHTML = messages[score];
  document.getElementById("number_correctmod").innerHTML = "You got " + correct + " answers correct.";
  document.getElementById("picture_modulo").src = pictures[score];
  }                