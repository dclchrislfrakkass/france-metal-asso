<?php

try {
//         $service_url = 'http://local.web.tt.com:8615/api/product'; 
//         $get = file_get_contents($service_url);
//         $data = json_decode($get, true);
//         return $data;

// $json =file_get_contents('pdo.JSON');
// $dec=json_decode($json, true);

//$bd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
$bd=new PDO('mysql:host=localhost;dbname=p1216_5;charset=utf8', 'gen-005', 'x0ER2a(4]n5V');
//stock url 51.254.203.143
$bd->exec('SET NAMES utf8');
    
// echo 'Connexion OK';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

