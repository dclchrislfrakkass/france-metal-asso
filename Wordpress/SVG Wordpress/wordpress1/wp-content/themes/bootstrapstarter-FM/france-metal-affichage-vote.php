<?php /* Template Name: vote */ ?>
<?php get_header(); ?>
<?php
// Appel conexion a la base
//require '../php/pdo.php';
try {
    //$json =file_get_contents('pdo.JSON');
    //$dec=json_decode($json, true);
    
    //$bd=new PDO("mysql:host=".$dec['host'].";dbname=".$dec['dbName'], $dec['user'] , $dec['pass']);
    $bd=new PDO('mysql:host=localhost;dbname=p1216_5;charset=utf8', 'gen-005', 'x0ER2a(4]n5V');
    //stock url 51.254.203.143
    $bd->exec('SET NAMES utf8');
        
    // echo 'Connexion OK';
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
// Requete affichage score vote total:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();



// Requete affichage score votes catégorie STYLE METAL EXTREME:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='1' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();



// Requete affichage score votes catégorie STYLE METAL DARK AMBIENT ATMO:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='2' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();



// Requete affichage score votes catégorie STYLE HARDCORE PUNK:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='3' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();



// Requete affichage score votes catégorie STYLE METAL HARD ROCK:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='4' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();



// Requete affichage score votes catégorie STYLE METAL HEAVY TRASH:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='5' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();



// Requete affichage score votes catégorie STYLE METAL FUSION:

$req = $bd->query("SELECT nomGroupe_Groupe, nomStyleSecondaire_StyleSecondaire, nomStylePrincipal_StylePrincipal, note_Album FROM groupe
NATURAL JOIN album
NATURAL JOIN stylesecondaire
NATURAL JOIN styleprincipal
WHERE idStyleprincipal_StylePrincipal='6' 
ORDER BY note_Album");

while ($row = $req->fetch()){
     
}
$req ->closeCursor();