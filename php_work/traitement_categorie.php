<?php
// Appel connexion a la base
require '../php/pdo.php';
// Requete catégorie STYLE METAL EXTREME:

$req = $bd ->prepare("SELECT * FROM styleprincipal");
$req -> execute();

?>