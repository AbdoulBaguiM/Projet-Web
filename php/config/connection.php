<?php

$host = 'localhost'; 
$login = 'root';
$pass = '';
$base = 'articles';
$table = 'news';


$cnx = mysqli_connect ($host, $login, $pass) or die (mysql_error ());
$ret = mysqli_select_db ($cnx,$base) or die (mysql_error ($cnx));
?>