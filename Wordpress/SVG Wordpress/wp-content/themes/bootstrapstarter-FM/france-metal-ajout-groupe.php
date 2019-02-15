<?php /* Template Name: ajout */ ?>
<?php get_header(); ?>
<?php
session_start();
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
$req -> closeCursor();

//  Insertion des infos dans la table album:

$nomAlbum ='nom de l album';
$dateSortie = 'date de sortie';
$label = 'label';

$req = $bdd->prepare("INSERT INTO album (nomAlbum_Album, dateSortie_Album, label_Album) VALUES (:nomAlbum, :sortie, :label, :liens)");
$query->execute(array(
    'label' => $label,
    'nomAlbum'=>$nomAlbum,
    'sortie'=> $sortie
));
$req -> closeCursor();

// // Insertion des infos dans la table titre:

$lienClip = 'lien ddu ou des clip titre';
$lienTitre ='lien ecoute du ou des titre';

$query = $bdd->prepare("INSERT INTO titre (clip_Titre, lienEcouteTitre_Titre) VALUES (:clipTitre, :lienTitre)");
$query->execute(array(
    'clipTitre'=> $lienClip,
    'lienTitre' => $lienTitre
));
$req -> closeCursor();



