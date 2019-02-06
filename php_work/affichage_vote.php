<?php

// Requete affichage score votes catégorie STYLE METAL EXTREME:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='1' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req >closeCursor();



// Requete affichage score votes catégorie STYLE METAL DARK AMBIENT ATMO:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='2' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req >closeCursor();



// Requete affichage score votes catégorie STYLE HARDCORE PUNK:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='3' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req >closeCursor();



// Requete affichage score votes catégorie STYLE METAL HARD ROCK:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='4' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req >closeCursor();



// Requete affichage score votes catégorie STYLE METAL HEAVY TRASH:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req >closeCursor();



// Requete affichage score votes catégorie STYLE METAL FUSION:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='6' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req >closeCursor();