
<?php
require_once('templates/head.php'); 
require_once("functions.php");
?>
 
<header class="index-header">
<?php 

require_once('templates/navigation.php');

require_once('templates/header.html');
  ?>
  </header>  


  <section class="about">
       <div class="container">
          <div class="row">
              <h1><img src="img/eline.jpg" alt="..." class="rounded-circle mt-5">     Over mij </h1>
     <p>Hallo, ik ben Eline en altijd al creatief geweest. Als kind zat ik altijd te tekenen en schilderen en hield ik van muziek. Ik wist al vroeg dat ik naar de kunstacademie wilde om "iets" met kunst te doen. Dat "iets" werd een zoektocht van jaren en is nu geworden tot iets concreets waar ik passie voor heb: webdevelopment en speciaal UI/UX Design. Deze passie is ontstaan tijdens het volgen van een bootcamp.
      Op deze pagina vertel ik hier meer over en krijg je een indruk van wat ik geleerd heb. 
    </p>
              <h2>Eindproject bootcamp</h2>
      In de  laatste weken van de Bootcamp heb ik gewerkt aan een eindproject waar ik enorm trots op ben. Hier zie je het resultaat: <br>
        <a class="btn btn-primary button" href="https://project-copycat.herokuapp.com/index.php" role="button">Live Demo</a>
              <h2>Techniek en creativiteit combineren</h2>
      <p>Mijn creatieve ervaringen uit het verleden kan ik toepassen binnen de IT! Dat is een eyeopener wat mij een nieuwe toekomst heeft gegeven waar ik werkelijk blij van word. Ik kan nu mijn ideeën digitaal realiseren. 
        Hoe kwam ik überhaupt op het idee om iets in de IT te gaan doen en te leren coderen? 
          </div>
      </div>
  </section>

		
<section class="content-section bg-light mt-5" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h3>"Ik heb het nog nooit gedaan dus ik denk dat ik het wel kan." <br>-Pippi Langkous-</h3>
            </div>
        </div>
      </div>
    </section>



<div class="container mt-5">
      <div class="row">
        <div class="col-sm  ">
          <a href="" class="custom-card ">
          <div class="card mb-5 mt-5 elinesShadow" style="max-width: 540px; ">
            <div class="row no-gutters">
              <div class="col-md-6 ">
                <img src="img/hack88.jpg" class="card-img" alt="..." />
              </div>
              <div class="col-md-6">
                <div class="card-body">
                   <h5 class="card-title"><b>CodeGorilla hackathon</b></h5> 

                  <p class="card-text">
                  De hackathon is een evenement dat twee werkdagen duurde. Alle teams kregen de opdracht een innovatieve en creatieve oplossing te bedenken voor een probleem. 
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
      
      


      
        <div class="col-sm">
           <a href="" class="custom-card"> 
          <div class="card mb-5 mt-5 elinesShadow" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-6">
                <img src="img/monkey.png" class="card-img" alt="..." />
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">
                    <b>CodeGorilla Bootcamp</b>
                  </h5>
                  <p class="card-text">
                  Gedurende 3 maanden leerde ik het programmeervak door het volgen van lessen, maar voornamelijk door het werken aan praktische casussen.
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            </a> 
    </div>



    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
           <h3>Opdrachten waar ik aan heb gewerkt:</h3>
          </div>
        </div>
      </div>
    </section>



    

    <div class="container mt-5 ">
  <div class="card-deck">

        <?php
        
          echo getCard("CV in HTML/CSS", "img/cv1.png", "Mijn eerste opdracht van de bootcamp.", "Maartje Doe","img/portret2.jpg" );
          echo getCard("Lesplan in HTML/CSS", "img/droomvanger.png", "Ik heb met Bootstrap een grid gemaakt die op muisbewegingen reageert.", "https://github.com/Eline75/leerplan", "img/portret2.jpg");
          echo getCard("Adresboek in JavaScript","img/adresboek.png", "Ik heb in Javascript een pagina gemaakt met twee functies (sorteren en verwijderen).", "https://eline-adresboek.herokuapp.com/","img/portret2.jpg");

        ?>
   
  </div>
</div>



<div class="container mt-5 ">
      <div class="card-deck">

        <?php
          
          echo getCard("Calculator in JavaScript", "img/calculator.jpg", "Hoe werkt dat? Een rekenmachine in JavaScript programmeren?", "Peter Doe","img/portret4.jpg" );
          echo getCard("Inlogformulieren maken met PHP", "img/inlogformulier.png","", "Peter Doe", "img/portret4.jpg");
          echo getCard("Veilig inloggen","img/inlog.png", "Hoe kun je veilig inloggen?", "Peter Doe","img/portret4.jpg");

        ?>
   
 </div>
</div>

<div class="container mt-5 ">
      <div class="card-deck">

        <?php
        
          echo getCard("MySQL in combinatie met Linux", "img/MySql.png", "Ik heb geoefend met databases, soorten databases en het leren werken ermee.", "Anna Doe","img/portret.jpg" );
          echo getCard("Travelblog", "img/mytravelblog.png","Met behulp van een database kon ik gegevens ophalen die in de blog werden weergegeven.", "Anna Doe", "img/portret.jpg");
          echo getCard("Scrum","img/scrum.jpg", "We hebben een 2-daagse scrum cursus gevolgd die verzorgd werd door We::Code. Dit heeft mij inzicht gegeven in de voordelen en toepassing van Agile-softwareontwikkeling", "Anna Doe","img/portret.jpg");

        ?>
   
 </div>
</div>



<footer class="footer text-center">
      <div class="container">
        <p class="text-muted small mb-0">Copyright &copy; Eline 2019</p>
      </div>
    </footer>
  </body>
</html>



 
   

