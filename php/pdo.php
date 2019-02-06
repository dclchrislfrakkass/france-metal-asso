<?php

try {
$json =file_get_contents('pdo.JSON');
$dec=json_decode($json, true);

$bd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
//stock url 51.254.203.143
$bd->exec('SET NAMES utf8');
    
// echo 'Connexion OK';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


<? php

$query = $bdd->prepare("SELECT * FROM `album` where nomAlbum_Album like '%ca%'");


while ($q = $query->fetch()){ ?>
        <strong><?php echo $q['nomAlbum_Album']?> </strong>     
         }; ?>
        

