<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery pour le Modal-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="IMG/cameroon-flag-button-round-icon-64.png" />
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
  <title>Acceuil</title>
	<script>
		$(document).ready(function(){
      $(".hamburger").click(function(){
				$(".wrapper").toggleClass("collapse")
        });
        
			});
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>


<body>
  <header><img src="IMG/37.jpg" width="100%" height="400px"></header> 

<div class="aside">
          <iframe width="300" height="300" src="https://www.youtube.com/embed/zvIjpZvAUls" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <?php
            include("./php/config/connection.php");
            if(file_exists('./php/pagination_mysqli.php')){
              @include('./php/pagination_mysqli.php');
              }else{
              //rien
              }
              ?>
</div>

  <span id="votre_id1" class="target"></span>
  <span id="votre_id2" class="target"></span>
  <span id="votre_id3" class="target"></span>
  <span id="votre_id4" class="target"></span>
  <div class="cadre_diapo">
    <div class="interieur_diapo">
        <div class=description><span>Monument de la Reunification</span><a href="#reunif"><img src="./IMG/Galerie/3.jpg" alt></a></div>
        <div class=description><span>Chutes Ekom Kam</span><a href="#chutes"><img src="./IMG/Galerie/2.jpg" alt></a></div>
        <div class=description><span>Monument de la Liberté</span><a href="#liberty"><img src="./IMG/Galerie/1.jpg" alt></a></div>
        <div class=description><span>Lamidat Bagalaf</span><a href="#lamidat"><img src="./IMG/Galerie/4.jpg" alt></a></div>
      </div>
    <ul class="navigation_diapo">
      <li><a href="#votre_id1"><img src="./IMG/Galerie/3.jpg" alt></a></li>
      <li><a href="#votre_id2"><img src="./IMG/Galerie/2.jpg" alt></a></li>
      <li><a href="#votre_id3"><img src="./IMG/Galerie/1.jpg" alt></a></li>
      <li><a href="#votre_id4"><img src="./IMG/Galerie/4.jpg" alt></a></li>
    </ul>
  </div>

  <br/>
  <div class="present">
    <img src="IMG/ban.png" width="100%" height="200px">
    <p class="p1">Le Cameroun (/ka.mə.ʁun/ ou /kam.ʁun/), en forme longue la république du Cameroun (en anglais : Cameroon et Republic of Cameroon), est un pays d'Afrique centrale, situé entre le Nigéria au nord-nord-ouest, le Tchad au nord-nord-est, la République centrafricaine à l'est, la république du Congo au sud-est, le Gabon au sud, la Guinée équatoriale au sud-ouest et le golfe de Guinée au sud-ouest. Les langues officielles sont le français et l'anglais pour un pays qui compte une multitude de langues locales.

        Avant la période coloniale, les habitants ne forment pas un seul groupe homogène et présentent plusieurs formes d'organisations sociales allant de royaumes structurés à des ethnies nomades. Aux anciens royaumes (Bamoun, Bodjongo, Adamaoua, Garoua) succède au xixe siècle la colonie allemande qui place le Cameroun sous protectorat. À l'issue de la Première Guerre mondiale, le Cameroun est placé sous la tutelle de la Société des Nations et confié à l'administration de la France pour sa partie orientale et du Royaume-Uni pour sa partie occidentale. L'ancien mandat de l'ONU sous administration française accède à l'indépendance sous l’appellation de république du Cameroun le 1er janvier 1960. Il est rejoint par la Cameroun du Sud (partie du territoire sous administration britannique) en octobre 1961 pour former la république fédérale du Cameroun qui, le 20 mai 1972, est renommée république unie du Cameroun, puis république du Cameroun en 1984. Comme pour la plupart des États d’Afrique, les frontières actuelles du pays résultent de la colonisation européenne qui a séparé des mêmes ethnies telles que les Fang-Beti qui se trouvent au Cameroun et au Gabon.

        Le Cameroun est aujourd'hui membre de droit de l'Organisation internationale de la francophonie, du Commonwealth ainsi que de l'Organisation de la coopération islamique.

        Le Cameroun est surnommé « l'Afrique en miniature »5 en raison de sa diversité climatologique, minière, géographique, humaine, linguistique et culturelle. L'ouest du pays présente une importante chaîne volcanique dominée par le mont Cameroun.
    </p>
    <table border="0" cellpadding="5" cellspacing="20" width="100%">
      <tr id="reunif">
        <td><img src="IMG/Galerie/7.jpg" width="125px" height="125px"></td>
        <td><p class="p1">Le monument de la réunification est situé à Yaoundé, la capitale du Cameroun. Il a été construit au début des années 1970 pour célébrer la réunification du Cameroun.</p>
      </tr>

      <tr id="chutes">
        <td><img src="IMG/Galerie/8.jpg" width="125px" height="125px"></td>
        <td><p class="p1">Les chutes d'Ekom sont des chutes d'eau situées dans le département du Moungo au Cameroun, à proximité de Melong, sur le fleuve Nkam. Elles sont hautes de 80 mètres.Les chutes d'Ekom sont localisées dans le village Ekom-Nkam, du peuple Baréko.</p></td>
      </tr>
      
      <tr id="liberty">
        <td><img src="IMG/Galerie/9.jpg" width="125px" height="125px"></td>
        <td><p class="p1">La Nouvelle Liberté est un monument célèbre monté dans la ville de Douala au Cameroun, et plus précisément dans le quartier Deido.</p></td>
      </tr>

      <tr id="lamidat">
        <td><img src="IMG/Galerie/10.jpg" width="125px" height="125px"></td>
        <td><p class="p1">Un lamidat est une chefferie traditionnelle musulmane peule dans le nord du Cameroun dans les régions de l’Extrême-Nord, du Nord et de l’Adamaoua.</p></td>
      </tr>

    </table>
  
  </div>

  <div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">
         CMWEB
      </div>
        <ul>
          <li><a href="index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="./Pages/PlanS/plan.html"><i class="fas fa-map-pin"></i></a></li>
          <li><a href="./Pages/Qui-sommes nous/informations.html"><i class="fas fa-question"></i></a></li>
          <li><a href="./Pages/Contact/contact.html"><i class="fas fa-id-card"></i></a></li>
        <li><a href="./Pages/LogIN/login.php">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="./Pages/Sites et Monuments/sites.html" class="active">
          <span class="icon"><i class="fas fa-monument"></i></span>
          <span class="title">Sites et Monuments</span>
          </a></li>
        <li><a href="./Pages/Index/villes.html">
          <span class="icon"><i class="fas fa-city"></i></span>
          <span class="title">Index des villes</span>
          </a></li>
        <li><a href="./Pages/Maps/map.html">
          <span class="icon"><i class="fas fa-map-marker"></i></span>
          <span class="title">Google Maps</span>
          </a></li>
        <li><a href="./Pages/LiensU/utiles.html">
          <span class="icon"><i class="fas fa-link"></i></span>
          <span class="title">Liens Utiles</span>
          </a></li>
    </ul>
  </div>
  </div>





<div class="footer-basic">
  <footer>
      <div class="social">
        <a href="https://www.instagram.com/mhd_abdel/?hl=fr"><i class="icon ion-social-instagram"></i></a>
        <a href="https://www.linkedin.com/in/mohamadou-abdoul-bagui-3a5427153/"><i class="icon ion-social-linkedin"></i></a>
        <a href="https://twitter.com/BaguiMohamadou"><i class="icon ion-social-twitter"></i></a>
        <a href="https://www.facebook.com/mohamadou.abdoul/"><i class="icon ion-social-facebook"></i></a></div>
      <ul class="list-inline">
          <li class="list-inline-item"><a href="index.php">Acceuil</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="./Pages/Qui-sommes nous/informations.html">Qui sommes-nous?</a></li>
          <li class="list-inline-item"><a href="#">Politique de Confidentialité</a></li>
      </ul>
      <p class="copyright">Copyrigth © 2021</p>
  </footer>
</div>


</body>
</html>