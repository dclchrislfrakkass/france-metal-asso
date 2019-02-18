<?php
// Appel conexion a la base
require 'pdo.php';
// Requete catégorie STYLE METAL EXTREME:

$req = $bd ->prepare("SELECT nomStylePrincipal_StylePrincipal, illustration FROM styleprincipal");
$req -> execute();

?>