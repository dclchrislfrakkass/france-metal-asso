<?php
session_start();
// Appel conexion a la base
require '../php/pdo.php';

// Recuperation des styles principaux:

$req=$bd->query("SELECT nomStylePrincipal_StylePrincipal FROM styleprincipal");

while ($row = $req->fetch()){
     echo '<h1>'.$row['nomStylePrincipal_StylePrincipal']. '</h1>';
}

$req -> closeCursor();

// Recuperation des style secondaires selon le style principale choisi:
$styleprincselect = 1;// style principale selectionner

$req=$bd->prepare("SELECT nomStyleSecondaire_StyleSecondaire FROM stylesecondaire
NATURAL JOIN stylePrincipal
WHERE idStylePrincipal_StylePrincipal = :styleprincselect ");
$req->execute(array(
    'styleprincselect' => $styleprincselect
));

while ($row = $req->fetch()){
     echo '<h2>'.$row['nomStyleSecondaire_StyleSecondaire']. '</h2>';
}
$req -> closeCursor();

// Insertion des infos du groupe dans la table groupe:

$nomGroupe = 'Nom du groupe';
$lienSite = 'Lien du site ou page facebook du groupe';
$mail = 'mail du groupe';
$telephone = 'telephone du groupe';

$req = $bdd->prepare("INSERT INTO groupe (nomGroupe_Groupe, lien_Groupe, mail_Groupe, telephone_Groupe) VALUES (:nomGroup, :lien, :mailGroupe, :telGroupe)");
$query->execute(array(
    'nomGroup'=> $nomGroup,
    'lien' => $lienSite,
    'mailGroupe' => $mail,
    'telGroupe' => $telephone
));


//  Insertion des infos dans la table album:

$nomAlbum ='nom de l album';
$dateSortie = 'date de sortie';
$label = 'label';

// // Insertion des infos dans la table titre:

// lien du clip titre
// lien ecoute du titre (jusqu a 3 liens)



