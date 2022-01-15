<?php

// connection à la base 
$mysqli = new mysqli($host, $login, $pass, $base); 
// affichage des erreurs
mysqli_report(MYSQLI_REPORT_ERROR); 
// nombre d'affichages par page
$per_page = 3;
// total des lignes de la table
if ($result = $mysqli->query("SELECT * FROM ".$table." ORDER BY date_creation DESC"))
{

    if ($result->num_rows != 0)
    
    {
    
    $total_results = $result->num_rows;
    
    // ceil() arrondir au dessus
    
    $total_pages = ceil($total_results / $per_page);
    
       
    if (isset($_GET['page']) && is_numeric($_GET['page']))
    
    {
    
    $show_page = (int)$_GET['page'];/*force le type a integer*/
    
    // $show_page value est valide
    
    if ($show_page > 0 && $show_page <= $total_pages)
    
    {
    
    $start = ($show_page -1) * $per_page;
    
    $end = $start + $per_page;
    
    }
    
    else
    
    {
    
    // erreur - on mmontre la premiere page
    
    $start = 0;
    
    $end = $per_page;
    
    }
    
    }
    
    else
    
    {
    
    // page non definie on va au debut
    
    $start = 0;
    
    $end = $per_page;
    
    }
    
    // affichage pagination
    
    echo '<p><a href="vue.php">Tout montrer</a> | <b>Voir la page:</b> ' ;
    
    for ($i = 1; $i <= $total_pages; $i++)
    
    {
    
    if (isset($_GET['page']) && $_GET['page'] === $i)
    
    {
    
        echo $i . ' ';
    
    }
    
    else
    
    {
    
        echo '<a href="?page='.$i.'">'.$i.'</a> ';
    
    }
    
    }
    
    echo '</p>';
    
    // affichage des donnees
    
    // boucle dans les resultats trouves
    
    for ($i = $start; $i < $end; $i++)
    
    {
    
    // pas de tentative dans le vide
    
        if ($i == $total_results) { break; }
    
        // on trouve la ligne
    
        $result->data_seek($i);
        
        $row = $result->fetch_row();
    
        // le contenu de chaque ligne
    
        /*date fr*/
        $date_time = explode(' ',$row[5]);
        $date = explode('-',$date_time[0]);
        $date_fr = $date[2].'-'.$date[1].'-'.$date[0];
        $row[5]= 'Posté le '.$date_fr.' à '.$date_time[1];
    
        echo "<br><i class='fas fa-newspaper'></i><b>" . $row[1] . "</b>
                <br>". stripslashes(html_entity_decode($row[2])) ."<br>";
        echo "<p><a href='#ex".$i."' rel='modal:open'>Lire la suite</a></p><br>";

        echo "
            <div id='ex".$i."' class='modal'>
                <center><a href='php/upload/".$row[4]."'><img src='php/upload/".$row[4]."' border='0' height='90' width='120' alt='img'/></a></center>
                Titre:  <b>" . $row[1] . "</b><br>" . $row[5] . "
                " . stripslashes(html_entity_decode($row[3]))  . "<br>
            </div>";
    }
   
    }
    
    else
    
    {
    
    echo "<p align='center'>Aucun article posté !<p>";
    
    }

}

// erreur de requete

else

{

    echo "Error: " . $mysqli->error;

}

// close database connection

$mysqli->close();
?>
