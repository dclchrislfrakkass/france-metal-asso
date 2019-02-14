<?php
// Appel connexion a la base
require '../php/pdo.php';
// Requete catégorie STYLE METAL EXTREME:

$req = $bd ->prepare("SELECT nomStylePrincipal_StylePrincipal, illustration FROM styleprincipal");
$req -> execute();

?>