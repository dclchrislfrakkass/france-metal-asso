<?php
<<<<<<< Updated upstream
// Appel conexion a la base
require '../php/pdo.php';
=======
include '../php/pdo.php';

>>>>>>> Stashed changes
// Requete catégorie STYLE METAL EXTREME:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='1' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL DARK AMBIENT ATMO:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='2' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE HARDCORE PUNK:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='3' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL HARD ROCK:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='4' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL HEAVY TRASH:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL FUSION:

<<<<<<< Updated upstream
$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
=======
$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
>>>>>>> Stashed changes
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();