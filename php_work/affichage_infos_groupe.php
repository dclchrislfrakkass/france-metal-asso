<?php

// Requete choix Groupe:

$choixgoupe = //goupe choisis au clic

$req = bdd->prepare("SELECT nomGroupe_Groupe, lien_Groupe, mail_Groupe, nomAlbum_Album, dateSortie_Album, label_Album, lienEcouteAlbum_Album, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE nomGroupe_Groupe = :choixGroupe");
$req→execute(array(
'choixGroupe' => $choixGroupe
));

while ($row = $req->fetch()){
     
}

$req >closeCursor();