<?php
// Connexion à la BDD
try {
    
    $bdd = new PDO('mysql:host=localhost; dbname=france_metal_asso', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
 
catch(exception $e) {
    die('Erreur '.$e->getMessage());
}

////////////////////////////////
//REMPLISSAGE DE LA TABLE ALBUM
////////////////////////////////

// Lecture du fichier CSV
$fichier = '.csv';          //à compléter avec celui que l'on veut injecter

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

foreach($csv as $ligne){
    print_r($ligne);
    echo '<br><br><br>';


    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();


$label = $ligne[7];
$nomAlbum= $ligne[2];
$sortie = $ligne[3];
$liens = $ligne[5];



    $query = $bdd->prepare("INSERT INTO album (nomAlbum_Album, dateSortie_Album, label_Album, lienEcouteAlbum_Album) VALUES (:nomAlbum, :sortie, :label, :liens)");
    $query->execute(array(
        'label' => $label,
        'nomAlbum'=>$nomAlbum,
        'sortie'=> $sortie,
        'liens'=> $liens
    ));
    echo '<br>';
    var_dump($query);
    echo '<br>';

}


////////////////////////////////
//REMPLISSAGE DE LA TABLE GROUPE
////////////////////////////////


foreach($csv as $ligne){
    // print_r($ligne);



    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();


$nomAlbum = $ligne[2];
$nomGroup = $ligne[1];
$lien = $ligne[10];
$mailGroupe = $ligne[11];
$telGroupe = $ligne[13];




$query = $bdd->prepare("INSERT INTO groupe (nomGroupe_Groupe, lien_Groupe, mail_Groupe, telephone_Groupe) VALUES (:nomGroup, :lien, :mailGroupe, :telGroupe)");
$query->execute(array(
    'nomGroup'=> $nomGroup,
    'lien' => $lien,
    'mailGroupe' => $mailGroupe,
    'telGroupe' => $telGroupe
));


}

////////////////////////////////
//REMPLISSAGE DE LA TABLE TITRE
////////////////////////////////


foreach($csv as $ligne){
    // print_r($ligne);




    // pour enlever la contrainte de clé étrangère
    $requete_pdo = $bdd->prepare("set FOREIGN_KEY_CHECKS=0");
    $requete_pdo->execute();

$clipTitre = $ligne[8].' '.$ligne[9];
$lienTitre = $ligne[5].' '.$ligne[6].' '.$ligne[7];





$query = $bdd->prepare("INSERT INTO titre (clip_Titre, lienEcouteTitre_Titre) VALUES (:clipTitre, :lienTitre)");
$query->execute(array(
    'clipTitre'=> $clipTitre,
    'lienTitre' => $lienTitre
));


}

