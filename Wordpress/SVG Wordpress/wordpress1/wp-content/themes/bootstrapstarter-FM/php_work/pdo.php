<?php

try {
//
////$dec=json_decode($json, true);

//$bd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
$bd=new PDO('mysql:host=localhost;dbname=p1216_5;charset=utf8', 'root', 'warlock');
//stock url 51.254.203.143
$bd->exec('SET NAMES utf8');
    
// echo 'Connexion OK';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


<? 

