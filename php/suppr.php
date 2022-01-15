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
          
          if($ligne['image_news']!==""){
          @unlink('upload/'.$ligne['image_news']);
          $ligne="";
          }else{
          $ligne="";
          }
      
      /*effacer de la base*/
      $sql="DELETE FROM ".$table." WHERE id='".$id."' limit 1";
      
      $req= mysqli_query($cnx,$sql) or die ('Erreur sql !<br />'.$sql.'<br />'.mysqli_error($cnx));
      
      echo 'Article effacé ! <a href="form.php">Retour</a>';
      header('refresh:1; url=form.php');
      
      unset($id);
      
      }else{
      exit('Rien à voir ici ! <a href="index.php">Retour</a>');
      }

/*le bas dans chaque fichier protege*/
}else{
header('Location: deconnect.php');exit;
}
?>