<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="IMG/cameroon-flag-button-round-icon-64.png" />
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<title>Articles</title>
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
          <li><a href="./Pages/LogIN/login.html"><i class="fas fa-user"></i></a></li>
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

  <div class="main_container">
    <div class="item">
      <?php

                function dateFr($dateDatetimeMysql){
                $d = explode(' ',$dateDatetimeMysql);
                /*date*/
                $d1=explode('-',$d[0]);
    
                $mois=array(0=>'Janvier',
                1=>'Février',
                2=>'Mars',
                3=>'Avril',
                4=>'Mai',
                5=>'Juin',
                6=>'Juillet',
                7=>'Août',
                8=>'Septembre',
                9=>'Octobre',
                10=>'Novembre',
                11=>'Décembre');
                
                $d[0]=$d1[2].' '.$mois[($d1[1]-1)].' '.$d1[0];
                /*heure*/
                $h=explode(':',$d[1]);
                $d[1]=' à '.$h[0].' h '.$h[1].' m '.$h[2].' s';
    
                $dateFR=$d[0].$d[1];
                return $dateFR;
            }
                require "./php/config/connection.php";
                $sql="SELECT * FROM ".$table." ORDER BY id DESC LIMIT 0,5";
                $req= mysqli_query($cnx,$sql) or die ('Erreur sql!<br/>'.$sql.'<br/>'.mysqli_error($cnx));

                while($data=mysqli_fetch_assoc($req)){

                    echo "<div class='item'><table border='0' cellpadding='10' cellspacing='10' width='100%'>
                    <th></th>
                    <th></th>
                          <tr>
                            <td valign='top'><p><h4><div>Article N° " .$data["id"]. "</div></h4></p></td>
                            </tr>";
                    
                    echo "<tr>
                            <td valign='top'><p><div>Publié le: " .dateFr($data["date_creation"])."</div></p></td>
                            </tr>";
                    echo "<tr>
                            <td valign='top'><p><div>Titre: " .$data["titre"]."</div></p></td>
                          </tr>";
        
                    echo "<tr>
                         <td valign='top'><p align='justify'>Resumé: <br/>".stripslashes(html_entity_decode($data["resume"]))."</p></td>
                        </tr>";

                    echo "<tr>
                            <td valign='top'><p><div>Contenu:".stripslashes(html_entity_decode($data["contenu"]))."</div></p></td>
                            <td> 
                              <a href='upload/".$data["image_news"]."'><img src='php/upload/".$data["image_news"]."' border='0' height='200' width='300' alt='img' /></a>
                            </td>
                            </tr>
                        </table></div>";
                    }

            ?>
    </div>
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