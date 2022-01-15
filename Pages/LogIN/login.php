<?php
  session_start();
  require "../../php/config/connection.php";
  $_SESSION['user']=null;
  $_SESSION['pass']=null;
  
  if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']) && $_SERVER['REQUEST_METHOD']==='POST'){
          
          $u=$_POST['username'];
          $p=$_POST['password'];
          $u=md5($u);
          $p=md5($p);
          $_SESSION['user']=$u;
          $_SESSION['pass']=$p; 
          unset($u);
          unset($p);
          unset($POST['username']);
          unset($_POST['password']);
          header('Location: ../../php/form.php');exit;
      }else{
      }

  if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['inscription'])){
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];

    $sql="INSERT INTO internaute (nom,prenom,email) VALUES('$nom','$prenom','$email')";
    $req= mysqli_query($cnx,$sql) or die ('Erreur sql !<br />'.$sql.'<br />'.mysqli_error($cnx));
}
?>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../../IMG/cameroon-flag-button-round-icon-64.png" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Connectez-vous</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form name="frmUser" method="POST" action="" class="sign-in-form">
            <h2 class="title">Connexion</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="Connexion" class="btn solid" />
            <p class="social-text">Nos réseaux sociaux</p>
            <div class="social-media">
              <a href="https://www.facebook.com/mohamadou.abdoul/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/BaguiMohamadou" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="abdoulbaguimohamadou@gmail.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/in/mohamadou-abdoul-bagui-3a5427153/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form class="sign-up-form"  method="POST" action="">
            <h2 class="title">Inscription</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nom" placeholder="Nom" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="prenom" placeholder="Prenom" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>

            <input type="submit" name='inscription' class="btn" value="Inscription" />
            <p class="social-text">Nos réseaux sociaux</p>
            <div class="social-media">
              <a href="https://www.facebook.com/mohamadou.abdoul/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/BaguiMohamadou" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="abdoulbaguimohamadou@gmail.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/in/mohamadou-abdoul-bagui-3a5427153/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nouveau ici?</h3>
            <p>
              N'attendez plus, inscrivez vous dès maintenant et recevez toutes les nouvelles
              actus.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Inscription
            </button>
            <a href="../../index.php">
            <button class="btn transparent" id="sign-up-btn">
              Acceuil
            </button>
            </a>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Déjà inscrit ?</h3>
            <p>
              Ne perdez plus de temps. Cliquez ici pour acceder à votre compte et profitez des
              dernières actus.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Connexion
            </button>
            <a href="../../index.php">
            <button class="btn transparent" id="sign-up-btn">
              Acceuil
            </button>
            </a>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
