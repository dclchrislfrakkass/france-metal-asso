<?php
include '../php/pdo.php';

// Requete catégorie STYLE METAL EXTREME:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='1' ");

while ($row1 = $req->fetch()){
    echo $row1['nomGroupe_Groupe'];
     
};

$req->closeCursor();



// Requete catégorie STYLE METAL DARK AMBIENT ATMO:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='2' ");

while ($row = $req->fetch()){
     
}

$req->closeCursor();



// Requete catégorie STYLE HARDCORE PUNK:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='3' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL HARD ROCK:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='4' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL HEAVY TRASH:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();



// Requete catégorie STYLE METAL FUSION:

$req = $bdd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' ");

while ($row = $req->fetch()){
     
}

$req ->closeCursor();