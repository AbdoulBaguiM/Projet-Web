<?php
session_start();
require('config/pass.php');

if($_SESSION['user']===$admin && $_SESSION['pass']===$pass){
/*le haut dans chaque fichier protege*/


      if(isset($_GET['id'])){
      
      $id =(int)$_GET['id'];
      
      unset($_GET['id']);
      
      ////////////////////////////////////////////////////////////////////////////////
      
      require "config/connection.php";
      
      mysqli_real_escape_string($cnx,$id);
      
      /*effacer image*/
      $sql="SELECT * FROM ".$table." WHERE id='".$id."' limit 1";
      
      $query=mysqli_query($cnx,$sql);
      
      $ligne=mysqli_fetch_array($query);
          
?>    

<html>
<head>
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" type="image/png" href="../IMG/cameroon-flag-button-round-icon-64.png" />
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<title>Modifier l'article</title>
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
    <h1 align="center">Modifier l'article <?php echo $ligne['id'] ?></h1>  
        
    <div class="item" align="center"> 
        <form method="post" action="modifier.php" enctype="multipart/form-data">
            <table cellspacing="10" cellpadding="10"> 
                <tr>
                    <td><a href="deconnect.php">Se deconnecter</a></td>
                </tr>    
                <tr>
                    <td>Titre: </td>
                    <td><input type="text" style="width:500px;" name="titre" value="<?php echo stripslashes(html_entity_decode($ligne['titre']));?>" /></td>
                </tr>
                <tr>
                    <td valing="top">Resumé: </td>
                    <td><textarea name="resume" style="width:500px; height:200px;"/><?php echo stripslashes(html_entity_decode($ligne['resume']));?></textarea></td>
                </tr>
                <tr>
                    <td valign="top">Contenu: </td>
                    <td><textarea name="contenu" style="width:500px; height:200px;" id="area3" /><?php echo stripslashes(html_entity_decode($ligne['contenu']));?></textarea></td>
                </tr>    
                <tr>
                    <td>Image actuelle</td>
                    <td>
                        <?php 
                            if($ligne['image_news']!==""){
                                echo '<img src="upload/'.$ligne['image_news'].'" height="90" width="120" alt="img" />';
                            }else {
                                echo 'Pas d\'image';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Changer d'image : </td>
                    <td><input name="logo" type="file" size="50" /></td>
                </td>
                <tr>
                    <td></td>
                    <td><p><input type="submit" name="upload" value="Envoyer"></p></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_p" value="<?php echo $ligne['id'];?>" /></td>
                </tr>
                <tr>
                    <td>Pour annuler</td>
                    <td><a href="form.php">Retour</a></td>
                </tr>
            </table>
        </form>
      </div>
    </div>
  </div>
  
    <?php
      
      unset($id);
      
      /*le bas dans chaque fichier protege*/
      }else{
      header('Location: deconnect.php');exit;
      }

        /*le bas dans chaque fichier protege*/
        }else{
        header('Location: deconnect.php');exit;
    }
    ?>

</body>
</html>