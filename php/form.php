<?php
session_start();
require('config/pass.php');

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


if($_SESSION['user']===$admin && $_SESSION['pass']===$pass){
/*le haut dans chaque fichier protege*/
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" type="image/png" href="../IMG/cameroon-flag-button-round-icon-64.png" />
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<title>Espace Administrateur</title>
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

    <header><img src="../IMG/37.jpg" width="100%" height="400px"></header> 
    <div id="sample">
    <script src="nicEdit/nicEdit.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
	    new nicEditor({iconsPath : 'nicEdit/nicEditorIcons.gif'}).panelInstance('area3');
    });
    </script>
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
          <li><a href="../index.php"><i class="fas fa-home"></i></a></li>
          <li><a href="../Pages/PlanS/plan.html"><i class="fas fa-map-pin"></i></a></li>
          <li><a href="../Pages/Qui-sommes nous/informations.html"><i class="fas fa-question"></i></a></li>
          <li><a href="../Pages/Contact/contact.html"><i class="fas fa-id-card"></i></a></li>
          <li><a href="../Pages/LogIN/login.php"><i class="fas fa-user-cog"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="../Pages/Sites et Monuments/sites.html" class="active">
          <span class="icon"><i class="fas fa-monument"></i></span>
          <span class="title">Sites et Monuments</span>
          </a></li>
        <li><a href="../Pages/Index/villes.html">
          <span class="icon"><i class="fas fa-city"></i></span>
          <span class="title">Index des villes</span>
          </a></li>
        <li><a href="../Pages/Maps/map.html">
          <span class="icon"><i class="fas fa-map-marker"></i></span>
          <span class="title">Google Maps</span>
          </a></li>
        <li><a href="../Pages/LiensU/utiles.html">
          <span class="icon"><i class="fas fa-link"></i></span>
          <span class="title">Liens Utiles</span>
          </a></li>
    </ul>
  </div>

  <div class="main_container">
  <h1 align="center">Ajouter un Article</h1>
    <div class="item" align="center">

        <form method="post" action="creer.php" enctype="multipart/form-data">
            <table cellspacing="10" cellpadding="10"> 
                <tr>
                    <th><a href="deconnect.php">Se deconnecter</a></th>   
                </tr>
                <tr>
                    <td>Titre: </td>
                    <td><input type="text" style="width:400px;" name="titre"/></td>
                </tr>
                <tr>
                    <td valign="top">Resumé: </td>
                    <td><textarea name="resume" style="width:400px; height:200px;" /></textarea></td>
                </tr>
                <tr>
                    <td valign="top"> Contenu: </td>
                    <td><textarea name="contenu" style="width:500px; height:200px;" id="area3" /></textarea></td>
                </tr>
                <tr>
                    <td>Image : </td>
                    <td><input name="logo" type="file" size="50" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p>
                        <input type="submit" name="upload" value="Envoyer">
                        </p>
                    </td>
                </tr>
            </table>
        </form>
        
    </div>
        <br>
        <h1 align="center">Gestion d'articles</h1>
        <?php
            require "config/connection.php";
            
            $sql="SELECT * FROM ".$table." ORDER BY id DESC LIMIT 0,5";
            $req= mysqli_query($cnx,$sql) or die ('Erreur sql!<br/>'.$sql.'<br/>'.mysqli_error($cnx));

            while($data=mysqli_fetch_assoc($req)){

            echo "<div class='item'>
                    <table border='0' cellpadding='10' cellspacing='10' width='100%'>

                    <tr>
                        <td valign='top'><p><h4><div>ID:" .$data["id"]. "</div></h4></p></td>
                    </tr>";
                        
            echo "<tr>
                        <td valign='top'><p><div>Publié le: " .dateFr($data["date_creation"])."</div></p></td>
                    </tr>";
                        
            echo "<tr>
					    <td valign='top'><p><div><b>Titre: </b>" .$data["titre"]."</div></p></td>
                    </tr>";
            
            echo "<tr>
                        <td valign='top'><p><div><b>Resumé: </b><br/>".stripslashes(html_entity_decode($data["resume"]))."</div></p></td>
                    </tr>";

			echo "<tr>
                        <td valign='top'><p><div><b>Contenu: </b>".stripslashes(html_entity_decode($data["contenu"]))."</div></p></td>
                        <td> 
                            <a href='upload/".$data["image_news"]."'><img src='upload/".$data["image_news"]."' border='0' height='200' width='300' alt='img' /></a>
                        </td>
                  </tr>";

			echo "<tr>
					    <td valign='top'><p><div><a href=\"edit.php?id=".$data["id"]."\">Modifier</a> | <a href=\"suppr.php?id=".$data["id"]."\">Supprimer</a></div></p>
                    </tr>
            
                </table></div>";
        }

        

/*le bas dans chaque fichier protege*/

        }else{
            header('Location: deconnect.php');exit;
        }
    ?>
      </div>
    </div>
  </div>

</body>
</html>