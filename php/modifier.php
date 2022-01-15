<?php
session_start();
require('config/pass.php');

function ControlUpload($file){

$ext = pathinfo($file,  PATHINFO_EXTENSION); 
$extensions = array('png', 'gif', 'jpg', 'jpeg'); 
    
      
    if(preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $file)){
    return false;
    }
    
    elseif(!in_array($ext, $extensions)){
    return false;
    }
          
   
    else{
    return true;
    } 

}


function ControlUploadTmp($file_tmp){
    
    $size_max = 300000;
    $taille = filesize($file_tmp);
     
            
    if($taille>$size_max){
    return false;
    }
    
    else{
    return true;
    } 

}



function ControlUploadMine($file_mine){
    
    $mine = array('image/jpeg','image/pjpeg','image/gif','image/png'); 
            
    if(!in_array($file_mine, $mine)){
    return false;
    }
    
    else{
    return true;
    } 

}


if($_SESSION['user']===$admin && $_SESSION['pass']===$pass){

        if(isset($_POST['upload']) && $_SERVER['REQUEST_METHOD']==='POST'){
        
        $id_p = (int)$_POST['id_p'];
        
        $rep = 'upload';
        if (@file_exists($rep)){
        }else{
        @mkdir($rep, 0705);
        }
        
        require "config/connection.php";
        
        
        foreach($_POST as $k => $v){
        $v=htmlentities($v);
        $v=mysqli_real_escape_string($cnx,$v);
        $_POST[$k]=$v;
        }
                
        extract($_POST);
        
        $id_p = mysqli_real_escape_string($cnx,$id_p);
                               
        
        if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == UPLOAD_ERR_OK && ControlUpload($_FILES["logo"]["name"])===true && ControlUploadTmp($_FILES["logo"]["tmp_name"]) && ControlUploadMine($_FILES["logo"]["type"]) ) {
                       
        $tmp_name = $_FILES["logo"]["tmp_name"];
        $image = $_FILES["logo"]["name"];
        move_uploaded_file($tmp_name,$rep.'/'.$image);
        
        /*effacer ancienne image*/
        $sql="SELECT * FROM ".$table." WHERE id='".$id_p."' limit 1";
        $query=mysqli_query($cnx,$sql);
        $ligne=mysqli_fetch_array($query);
        if($ligne['image_news']!==""){
        @unlink('upload/'.$ligne['image_news']);
        $ligne="";
        }else{
        $ligne="";
        }      
        
        $sql="UPDATE ".$table." SET titre='".$titre."',resume='".$resume."',contenu='".$contenu."',image_news='".$image."' WHERE id='".$id_p."' limit 1";
        } else {
        $image="";
        echo 'Aucune image !<br />';
        $sql="UPDATE ".$table." SET titre='".$titre."',resume='".$resume."',contenu='".$contenu."' WHERE id='".$id_p."' limit 1";
        }
        
        ////////////////////////////////////////////////////////////////////////////////
        
        
                
        //$sql="UPDATE SET ".$table." (titre,contenu,image_news,date_creation) VALUES ('".$titre."','".$contenu."','".$image."',now()) WHERE id='".$id_p."'";
        $req= mysqli_query($cnx,$sql) or die ('Erreur sql !<br />'.$sql.'<br />'.mysqli_error($cnx));
        echo 'Article modifié ! <a href="form.php">retour</a>';
        header('refresh:1; url=form.php');
        
        }else{
        echo 'Echec de la mdification! <a href="form.php">Retour</a>';
        header('refresh:1; url=form.php');
        }


/*le bas dans chaque fichier protege*/
}else{
header('Location: deconnect.php');exit;
}
?>