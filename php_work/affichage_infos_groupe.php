<?php
// Appel conexion a la base
require '../php/pdo.php';
// Requete choix Groupe:

$choixGroupe = 'DYSMORPHIC';//goupe choisis au clic

$req = $bd -> prepare("SELECT nomGroupe_Groupe, lien_Groupe, mail_Groupe, nomAlbum_Album, dateSortie_Album, label_Album, lienEcouteAlbum_Album, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE nomGroupe_Groupe = :choixGroupe");
$req -> execute(array(
'choixGroupe' => $choixGroupe
));

while ($row = $req->fetch()){
     
}

$req ->closeCursor();
