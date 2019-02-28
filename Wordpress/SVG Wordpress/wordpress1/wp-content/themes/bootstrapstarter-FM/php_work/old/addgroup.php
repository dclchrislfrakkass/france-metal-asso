<?php
// Connexion à la BDD
try {
    
    $bdd = new PDO('mysql:host=localhost; dbname=france_metal_asso', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
 
catch(exception $e) {
    die('Erreur '.$e->getMessage());
}

// Lecture du fichier CSV
$fichier = 'AWARDS 2018-sicca-test.csv';

$csv = new SplFileObject($fichier);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl('|');

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




?>
